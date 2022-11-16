<?php
namespace App\Controllers;
use App\Models\Databasemodel;
class Proses extends BaseController{
	
	public function index(){
		$dbm = new Databasemodel();
		if(session()->get('login')){
			$data['siswa'] = $dbm->ambil("siswa");
			$data['kriteria'] = $dbm->ambil("kriteria");
			return view('proses',$data);
		}else{
			return view('login');	
		}
	}

	public function analisadata(){
		$dbm = new Databasemodel();
		$kriteria = $dbm->ambil("kriteria");
		foreach ($kriteria as $k) {
		}
	}
}
?>