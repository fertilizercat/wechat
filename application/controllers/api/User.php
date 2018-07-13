<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function nowtime() {

		$date = date('Y-m-d H:i:s');

		if ($date) {
			$rdata['ret_code'] = 0;
			$rdata['message'] = 'ok';
			$rdata['date'] = $date;
		} else {
			$rdata['ret_code'] = '99';
			$rdata['message'] = '失败';
		}
		
	$this -> json -> setjson($rdata);

	}

}
