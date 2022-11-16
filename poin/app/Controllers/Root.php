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
		$dbm = new Databasemodel();
		$username = $this->request->getPost('username');
		$password = md5($this->request->getPost('password'));
		$cek = $dbm->pilih("pengguna",['username' => $username, 'password' => $password]);
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
}
?>