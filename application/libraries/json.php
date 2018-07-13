<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Json 输出类
 * 重写,精简Json输出代码
 * */
class  Json {
   
	protected $CI;
	
	public function __construct() {
	
		$this -> CI = &get_instance();
	}
    public function setJson($rdata)
    {
        $this -> CI -> output -> set_content_type('application/json') -> set_output(json_encode($rdata));
        
    }
}
