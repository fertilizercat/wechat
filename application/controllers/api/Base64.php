<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base64 extends CI_Controller {
  	
  # 接收base64编码图片
  
	public function setSaveImage() {
		$image = $this -> input -> post('image');
		if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $image, $result)) {
			$type = $result[2];
			$new_file = "public/uploads/" . date('Ymd', time()) . "/";
			if (!file_exists($new_file)) {
				# 检查是否有该文件夹，如果没有就创建，并给予最高权限
				mkdir($new_file, 0700);
			}
			$new_file = $new_file . time() . ".{$type}";
			if (file_put_contents($new_file, base64_decode(str_replace($result[1], '', $image)))) {
				$rdata['code'] = 100;
				$rdata['message'] = '上传成功';
				$this -> json -> setjson($rdata);
				log_message('info',$new_file);
			} else {
				$rdata['code'] = 101;
				$rdata['message'] = '上传失败';
				$this -> json -> setjson($rdata);
			}
		} else {
			$rdata['code'] = 103;
			$rdata['message'] = '不是图片';
			$this -> json -> setjson($rdata);
		}
	}

	public function index() {

		$this -> load -> view('layui/layout.html');

	}

}
