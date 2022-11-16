<?php
namespace App\Controllers;
use App\Models\Databasemodel;
class Siswa extends BaseController{
	
	public function index(){
		$dbm = new Databasemodel();
		if(session()->get('login')){
			$data['data'] = $dbm->ambil("siswa");
			return view('siswa',$data);
		}else{
			return view('login');	
		}
	}

	public function tambahdata(){
		$db = db_connect();
		$data['kelas'] = $db->query("select kelas from siswa group by kelas asc")->getResultArray();
		return view('siswabaru',$data);
	}

	public function simpandata(){
		$dbm = new Databasemodel();
		$data = array(
			'idsiswa' => null,
			'nis' => $this->request->getPost('nis'),
			'nama' => $this->request->getPost('nama'),
			'jekel' => $this->request->getPost('jekel'),
			'kelas' => $this->request->getPost('kelas'),
			'alamat' => $this->request->getPost('alamat'),
			'poin' => 0
		);
		$dbm->simpan("siswa",$data);
		return redirect()->to(base_url('siswa'));
	}

	public function detaildata($x){
		$dbm = new Databasemodel();
		$db = db_connect();
		$data['kelas'] = $db->query("select kelas from siswa group by kelas asc")->getResultArray();
		$data['data'] = $dbm->pilih("siswa",['idsiswa' => $x]);
		return view('siswadetail',$data);
	}

	public function ubahdata(){
		$dbm = new Databasemodel();
		$id = $this->request->getPost('id');
		$data = array(
			'nis' => $this->request->getPost('nis'),
			'nama' => $this->request->getPost('nama'),
			'jekel' => $this->request->getPost('jekel'),
			'kelas' => $this->request->getPost('kelas'),
			'alamat' => $this->request->getPost('alamat')
		);
		$dbm->ubah("siswa",$data,['idsiswa' => $id]);
		return redirect()->to(base_url('siswa'));
	}
}
?>