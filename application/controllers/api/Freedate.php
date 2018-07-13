<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Freedate extends CI_Controller {
    
	    /**
     *计算费用
     *
     *@param entertime string 停车开始时间（例：2017-03-07 08:00:00）
     *@param leavetime string 停车结束时间
     *@param ratecode string 费率代码
     *@return number 费用
     */
	public function getAmountPayable($enterTime,$leaveTime,$metreode) {
		
		   
			 $this -> 
			 output -> 
			 set_content_type('application/json') -> 
			 set_output(json_encode(1));
   
	}

}
