<?php
namespace App\Controllers;
use App\Models\Databasemodel;
class Kriteria extends BaseController{
	
	public function index(){
		$dbm = new Databasemodel();
		if(session()->get('login')){
			$data['data'] = $dbm->ambil("kriteria");
			return view('kriteria',$data);
		}else{
			return view('login');	
		}
	}

	public function tambahdata(){
		return view('kriteriabaru');
	}

	public function simpandata(){
		$dbm = new Databasemodel();
		$data = array(
			'idkriteria' => null,
			'kriteria' => $this->request->getPost('kriteria'),
			'kategori' => $this->request->getPost('kategori'),
			'bobot' => $this->request->getPost('bobot')
		);
		$dbm->simpan("kriteria",$data);
		return redirect()->to(base_url('kriteria'));
	}

	public function detaildata($x){
		$dbm = new Databasemodel();
		$data['data'] = $dbm->pilih("kriteria",['idkriteria' => $x]);
		return view('kriteriadetail',$data);
	}

	public function ubahdata(){
		$dbm = new Databasemodel();
		$id = $this->request->getPost('id');
		$data = array(
			'kriteria' => $this->request->getPost('kriteria'),
			'kategori' => $this->request->getPost('kategori'),
			'bobot' => $this->request->getPost('bobot')
		);
		$dbm->ubah("kriteria",$data,['idkriteria' => $id]);
		return redirect()->to(base_url('kriteria'));
	}
}
?>