<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
function __construct(){
parent::__construct();
}
		

public function you()
	{
		$this->load->view('you_view');
	}
}
?>