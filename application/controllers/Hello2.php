<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello2 extends CI_Controller {
    //class variables
var $name;
var $color;
function __construct(){
parent::__construct();
//give default value
$this->name="keza";
$this->color="pink";


}
		

function you2()

	{
        $data['name']=$this->name;
        $data['color']=$this->color;

		$this->load->view('you_view2',$data);
	}
}
?>