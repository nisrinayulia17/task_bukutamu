<?php
class database{
	private $host='localhost';
	private $user = 'root';
	private $pass = '';
	private $db = 'buku_tamu';
	private $conn;
	
	function __construct(){
		if(!isset($this->conn))
		{
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
		}
		
		if (!$this->conn)
		{
			echo 'koneksi gagal';
		}
		//else
		//{
			//echo 'Koneksi Berhasil';
		//}
	}
	
	function tampil_data(){
		if(isset($_GET['dari'])&& isset($_GET['ke'])){
			$tgl1 = $_GET['dari'];
			$tgl2 = $_GET['ke'];
			$data = mysqli_query($this->conn, "select*from tamu where tanggal between '$tgl1' AND '$tgl2'");
			
		}
		else{
			$data = mysqli_query($this->conn, "select*from tamu");
		}
		while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
		}
		return $hasil;
	}

	function input ($tanggal,$nama,$email,$instansi,$bidang,$tujuan,$keperluan){
		mysqli_query($this->conn,"insert into tamu values('', '$tanggal','$nama','$email','$instansi','$bidang','$tujuan','$keperluan')");
	}
	
	

	


		
	

}
$db = new database();


?>

	