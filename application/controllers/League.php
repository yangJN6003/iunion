<?php 
	session_start();
	class League extends CI_Controller{
		public function index(){
			$data['title'] = "南开大学百团争鸣";
			$this->load->view('header',$data);
			$this->load->view('index',$data);
		}

		public function leagueRegister(){
			$data['title'] = "社团入住";
			$this->load->view('header',$data);
			$this->load->view('register',$data);
		}

		public function leagueLogin(){
			$data['title'] = "社团登陆";
			$this->load->view('header',$data);
			$this->load->view('login',$data);
		}

		public function leagueSpace(){
			if(!isset($_SESSION['id'])){
					echo "请登录...1秒钟后跳转";
					$st = site_url('League/leagueLogin');
					header("refresh:1;url=$st");
					return;	
			}

			$this->load->model('type_model','type');
			$isCreate = $this->type->selectUserType($_SESSION['id']);

			if($isCreate){
				$data['iscreate'] = 1;
				$data['title'] = $isCreate[0]->name;
				$data['info'] = $isCreate;
				$this->load->view('header',$data);
				$this->load->view('space',$data);
			}else{
				$res = $this->type->selectAllType();
				$data['title'] = '创建社团';
				$data['isedit'] = 0;
				$data['typelist'] = $res;
				$this->load->view('header',$data);
				$this->load->view('update',$data);
			}
		}

		public function leagueEdit(){
			if(!isset($_SESSION['id'])){
					echo "请登录...1秒钟后跳转";
					$st = site_url('League/leagueLogin');
					header("refresh:1;url=$st");
					return;	
			}


			$data['title'] = "更改信息";
			$data['isedit'] = 1;
			$this->load->model('type_model','type');
			$res = $this->type->selectUserType($_SESSION['id']);
			//var_dump($res);

			$data['info'] = $res;

			$res = $this->type->selectAllType();
			$data['typelist'] = $res;
			$this->load->view('header',$data);
			$this->load->view('update',$data);
		}

		public function leagueUpdate(){

			if(!isset($_SESSION['id'])){
					echo "请登录...1秒钟后跳转";
					$st = site_url('League/leagueLogin');
					header("refresh:1;url=$st");
					return;	
			}

			$name = $this->input->post('name');
			$this->load->model('type_model','type');
			


			$fuzeren = $this->input->post('fuzeren');
			$type = $this->input->post('type');
			$phone = $this->input->post('phone');
			$weixin = $this->input->post('weixin');
			$email = $this->input->post('email');
			$biaoyu = $this->input->post('biaoyu');
			$jianjie = $this->input->post('jianjie');
			$rongyu = $this->input->post('rongyu');
			$huafen = $this->input->post('huafen');
			$duixiang = $this->input->post('duixiang');
			$jiezhi = $this->input->post('jiezhi');
			$isedit = $this->input->post('isedit');
			$qianming = $this->input->post('qianming');
			$gongzhonghao = $this->input->post('gongzhonghao');

			

			if($this->upload())
			{
				$file = $this->upload->data();
				$data['pic'] = base_url()."extra/imgs/logo/".$file['file_name'];
			}

			
			$data['pid'] = $type;
			
			$data['name'] = $name;
			$data['manageid'] = $_SESSION['id'];
			$data['managename'] = $fuzeren;
			$data['phone'] = $phone;
			$data['weixin'] = $weixin;
			$data['biaoyu'] = $biaoyu;
			$data['email'] = $email;
			$data['description'] = $jianjie;
			$data['award'] = $rongyu;
			$data['bumenhuafen'] = $huafen;
			$data['naxinduixiang'] = $duixiang;
			$data['jiezhiriqi'] = $jiezhi;
			$data['qianming'] = $qianming;
			$data['gongzhonghao'] = $gongzhonghao;

			if(!$isedit){
				
				$res = $this->type->selectTypeByName($name);
				if($res){
					echo "社团已存在...1秒钟后跳转";
					$st = site_url('League/leagueSpace');
						header("refresh:1;url=$st");
					return;
				}

				$res = $this->type->insertType($data);		
				if($res){
					if($res == "isre")
						echo "已经创建成功...1秒钟后跳转";
					else
						echo "创建成功...1秒钟后跳转";
					$st = site_url('League/leagueSpace');
					header("refresh:1;url=$st");		
				}else{
					echo "创建失败";
				}
			}else{
				
				$res = $this->type->updateType($data);
				if($res){
					echo "修改成功...1秒钟后返回";
					$st = site_url('League/leagueSpace');
					header("refresh:1;url=$st");		
				}else{
					echo "修改失败";
				}
			}
		}

		public function leagueShowColumn($num = 1){

			$data['title'] = "南开大学百团争鸣";

			$this->load->model('type_model','type');
			$res = $this->type->selectTypeColumn($num);
			$data['unionlist'] = $res;
			$data['column'] = $num;

			$this->load->view('header',$data);
			$this->load->view('union',$data);
		}

		public function leagueTypeInfo($id){
			$this->load->model('type_model','type');
			$res = $this->type->selectSingleType($id);

			$data['title'] = $res[0]->name;
			$data['info'] = $res;

			$this->load->view('header',$data);
			$this->load->view('info',$data);
		}

		public function leagueJoin($id){
			$data['title'] = "加入社团";

			$this->load->model('type_model','type');
			$res = $this->type->selectSingleType($id);

			$data['info'] = $res;
			$data['num'] = $id;

			$this->load->view('header',$data);
			$this->load->view('join',$data);
		}

		public function leagueExcel($id){
			
			$this->load->model('apply_model','apply');
			$res = $this->apply->selectTypeApplyExcel($id);
			//var_dump($res);

			$table = "<table><tr><td>姓名</td><td>校区</td><td>性别</td><td>手机号</td><td>邮箱</td><td>院系</td><td>专业</td><td>年级</td><td>简介</td><td>特长</td><td>意向</td><td>是否服从调剂</td></tr>";

			foreach($res as $item){
				$table .= "<tr>";

				$table .= "<td>".$item->name."</td>";
				if($item->area){
					$table .= "<td>津南校区</td>";
				}else{
					$table .= "<td>八里台校区</td>";
				}
				if($item->gender){
					$table .= "<td>妹纸</td>";
				}else{
					$table .= "<td>汉纸</td>";
				}
				
				$table .= "<td>".$item->phone."</td>";
				$table .= "<td>".$item->email."</td>";
				$table .= "<td>".$item->department."</td>";
				$table .= "<td>".$item->major."</td>";
				$table .= "<td>".$item->grade."</td>";
				$table .= "<td>".$item->introduce."</td>";
				$table .= "<td>".$item->techang."</td>";
				$table .= "<td>".$item->yixiangbumen."</td>";

				if($item->tiaoji){
					$table .= "<td>不服从调剂</td>";
				}else{
					$table .= "<td>服从调剂</td>";
				}

				$table .= "</tr>";
			}
			$table .="</table>";
			//$table = iconv("UTF-8","GBK//IGNORE",$table);

			$filename = date('Ymdhis');
        	header ( 'Pragma:public');
        	header ( 'Expires:0');
        	header ( 'Cache-Control:must-revalidate,post-check=0,pre-check=0');
        	header ( 'Content-Type:application/force-download');
       	 	header ( 'Content-Type:application/vnd.ms-excel;charset=GBK');
        	header ( 'Content-Type:application/octet-stream');
        	header ( 'Content-Type:application/download');
        	header ( 'Content-Disposition:attachment;filename='.$filename.".xls" );

			echo $table;
		}

		public function leagueList($id){
			if(!isset($_SESSION['id'])){
					echo "请登录...1秒钟后跳转";
					$st = site_url('League/leagueLogin');
					header("refresh:1;url=$st");
					return;	
			}
			$this->load->model('apply_model','apply');
			$res = $this->apply->selectTypeApply($id);
			$data['info'] = $res;
			$data['title'] = "报名情况";

			$this->load->model('type_model','type');
			$res = $this->type->selectSingleType($id);
			$data['typeinfo'] = $res;

			$this->load->view('header',$data);
			$this->load->view('list',$data);

		}

		public function leaguePerson($id){
			$data['title'] = "简历信息";
			$this->load->model('apply_model','apply');
			$this->load->model('type_model','type');

			$res = $this->apply->selectSingleApply($id);
			$data['applyinfo'] = $res;

			$res = $this->type->selectSingleType($res[0]->typeid);
			$data['typeinfo'] = $res;

			$this->load->view('header',$data);
			$this->load->view('person',$data);
		}

		public function leagueHelp(){
			$data['title'] = "帮助";

			$this->load->view('header',$data);
			$this->load->view('help',$data);

		}


		//上传文件函数
	function upload()
	{
	    //上传目录需要手工创建
		$config['upload_path'] = './extra/imgs/logo/';
	    //echo $config['upload_path'];
	    //生成新的文件名
		$config['file_name'] = uniqid();
	    //允许创建的文件名
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
	    //装载文件上传类
		$this->load->library('upload',$config);
	    //上传
		if(!$this->upload->do_upload('pic'))
		{
			$this->upload->display_errors();
			return false;
		}
		$data = $this->upload->data();
	    		//echo $data['file_name'];
		return true;
	}
	}
 ?>