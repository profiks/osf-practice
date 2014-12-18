<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Clients extends Model
{
    
    
    /* postreSQL don't accept stored procedure, but same result may be using functions*/
    private $procedure;
    
    /* created view in database */
    private $view;
    
        private $id;
        private $number;
        private $name;
        private $last_name;
        private $email;
        private $adress;
        private $city;
        private $country;
    
    
    public function get_all_clients() { 
        $conn = Database::instance();       
        $queryStr = "SELECT * FROM list_all_clients()";
        $query = DB::query(Database::SELECT, $queryStr);
        $clients = $query->execute($conn)->as_array();
        
        if($clients){
            if(count($clients) > 0){
                return $clients; 
            }else{
               return null; 
            }
        }
        
         
    }
    
    /**
     *@accept array of pram
     *
     *@param int client number
     *@param varchar name
     *@param varchar last name
     *@param varchar email
     *@param varchar adress
     *@param varchar city
     *@param varchar country
     */
    public function add_client($array){
        
        $number     = $array['number'];
        $name       = $array['name'];
        $last_name  = $array['last_name'];
        $email      = $array['email'];
        $adress     = $array['adress'];
        $city       = $array['city'];
        $country    = $array['country'];
        
       
        $conn = Database::instance();     
        $queryStr = "SELECT * FROM add_client($number,'$name','$last_name','$email','$adress','$city','$country')";
       
        $query = DB::query(Database::SELECT, $queryStr);
        return $query->execute($conn);
        
    }
    
    /**
     *@param int id
     *@param int client number
     *@param varchar name
     *@param varchar last name
     *@param varchar email
     *@param varchar adress
     *@param varchar city
     *@param varchar country
     */
    public function edit_client($array){                
        
        $id = $array['id'];
        $number = $array['number'];
        $name = $array['name'];
        $last_name = $array['last_name'];
        $email = $array['email'];
        $adress = $array['adress'];
        $city = $array['city'];
        $country = $array['country'];
        
        $conn = Database::instance();       
        $queryStr = "SELECT * FROM update_client($id,$number,'$name','$last_name','$email','$adress','$city','$country')";
        $query = DB::query(Database::SELECT, $queryStr)->execute($conn);
         if($query){  return true; }else{ return false; }
    }
    /**
     *@param int client id
     */
    public function one_client($id=''){
        $conn = Database::instance();       
        $queryStr = "SELECT * FROM get_client($id)";
        $query = DB::query(Database::SELECT, $queryStr);
        $client = $query->execute($conn)->as_array();
    
    if($client){
            if(count($client) > 0){
                return $client; 
            }else{
               return null; 
            }
        }
    
    
    }
    /**
     *@param int client id
     */
    public function del_client($id){
        
        
        $conn = Database::instance();       
        $queryStr = "SELECT * FROM del_client($id)";
        $query = DB::query(Database::SELECT, $queryStr)->execute($conn);
         if($query){  return true; }else{ return false; }
    }
    
    /*this function DON'T use!!!!!!!!*/
    public static function unique_number($number)
    {
        // Check if the username already exists in the database
        return ! DB::select(array(DB::expr('COUNT(number)'), 'total'))
            ->from('list')
            ->where('number', '=', $number)
            ->execute()
            ->get('total');
    }
    
    
}