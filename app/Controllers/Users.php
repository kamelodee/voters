<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PollingStationModel;
use App\Models\MemberTypeModel;
use DateTime;
class Users extends BaseController
{

	public function list()
    {    
        $model = new UserModel();
 
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        
        
        echo view('templates/header', $data);
		echo view('users/index');
		echo view('templates/footer');
    }   

	public function index()
	{
		$data = [];
		helper(['form']);


		echo view('templates/header', $data);
		echo view('users/login');
		echo view('templates/footer');
	}
//login user

	public function loginuser(){
		$rules = [
			'email' => 'required|min_length[6]|max_length[50]|valid_email',
			'password' => 'required|min_length[8]|max_length[255]|validateUser[email]',
		];

		$errors = [
			'password' => [
				'validateUser' => 'Email or Password don\'t match'
			]
		];

		if ( $this->validate($rules, $errors)) {
			$data['validation'] = $this->validator;
		}else{
			$model = new UserModel();

			$user = $model->where('email', $this->request->getVar('email'))
										->first();

			$this->setUserSession($user);
			//$session->setFlashdata('success', 'Successful Registration');
			return redirect()->to( base_url('/dashboard'));

		}
	}
//user session
	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'fullname' => $user['fullname'],
			'birthdate' => $user['birthdate'],
			'phone_number' => $user['phone_number'],
			'polling_station' => $user['polling_station'],
			'location' => $user['location'],
			'membertype' => $user['membertype'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register(){
		$data = [];
		helper(['form']);
		$polling_station = new PollingStationModel();
		$membertype = new MemberTypeModel();
 
        $pollingstations=$pollingdata['pollingstations'] = $polling_station->orderBy('id', 'DESC')->findAll();
		$membertypes =$membertypedata['membertypes'] = $membertype->orderBy('id', 'DESC')->findAll();
		
		$alldata['alldata'] = array($pollingstations,$membertypes);
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'fullname' => 'required|min_length[3]|max_length[20]',
				'birthdate' => 'required|min_length[3]|max_length[20]',
				'phone_number' => 'required|min_length[6]|max_length[50]|is_unique[users.phone_number]',
				'polling_station' => 'required|min_length[3]|max_length[20]',
				'location' => 'required|min_length[3]|max_length[20]',
				'membertype' => 'required|min_length[3]|max_length[20]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();


				$newData = [
					'fullname' => $this->request->getVar('fullname'),
					'birthdate' =>$this->request->getVar('birthdate'),
					'phone_number' => $this->request->getVar('phone_number'),
					'polling_station' => $this->request->getVar('polling_station'),
					'location' => $this->request->getVar('location'),
					'membertype' => $this->request->getVar('membertype'),
					'password' => $this->request->getVar('password'),
					
				];
			
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to( base_url('/'));

			}
		}

 
		echo view('templates/header',$alldata);
		echo view('users/register', $data);
		
	}

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'fullname' => 'required|min_length[3]|max_length[20]',
				
				];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'fullname' => $this->request->getPost('fullname'),
					
					];
					if($this->request->getPost('password') != ''){
						$newData['password'] = $this->request->getPost('password');
					}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to( base_url('/profile'));
			}
		}

		$data['user'] = $model->where('id', session()->get('id'))->first();
		echo view('templates/header', $data);
		echo view('users/profile');
		echo view('templates/footer');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to( base_url('/'));
	}

	//--------------------------------------------------------------------

}
