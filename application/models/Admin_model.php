<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	
   const TBL_USER = 'sys_user';
    # 新增用户
	public function add_user($data) {
		return $this -> db -> insert(self::TBL_USER, $data);
	}
	
	#删除用户
	public function del_user($data) {
		return $this -> db -> delete(self::TBL_USER, $data);
	}
	
    # 登陆获取
	public function get_user($username, $password) {
		$condition['user_name'] = $username;
		$condition['password'] = $password;
		$query = $this -> db -> where($condition) -> get(self::TBL_USER);
		return $query -> row_array();
	}

}
