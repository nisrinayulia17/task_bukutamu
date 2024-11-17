<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Universitas Tunas Pembangunan</title>

        <!-- CSS FILES -->        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
		
    </head>
    
    <body id="section_1">

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-geo-alt me-2"></i>
                            Jl. Balekambang Lor No.1 Manahan, Surakarta
                        </p>

                        <p class="d-flex mb-0">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:info@utp.ac.id">
                                info@utp.ac.id
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                        <ul class="social-icon">
                            
							<li class="social-icon-item">
                                <a href="https://id-id.facebook.com/UTPska/" class="social-icon-link bi-facebook"></a>
                            </li>
							
							<li class="social-icon-item">
                                <a href="https://www.instagram.com/utp_surakarta/?hl=id" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.youtube.com/c/UTPSurakarta" class="social-icon-link bi-youtube"></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo1.png" class="logo img-fluid" alt="u">
                    <span>
                        Universitas Tunas Pembangunan
                        <small>Surakarta<small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"
                        </li>

                        <li class="nav-item">
                        </li>

                        <li class="nav-item">
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Beranda</a>
                        </li>
						<li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="buku_tamu.php">Buku Tamu</a>
                        </li>

                        <li class="nav-item">
                            
                        </li>

                        
                    </ul>
                </div>
            </div>
        </nav>

        <main>
		
            <section class="contact-section section-padding" id="section_6">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 mx-auto">
                            <form class="custom-form contact-form" action="proses.php?aksi=tambah" method="post" role="form">
                                <h3><center>Buku Tamu</center></h3>

								<input type="hidden" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal" value="<?php echo date('Y-m-d h:i:s');?>" required>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" required>
								<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>
								
								<div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Asal Instansi" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="bidang" id="bidang" class="form-control" placeholder="Jabatan / Bidang " required>
                                    </div>
                                </div>
								<select name="tujuan" id="tujuan"  class="form-control">
								  <option value="">-- Tujuan --</option>
								  <option value="Bagian Keuangan">Bagian Keuangan</option>
								  <option value="Bagian Akademik">Bagian Akademik</option>
								  <option value="Bagian Kepegawaian">Bagian Kepegawaian</option>
								  <option value="Bagian Administrasi">Bagian Administrasi</option>
								</select>
								
								
                                <textarea name="keperluan" rows="5" class="form-control" id="message" placeholder="Keperluan"></textarea>
								

                                <button type="submit" class="form-control" value="Simpan">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
			 <!-- Tabel -->

			<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 style="margin-top: 10px;margin-bottom: 10px;"><center>Daftar Tamu</center></h4>
                        </div>
                        <div class="card-body">
							<form method="get">
								<div class="row g-3 align-items-center" style="margin-top: 10px; margin-left: 650px; margin-bottom:10px">
									<div class="col-auto">
										<label class="col-form-label" style="font-size:17px" >Periode</label>
									</div>
									<div class="col-auto">
										<input type="date" class="form-control" name="dari" required>
									</div>
									<div class="col-auto">
										-
									</div>
									<div class="col-auto">
										<input type="date" class="form-control" name="ke" required>
									</div>
									<div class="col-auto">
										<button class="btn btn-primary" type="submit">Cari</button>
									</div>
								</div>
							</form>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									   
											<tr>
												<th>No</th>
												<th>Tanggal</th>
												<th>Nama </th>
												<th>Email</th>
												<th>Asal</th>
												<th>Jabatan / Bidang</th>
												<th>Tujuan</th>
												<th>Keperluan</th>
											</tr>
<?php
error_reporting(0);
include 'database.php';
$db = new database();

?>

											<?php
											error_reporting(0);
											$no = 1;
											foreach($db->tampil_data() as $x){
											?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo $x['tanggal']; ?></td>
													<td><?php echo $x['nama']; ?></td>
													<td><?php echo $x['email']; ?></td>
													<td><?php echo $x['instansi']; ?></td>
													<td><?php echo $x['bidang']; ?></td>
													<td><?php echo $x['tujuan']; ?></td>
													<td><?php echo $x['keperluan']; ?></td>
												</tr>
											<?php  } ?>
									</table>
											
									 
										
								   
								</div>
							</div>
						</div>

					
			</main>

            <<div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2022 <a href="#"></a>
                        	<a href="#" target="_blank"></a></p>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>