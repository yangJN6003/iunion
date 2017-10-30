<?php
	session_start();
	class Code extends CI_Controller {
		public function index()
		{
			
			$data['title'] = "添加邀请码";
			$this->load->view('header',$data);
			$this->load->view('admin/code',$data);
		}
	
		public function ajax_addCode(){
			$code = md5(uniqid());
			
			$code = "i".substr($code, -5, 5);


			$this->load->model('Code_model','code');
			$res = $this->code->insertCode($code);
			if($res){
				$data['result'] = "success";
				$data['code'] = $code;
			}else{
				$data['result'] = "fail";
			}

			echo json_encode($data);

		}
}
