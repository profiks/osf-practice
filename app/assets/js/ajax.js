$(document).ready(function(){
    
       
    
       $.reject({  
        reject: { 
             safari: true, // Apple Safari
             chrome: false, // Google Chrome
             firefox:false, firefox1: true, firefox2: true , // Mozilla Firefox
             msie: true, // Microsoft Internet Explorer
             opera: true, // Opera
             konqueror: true, // Konqueror (Linux)
             unknown: true // Everything else
        }, // Reject all renderers for demo  
        // Path where images are located  
        imagePath: 'assets/images/', 
        close: false, // Prevent closing of window 
        display: ['firefox','chrome','opera'], // Displays only firefox, chrome, and opera   
        paragraph1: 'You will not be able to close this window', // Warning about closing  
        paragraph2: 'To exit, you must '+  
        '<a href="javascript:window.location=window.location.pathname;">refresh the page</a>'  
        });  
   
       

        

    $('#indicator').hide();
    addLink();       
    getUserList(); 
    
    
    
    
    $(document).on("click", "a#addClient", function(){ getCreateForm(this);});
    $(document).on("submit", "#infoClient", function(event){ 
        event.preventDefault();
        addClient(this);
    });
    
    $(document).on("click", "a.delete_confirm", function(){ deleteConfirmation(this); });
    $(document).on("click", "button.delete", function(){ delClient(this); });
    
    $(document).on("click", "a.edit_confirm", function(){ editForm(this); });
    $(document).on("submit", "#editableInfo", function(event){ 
        event.preventDefault();
        editClient(this);
    });
    
    
    
 }); //end DOM  
   
   
    
            function delClient(){
                $.post( "/main/del/",
                      { id: $('#delete_confirm_modal input#user_id').val() },
                      function (){
                getUserList();
                $("#delete_confirm_modal").modal("hide");
                      });
                
            }
        
        function editForm(el){
            
            var id = $(el).attr('client_id');           
             $.post('/main/get_one_client/',{
                id : id
                },
                function(data) {                    
                renderEditForm(data);
                }
            );
            
        }    
        
        function renderEditForm(jsonData){
            
           
            var clients = jQuery.parseJSON(jsonData);
            
             $.each(clients, function(index, client){
            var modal ='<div class="modal fade" id="edit_form"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal += '<div class="modal-dialog">';
            modal += '<div class="modal-content">';
            modal += '<div class="modal-header">';
            modal += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>';
            modal += '<h3>Edit current client</h3>';
            modal += '</div>';
            modal += '<div class="modal-body">';
            modal +='<form id="editableInfo">';
        
            modal += '<div  class="">'; 
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="number" class="control-label">Number</label>';
            modal += '<input name="number"  id="number" placeholder="Number" type="number" min="1" class="form-control" required value="'+client.number+'" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="name"  class="control-label">Name</label>';
            modal += '<input name="name" type="text" id="name" placeholder="Name" class="form-control" value="'+client.name+'" required pattern="[a-zA-Z]+" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="last_name"  class="control-label">Last Name</label>';
            modal += '<input name="last_name" type="text" id="last_name" placeholder="Last Name" class="form-control" value="'+client.last_name+'" required pattern="[a-zA-Z]+" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="email" class="control-label">Email</label>';
            modal += '<input name="email" id="email" placeholder="Email" class="form-control" value="'+client.email+'" type="email" required pattern="[^@]+@[^@]+.[a-z]+" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="adress" class="control-label">Adress</label>';
            modal += '<input name="adress" id="adress" placeholder="Adress" class="form-control" value="'+client.adress+'" required type="text" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="city" class="control-label">City</label>';
            modal += '<input name="city" id="city" placeholder="City" class="form-control" value="'+client.city+'" required pattern="[a-zA-Z]+" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';
            
            modal += '<div class="">';
            modal += '<div class="form-group">';
            modal += '<label for="country" class="control-label">Country</label>';
            modal += '<input name="country" id="country" placeholder="Country" class="form-control" value="'+client.country+'" required pattern="[a-zA-Z]+" autocomplete="off">';
            modal += '</div>';
            modal += '</div>';            
            modal +='</div>';
            
            modal += '<div class="modal-footer">';
            
            modal += '<div class="">';
            modal += '<button  id="edit_user" class="btn btn-primary">Save changes</button>';
            modal += '<button class="btn pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button>';
            modal += '</div>';
            modal += '</div>';
            
            modal+='</form>';
            
            modal += ' <input type="hidden" id="user_id" value="'+client.id+'" />';
            modal += ' </div>';
            modal += ' </div><!-- /.modal-content -->';
            modal += '</div><!-- /.modal-dialog -->';
            modal += ' </div><!-- /.modal -->';
             
           $('div#modal').html(modal);
           });
           $("#edit_form").modal("show");
           ValidForm('#editableInfo');
        }
        
        function editClient(){
            
            $.post('/main/edit/',
            {        id         :  $('input#user_id').val(),
                     number     :  $('input#number').val(),
                     name       :  $('input#name').val(),
                     last_name  :  $('input#last_name').val(),
                     email      :  $('input#email').val(),
                     adress     :  $('input#adress').val(),
                     city       :  $('input#city').val(),
                     country    :  $('input#country').val()
            },function(data){
                $("#edit_form").modal("hide");
                    getUserList();
            });
            
            
        }
        
        
          function addClient(){
            $.post('/main/add/',
            {        number     :  $('input#number').val(),
                     name       :  $('input#name').val(),
                     last_name  :  $('input#last_name').val(),
                     email      :  $('input#email').val(),
                     adress     :  $('input#adress').val(),
                     city       :  $('input#city').val(),
                     country    :  $('input#country').val()
            },function(data){
                $("#add_modal").modal("hide");
                    getUserList();
            });
            
        }
    
            
    
        function getUserList() {
            $.post('/main/allClients/',{},
                function(data) {
                     renderCLientList(data);
                        
                    }
                
            );
        }

        function renderCLientList(jsonData) {
         
            var table = '<table width="600" cellpadding="5" class="table table-hover table-bordered"><thead><tr><th scope="col">Number</th><th scope="col">Name</th><th scope="col">Last Name</th><th scope="col">Email</th><th scope="col">Address</th><th scope="col">City</th><th scope="col">Country</th><th scope="col">Actions</th></tr></thead><tbody>';
            var clients = jQuery.parseJSON(jsonData);           
            
            $.each(clients, function(index, client){
            table += '<tr>';
            table += '<td field="number" >'+client.number+'</td>';
            table += '<td field="name" >'+client.name+'</td>';
            table += '<td field="last_name" >'+client.last_name+'</td>';
            table += '<td field="email" >'+client.email+'</td>';
            table += '<td field="adress" >'+client.adress+'</td>';
            table += '<td field="city" >'+client.city+'</td>';
            table += '<td field="country" >'+client.country+'</td>';
            table += '<td><a href="javascript:void(0);" client_id="'+client.id+'" class="delete_confirm btn btn-danger btn-xs">Delete</a><a href="javascript:void(0);" client_id="'+client.id+'" class="edit_confirm btn btn-info btn-xs">Edit</a></td>';
            table += '</tr>';
            });
         
            table += '</tbody></table>';            
            $('div#response').html(table);
        }
        
        function getCreateForm() {
          
        var form ='<div class="modal fade" id="add_modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            form += '<div class="modal-dialog">';
            form += '<div class="modal-content">';
            form += '<div class="modal-header">';
            form += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>';
            form += '<h3>Add new client</h3>';
            form += '</div>';            
            form += '<div class="modal-body">';
            
            form +='<form id="infoClient" class="form-horizontal">';        
            form += '<div  class="">'; 
            form += '<div class="form-group">';
            form += '<label for="number" class="control-label col-xs-3">Number</label>';
            form += '<div class="col-xs-3">';
            form += '<input name="number"  id="number" placeholder="Number" type="number" min="1" class="form-control" required autocomplete="off">';
            form += '</div>';
            form += '</div>';
            
           
            form += '<div class="form-group">';            
            form += '<label for="name"  class="control-label col-xs-3">Name</label>';
            form += '<div class="col-xs-8">';
            form += '<input name="name" type="text" id="name" placeholder="Name" class="form-control" required pattern="[a-zA-Z]+" autocomplete="off">';
            form += '</div>';
            form += '</div>';
            
            
            form += '<div class="form-group">';
            form += '<label for="last_name"  class="control-label col-xs-3">Last Name</label>';
            form += '<div class="col-xs-8">';
            form += '<input name="last_name" type="text" id="last_name" placeholder="Last Name" class="form-control" required pattern="[a-zA-Z]+" autocomplete="off">';
            form += '</div>';
            form += '</div>';
            
            
            form += '<div class="form-group">';
            form += '<label for="email" type="email" class="control-label col-xs-3">Email</label>';
            form += '<div class="col-xs-8">';
            form += '<input name="email" id="email" placeholder="Email" class="form-control"  type="email" required pattern="[^@]+@[^@]+.[a-z]+" autocomplete="off">';
            form += '</div>';
            form += '</div>';
            
            
            form += '<div class="form-group">';
            form += '<label for="adress" class="control-label col-xs-3">Adress</label>';
            form += '<div class="col-xs-8">';
            form += '<input name="adress" type="text" id="adress" placeholder="Adress" class="form-control" required autocomplete="off">';
            form += '</div>';
            form += '</div>';
        
            
            form += '<div class="form-group">';
            form += '<label for="city" class="control-label col-xs-3">City</label>';
            form += '<div class="col-xs-8">';
            form += '<input name="city" type="text" id="city" placeholder="City" class="form-control" required pattern="[a-zA-Z]+" autocomplete="off">';
            form += '</div>';
            form += '</div>';
            
            
            form += '<div class="form-group">';
            form += '<label for="country" class="control-label col-xs-3">Country</label>';
            form += '<div class="col-xs-8">';
            form += '<input name="country" id="country" placeholder="Country" class="form-control" type="text" required pattern="[a-zA-Z]+" autocomplete="off">';
            form += '</div>';
            form += '</div>'; 
            form += '</div>';
            form += '<div class="modal-footer">';            
            form += '<div class="">';
            form += '<button  id="okButton" class="btn btn-primary">Add this client</button>';
            form += '</div>';
            form += '</div>';
            
            form+='</form>';
           
            form += ' </div>';
            form += ' </div><!-- /.modal-content -->';
            form += '</div><!-- /.modal-dialog -->';
            form += ' </div><!-- /.modal -->'; 
        
            $('div#modal').html(form);            
            $("#add_modal").modal("show");
            
            ValidForm('#infoClient');
            
        }
         
    
        
            
        function deleteConfirmation(el) {
            
        var modal ='<div class="modal fade" id="delete_confirm_modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            modal += '<div class="modal-dialog">';
            modal += '<div class="modal-content">';
            modal += '<div class="modal-header">';
            modal += '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>';
          
            modal += '<h3 id="myModalLabel">Delete User</h3>';
            modal += '</div>';
            modal += '<div class="modal-body">';
            modal += '<p>Are you sure to delete this user?</p>';
            modal += '</div>';
            modal += '<div class="modal-footer">';
            
            
            modal += ' <input type="hidden" id="user_id" value="" />';
            modal += '<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>';
            modal += ' <button class="btn btn-primary delete">Yes</button> ';
            modal += ' </div>';
            modal += ' </div><!-- /.modal-content -->';
            modal += '</div><!-- /.modal-dialog -->';
            modal += ' </div><!-- /.modal -->';
       
           $('div#modal').html(modal);
           
           $("#delete_confirm_modal").modal("show");          
           $("#delete_confirm_modal input#user_id").val($(el).attr('client_id'));
       }
        
      
      function addLink(){
        
        var link ='<a href="javascript:void(0);" id="addClient" class="btn btn-info btn-xs">Add new client</a>';
        $('div.addLink').html(link);
      }
        
       function ValidForm(elem){
            
            $(elem).validate({
           
            "rules" : {
                "number" :{
              "minlength":1,
                 "maxlength":8,
                   "required" : true,
                   "number": true
                 },
                 "name" :{
                    "minlength":2,
                    "maxlength":100,
                    "required" : true
                },
                 "last_name" :{
                    "minlength":2,
                    "maxlength":150,
                    "required" : true
                 },
                 "email" :{
                    "required" : true,
                     "email": true
                 },
                 "adress" :{
                        "required" : true,
                    "maxlength":200
                 },
                 "city" :{
                        "required" : true,
                    "maxlength":150
                 },
                 "country" :{
                        "required" : true,
                    "maxlength":100
                 }
            }
                    });
        
        } 
    
