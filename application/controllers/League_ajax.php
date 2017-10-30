<?php 
	session_start();
	class League_ajax extends CI_Controller{

		public function index(){
			;
		}

		public function register_ajax(){
			$invitationCode = $this->input->post('invitationCode');
			$name = $this->input->post('name');
			$password = $this->input->post('password');

			$this->load->model('code_model','code');
			$iscode = $this->code->selectCode($invitationCode);


			if(!$iscode){
				echo json_encode("codewrong");
				return;
			}
			$this->load->model('user_model','user');
			$res = $this->user->selcetUserByName($name);
			if($res){
				echo json_encode("isres");
				return;
			}

			
			$isinsert = $this->user->insertUser($name,$password);
			if($isinsert){
				echo json_encode("success");
			}else{
				echo json_encode("fail");
			}
		}

		public function login_ajax(){
			$name = $this->input->post('name');
			$password = $this->input->post('password');

			$this->load->model('user_model','user');
			$isLogin = $this->user->checkLogin($name,$password);

			if($isLogin){
				$_SESSION['id'] = $isLogin[0]->id;
				$_SESSION['name'] = $isLogin[0]->name;
				echo json_encode("success");
			}else{
				echo json_encode("fail");
			}
		}

		public function join_ajax(){
			/*"typeid":id,
			"name":name,
			"gender":gender,
			"area":area,
			"department":department,
			"zhuanye":zhuanye,
			"email":email,
			"phone":phone,
			"intro":intro,
			"advantage":advantage,
			"bumen":bumen,
			"tiaoji":tiaoji*/
			$typeid = $this->input->post('typeid');
			$name = $this->input->post('name');
			$gender = $this->input->post('gender');
			$area = $this->input->post('area');
			$department = $this->input->post('department');
			$major = $this->input->post('zhuanye');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$intro = $this->input->post('intro');
			$advantage = $this->input->post('advantage');
			$bumen = $this->input->post('bumen');
			$tiaoji = $this->input->post('tiaoji');
			$grade = $this->input->post('grade');

			$data['typeid'] = $typeid;
			$data['name'] = $name;
			$data['gender'] = $gender;
			$data['area'] = $area;
			$data['department'] = $department;
			$data['phone'] = $phone;
			$data['email'] = $email;
			$data['major'] = $major;
			$data['grade'] = $grade;
			$data['introduce'] = $intro;
			$data['techang'] = $advantage;
			$data['yixiangbumen'] = $bumen;
			$data['tiaoji'] = $tiaoji;

			$this->load->model("apply_model","apply");
			$res = $this->apply->insertApply($data);
			if($res){
				echo json_encode("success");
			}else{
				echo json_encode("fail");
			}
		}
	}
 ?>