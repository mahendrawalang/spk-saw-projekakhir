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
		$idsiswa = $this->request->getPost('siswa');
		$total = 0;
		$jenis = "";
		$dbm = new Databasemodel();
		$db = db_connect();
		$kriteria = $dbm->ambil("kriteria");
		foreach ($kriteria as $k) {
			$n = 0;
			$id = $k['idkriteria'];
			$x = "k".$k['idkriteria'];
			$min = $db->query("select min(nilai) as nilai from indikator where idkriteria = '".$id."'")->getRowArray()['nilai'];
			$max = $db->query("select max(nilai) as nilai from indikator where idkriteria = '".$id."'")->getRowArray()['nilai'];
			$nilai = $this->request->getPost($x);
			$idk = $dbm->pilih('indikator',['nilai' => $nilai, 'idkriteria' => $id]);
			if($k['kategori'] == 'Benefit'){
				$n = ($nilai/$max) * $k['bobot'];
			}else{
				$n = ($min/$nilai) * $k['bobot'];
			}
			$total += $n;
			$data = array(
				'idnilai' => null,
				'indikator' => $idk['indikator'],
				'nilai' => $nilai,
				'idkriteria' => $k['idkriteria'],
				'idsiswa' => $idsiswa
			);
			$dbm->simpan('nilai',$data);
		}
		$cek = true;
		$sanksi = $db->query("select * from sanksi order by batas asc")->getResultArray();
		foreach ($sanksi as $s) {
			if($cek){
				if((int)$total <= $s['batas']){
					$cek = false;
					$sanksi = $s['sanksi'];
				}
			}
		}
		$data = array(
			'idhasil' => null,
			'waktu' => date('Y-m-d H:i:s'),
			'hasil' => $sanksi,
			'na' => $total,
			'idsiswa' => $idsiswa
		);
		$dbm->simpan('hasil',$data);
		$poin = $db->query("select poin from siswa where idsiswa = '".$idsiswa."'")->getRowArray()['poin'];
		$dbm->ubah('siswa',['poin' => ($poin + (int)$total)],['idsiswa' => $idsiswa]);
		return redirect()->to(base_url('proses'));
	}

	public function tampilriwayat(){
		$dbm = new Databasemodel();
		$data['data'] = $dbm->ambil("siswa");
		return view('riwayat',$data);
	}

	public function detailriwayat($x){
		$dbm = new Databasemodel();
		$db = db_connect();
		$data['siswa'] = $dbm->pilih("siswa",['idsiswa' => $x]);
		$data['data'] = $db->query("select * from hasil where idsiswa = '".$x."' order by waktu desc")->getResultArray();
		return view('riwayatdetail',$data);
	}
}
?>