<?php
namespace App\Controllers;
use App\Models\Databasemodel;
class Sanksi extends BaseController{
	
	public function index(){
		$dbm = new Databasemodel();
		if(session()->get('login')){
			$data['data'] = $dbm->ambil("sanksi");
			return view('sanksi',$data);
		}else{
			return view('login');	
		}
	}

	public function tambahdata(){
		return view('sanksibaru');
	}

	public function simpandata(){
		$dbm = new Databasemodel();
		$data = array(
			'idsanksi' => null,
			'sanksi' => $this->request->getPost('sanksi'),
			'poin' => $this->request->getPost('poin')
		);
		$dbm->simpan("sanksi",$data);
		return redirect()->to(base_url('sanksi'));
	}

	public function detaildata($x){
		$dbm = new Databasemodel();
		$data['data'] = $dbm->pilih("sanksi",['idsanksi' => $x]);
		return view('sanksidetail',$data);
	}

	public function ubahdata(){
		$dbm = new Databasemodel();
		$id = $this->request->getPost('id');
		$data = array(
			'sanksi' => $this->request->getPost('sanksi'),
			'poin' => $this->request->getPost('poin')
		);
		$dbm->ubah("sanksi",$data,['idsanksi' => $id]);
		return redirect()->to(base_url('sanksi'));
	}
}
?>