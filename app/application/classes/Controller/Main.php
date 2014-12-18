<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template{
	
	public $template = "template";
	
	public function before()
	{
		if ($this->request->is_ajax())
		{
			$this->auto_render = FALSE;
		}
	
		parent::before();
	}
	
	public function after()
	{
		if ($this->request->is_ajax())
		{
			$this->auto_render = FALSE;
		}
	
		parent::after();
	}
	
	public function action_index()
	{
		//$this->template->
		//$clients = $this->_allClients();
		//$table = View :: factory('client/table')->set('clients',$clients); 
		//$view = View::factory('template')->set('content',$table);
		//
		//$this->response->body($view);
		
	}
	
	public function action_allClients(){
	$clients = Model::factory('clients');	
	
	$all_clients = $clients->get_all_clients();
	
	print json_encode($all_clients);
	
	}
	
	
	private function _valid($post){
		
		$clients = Model::factory('clients');
		$object = Validation::factory($post);	
		$object->rules(		
		   'number',array(
			array('not_empty'),
		        array('max_length', array(':value', 10)),
			array('numeric')			
			//array(array($clients,'unique_number'))
			
		   ));
		
		 $object->rules(  
		   'name',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD')) 
		   ));
		  $object->rules( 
		   'last_name',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD')) 	
		   ));
		  $object->rules(
		   'email', array(
		      array('not_empty'),
		      array('max_length', array(':value', 100)),
		      array('email')
		   ));
		   
		   $object->rules(
		   'adress',array(
			array('not_empty'),
		        array('max_length', array(':value', 100))    
		   ));
		   $object->rules(
		   'city',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD')) 
		   ));
		   $object->rules(
		   'country',array(
			array('not_empty'),
		        array('max_length', array(':value', 100)),
			array('regex', array(':value', '/^[a-z_.]++$/iD'))
		   ));
		   
		return $object;
		
	}
	
	
	public function action_add(){
		$clients = Model::factory('clients');
		if ($this->request->is_ajax()){
			$post = $this->request->post();
				foreach ($post as $value => $key){
				$post[$value] = trim(htmlentities($key)); 
				}
			$object = $this->_valid($post);
			
			
			if ($object->check())
			{
				try {
				if (!$clients->add_client($post)) {
				    throw new Exception("Somethink was wrong!!");
					}
				}
				catch (Exception $e) {
				    echo $e->getMessage();}	
					
			
			}else
			{			
			return false;
			}		
		}else {
			echo "Direct access not alowed";
		}//endif;
	}
	
	
	
	
	public function action_get_one_client(){
		if ($this->request->is_ajax()){
		
		$id = $this->request->post('id');
		if (!isset($id) || !is_numeric($id)){
			 exit();
		}
		$clients = Model::factory('clients');
		
		try {
			if (!$single = $clients->one_client($id)) {
			    throw new Exception("Somethink was wrong!!");
				}
			}
			catch (Exception $e) {
			    echo $e->getMessage();}
		
		
		print json_encode($single);
		}
		else{echo "Direct access not alowed";}
		
	}
	
	public function action_edit(){
				
		if ($this->request->is_ajax()){
		$client = Model::factory('clients');	
		$id = $this->request->post('id');	
			$post = $this->request->post();
		foreach ($post as $value => $key){
			$post['id']= $id;
			$post[$value] = trim(htmlentities($key)); 
			}
		
		$object = $this->_valid($post);
		
		if ($object->check())
			{
				
			try {
			if (! $client->edit_client($post)) {
			    throw new Exception("Somethink was wrong!!");
				}
			}
			catch (Exception $e) {
			    echo $e->getMessage();}
			}
			else {
		
		return false;
		  
		}
		
		
			
			
		}//endif;
		
		
		
	}

	public function action_del(){
		
		if ($this->request->is_ajax()){
		$id = $this->request->post('id');
		if (!isset($id) || !is_numeric($id)){
			 exit();
		}elseif (isset($id) && !empty($id)) {
		
		$clients = Model::factory('clients');
		$clients->del_client($id);
		
		}
		}else {
			echo"Direct acces not alowed";
		}
	}
	
	
} // End Main
