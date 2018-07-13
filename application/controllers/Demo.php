<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo  extends CI_Controller {

	public function index() {

		$this -> load -> view('layui/ajax.html');

	}
 //layui 时间
	public function Time() {

		$this -> load -> view('layui/time.html');
	}
 //layui 弹窗
 
	public function msg() {

		$this -> load -> view('layui/msg.html');
	}

}
