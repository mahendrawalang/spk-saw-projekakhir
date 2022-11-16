<?php
namespace App\Controllers;
use App\Models\Databasemodel;
class Indikator extends BaseController{
	
	public function index(){
		$db = db_connect();
		if(session()->get('login')){
			$data['data'] = $db->query("select indikator.*, kriteria.kriteria from indikator join kriteria on kriteria.idkriteria = indikator.idkriteria order by kriteria.kriteria asc, indikator.nilai asc")->getResultArray();			
			return view('indikator',$data);
		}else{
			return view('login');	
		}
	}

	public function tambahdata(){
		$dbm = new Databasemodel();
		$data['kriteria'] = $dbm->ambil("kriteria");
		return view('indikatorbaru',$data);
	}

	public function simpandata(){
		$dbm = new Databasemodel();
		$data = array(
			'idindikator' => null,
			'indikator' => $this->request->getPost('indikator'),
			'nilai' => $this->request->getPost('nilai'),
			'idkriteria' => $this->request->getPost('kriteria')
		);
		$dbm->simpan("indikator",$data);
		return redirect()->to(base_url('indikator'));
	}

	public function detaildata($x){
		$dbm = new Databasemodel();
		$data['data'] = $dbm->pilih("indikator",['idindikator' => $x]);
		$data['kriteria'] = $dbm->ambil("kriteria");
		return view('indikatordetail',$data);
	}

	public function ubahdata(){
		$dbm = new Databasemodel();
		$id = $this->request->getPost('id');
		$data = array(
			'indikator' => $this->request->getPost('indikator'),
			'nilai' => $this->request->getPost('nilai'),
			'idkriteria' => $this->request->getPost('kriteria')
		);
		$dbm->ubah("indikator",$data,['idindikator' => $id]);
		return redirect()->to(base_url('indikator'));
	}
}
?>