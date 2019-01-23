<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello3 extends CI_Controller {
    //class variables
var $name;
var $color;
function __construct(){
parent::__construct();
//give default value
$this->name="camilla";
$this->color="Red";


}
		

function you3($firstname='',$lastname='')
//give variable sthat GET vlues

	{
        $data['name']=($firstname)?$firstname. ' '.$lastname:$this->name;
        $data['color']=$this->color;

		$this->load->view('you_view3',$data);
	}
}
?>