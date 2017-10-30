<?php 
	class Code_model extends CI_Model{
		public function insertCode($code){
			$data = array(
				"code"=>$code
				);
			return $this->db->insert("code",$data);
		}

		public function selectCode($invitationCode){
			$res = $this->db->select('code')
							->from('code')
							->where('code',$invitationCode)
							->get();

			if($res->result())
				return 1;
			else
				return 0;
		}
	}
 ?>