<?php 
	class Apply_model extends CI_Model{
		public function insertApply($data){
			$res = $this->db->insert('apply',$data);
			return $res;
		}

		public function selectTypeApply($typeid){
			$res = $this->db->where('typeid',$typeid)
							->get('apply');
			return $res->result();
		}

		function selectSingleApply($id){
			$res = $this->db->where('id',$id)
							->get('apply');

			return $res->result();
		}

		public function selectTypeApplyExcel($typeid){
			$res = $this->db->select('distinct(phone),name,area,gender,email,department,major,grade,introduce,techang,yixiangbumen,tiaoji')
							->where('typeid',$typeid)
							->get('apply');
			return $res->result();
		}
	}
 ?>