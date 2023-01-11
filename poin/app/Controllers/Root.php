<?php
namespace App\Controllers;
use CodeIgniter\Config\Services;
use App\Models\Databasemodel;
class Root extends BaseController{

	public function index(){
		if(session()->get('login')){
			return view('landing');
		}else{
			return view('login');
		}
	}

	public function proseslogin(){
		$db = db_connect();
		$username = $this->request->getPost('username');
		$password = md5($this->request->getPost('password'));
		$cek = $db->query("select * from pengguna where username = '".$username."' and password = '".$password."'")->getResultArray();
		if(count($cek) > 0){
			session()->set("login","administrator");
			return redirect()->to(base_url(''));
		}else{
			session()->setFlashdata('gagal','Kombinasi log in salah!');
			return view('login');
		}
	}

	public function proseslogout(){
		session_unset();
		session()->remove('login');
		return redirect()->to(base_url(''));
	}

	public function tampilprofil(){
		$db = db_connect();
		$data['data'] = $db->query("select * from pengguna")->getRowArray();
		return view('profil',$data);
	}

	public function ubahprofil(){
		$db = db_connect();
		$username = $this->request->getPost('username');
		$password = md5($this->request->getPost('password'));
		if($this->request->getPost('password') == ''){
			$db->query("update pengguna set username = '".$username."'");
		}else{
			$db->query("update pengguna set username = '".$username."',password = '".$password."'");
		}
		return redirect()->to(base_url('profil'));
	}
}
?>