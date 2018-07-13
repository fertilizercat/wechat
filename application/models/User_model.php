<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
   const TBL_USER = 'sys_user';
	public function add_user($data) {
		return $this -> db -> insert(self::TBL_USER, $data);
	}

	public function get_user($username, $password) {
		$condition['user_name'] = $username;
		$condition['password'] = $password;
		$query = $this -> db -> where($condition) -> get(self::TBL_USER);
		return $query -> row_array();
	}

}
