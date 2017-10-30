<?php 
	class User_model extends CI_Model{
		public function insertUser($name,$password){
			$data = array(
				"name"=>$name,
				"password"=>md5($password)
				);
			return $this->db->insert("user",$data);
		}

		public function selcetUserByName($name){
			$data['name'] = $name;
			$res = $this->db->where($data)
				     		->get('user');
			return $res->result();
		}

		public function checkLogin($name,$password){
			$data = array(
				"name"=>$name,
				"password"=>md5($password)
				);
			$res = $this->db->where($data)
					 ->get('user');

		 	if($res->result()){
		 		return $res->result();
		 	}else{
		 		return 0;
		 	}
		}	
	}
 ?>