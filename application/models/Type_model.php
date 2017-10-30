<?php 

	class Type_model extends CI_Model{
		public function selectUserType($userid){
			$data['manageid'] = $userid;
			$res = $this->db->where($data)
					 ->get('type');

			if($res->result()){
				return $res->result();
			}else{
				return 0;
			}
		}
		public function selectTypeByName($name){
			$res = $this->db->where('name',$name)
							->get('type');
			return $res->result();
		}

		public function selectSingleType($id){
			$res = $this->db->where('id',$id)
							->get('type');
			return $res->result();
		}

		public function selectAllType(){
			$res = $this->db->select('id,name')
							->from('type')
							->where('pid','0')
							->get();
			return $res->result();
		}

		public function insertType($data){
			$res = $this->db->where($data)
							->get('type');
			if(!$res->result()){
				$res = $this->db->insert('type',$data);
				return $res;
			}else{
				return "isre";
			}
		}

		public function updateType($data){
			$res = $this->db->where('manageid',$_SESSION['id'])
			                ->update('type',$data);
			return $res;
		}

		public function selectTypeColumn($pid){
			$res = $this->db->where('pid',$pid)
							->get('type');
			return $res->result();
		}

	}
 ?>