<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Freedate.php');

class Stopinfo extends CI_Controller {

	public function index() {

		$this -> load -> view('stopinfo/main.html');

	}
	 public function test(){
	 
	     $fre = new  Freedate;
		 
		 $Alipay = $fre->getAmountPayable(123, 321, 4654);
	 }

}
