<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
function __construct(){
parent::__construct();
//you can do this in autoload.php and list all the array items 
// $this ->load->helper("url");
$this ->load->model('Users_model');
}
		

public function index()
	{
		//this refers to the users in the data from the database that
		// was declared in the users_model.php method get_all_users
		
		$data['user_list'] =$this->Users_model->get_all_users();
		$this->load->view('show_users',$data);
	}


public function add_form()

{
	$this->load->view('insert');

}
public function insert_new_user()
{
    $udata['name'] = $this->input->post('name');
    $udata['email'] = $this->input->post('email');
    $udata['address'] = $this->input->post('address');
    $udata['mobile'] = $this->input->post('mobile');

    $res = $this->users_model->insert_users_to_db($udata);
    if ($res){
        header('location:' . base_url()."index.php/users/".$this->index()) ;

    }

}

}
?>