<?php


use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Ringkasan Bagi :';


?>
        <!-- BEGIN CONTAINER -->
        <div class="page-container page-content-inner page-container-bg-solid">
            <!-- BEGIN BREADCRUMBS -->
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <h2 class="breadcrumbs-title"><?= Html::encode($this->title) ?></h2>
                    <ol class="breadcrumbs-list">
                        <li>
                            <a class="breadcrumbs-item-link" href="#">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            <!-- BEGIN CONTENT -->
            <div class="container-fluid container-lf-space">

                <div class="row widget-row">
                    <div class="col-md-7">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white  margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">

								<table class="table table-light">
								    <tbody>
								    	<tr>
								            <td>Jumlah Bahagian</td>
								            <td><b><?= $count_bahagian ?></b></td>
								        </tr>
								        <tr>
								            <td>Jumlah Daerah</td>
								            <td><b><?= $count_district ?></b></td>
								        </tr>
								        <tr>
								            <td>Jumlah Mukim</td>
								            <td><b><?= $count_mukim ?></b></td>
								        </tr>
								        <tr>
								            <td>Jumlah Sub Base</td>
								            <td><b><?= $count_sub_base ?></b></td>
								        </tr>
								        <tr>
								            <td>Jumlah Cluster</td>
								            <td><b><?= $count_cluster ?></b></td>
								        </tr>
								        <tr>
								            <td>Jumlah Kampung</td>
								            <td><b><?= $count_kampung ?></b></td>
								        </tr>
								    </tbody>
								</table>

							 </div>
						 </div>
					 </div>

                    <div class="col-md-5">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                            	<span class="caption-subject font-blue-madison bold uppercase">Data POKOK</span>
                            	<br><br>
	                            	<table class="table table-light">
									    <tbody>
	                            			<tr>
									            <td>Jumlah Profil Komuniti</td>
									            <td><b><b></td>
									        </tr>
											<tr>
									            <td>Jumlah Profil Komuniti (Sah)</td>
									            <td><b><?= $count_profil_sah->total_sah_by_state ?></b></td>
									        </tr>
									        <tr>
									            <td>Jumlah Sukarelawan</td>
									            <td><b><?= $count_sukarelawan ?></b></td>
									        </tr>
									    </tbody>
									</table>
							 </div>
						 </div>
					 </div>





                </div>
                <div class="row widget-row">
                	<div class="col-md-5">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                            	<span class="caption-subject font-blue-madison bold uppercase">Padanan Profil Mengikut Minat</span>
                            	<br><br>
							 </div>
						 </div>
					 </div>

					<div class="col-md-7">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                            	<span class="caption-subject font-blue-madison bold uppercase">Isu Konduit</span>
                            	<br><br>

								<table class="table table-light">
								    <tbody>
								    	<tr>
								            <td>Akademik & Kerjaya (AK/KJ)</td>
								            <td><b><?= $count_isu->akademik_kerjaya ?></b></td>
								        </tr>
								        <tr>
								            <td>Kesihatan (SHT)</td>
								            <td><b><?= $count_isu->kesihatan ?></b></td>
								        </tr>
								        <tr>
								            <td>Ekonomi & Keusahawanan (EK/US)</td>
								            <td><b><?= $count_isu->ekonomi_usahawanan ?></b></td>
								        </tr>
								        <tr>
								            <td>Kebajikan (KBJ)</td>
								            <td><b><?= $count_isu->kebajikan ?></b></td>
								        </tr>
								        <tr>
								            <td>Remaja belia Warga Emas (RBWE)</td>
								            <td><b><?= $count_isu->remaja_belia_warga ?></b></td>
								        </tr>
								        <tr>
								            <td>Lain - lain (LL)</td>
								            <td><b><?= $count_isu->lain_lain ?></b></td>
								        </tr>
								    </tbody>
								</table>
								
							 </div>
						 </div>
					 </div>

                </div>


    <?php

    $surau = $masjid = $kuil = $gereja = $tokong = $balairaya = $dewan_Serbaguna = $dewan_Orang = $pusat_Jalur = $medan_Info = $pusat_ICT = $sekolah_Rendah =
    $sekolah_Menengah = $sekolah_Agama = $sekolah_Jenis = $tadika_Kemas = $tadika_Swasta = $kedai_Runcit = $kedai_Makan = $gerai_Makanan = $gerai_Buah =
    $bengkel_Motor = $bengkel_Kereta = $bengkel_Industri = $perpustakaan_Desa = $perpustakaan_Bergerak = $klinik_Desa = $klinik_Kesihatan = $hospital = 
    $taman_Permainan = $gelanggang = $padang_Bola = $homestay = 0;

   foreach ($count_demographic as $key => $value_d) {

        if ($value_d['kemudahan_id'] == 1) {
            $surau = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 2) {
            $masjid = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 3) {
            $kuil = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 4) {
            $gereja = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 5) {
            $tokong = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 6) {
            $balairaya = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 7) {
            $dewan_Serbaguna = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 8) {
            $dewan_Orang = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 9) {
            $pusat_Jalur  = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 10) {
            $medan_Info = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 11) {
            $pusat_ICT = $value_d['jumlah'];
        }
         if ($value_d['kemudahan_id'] == 12) {
            $sekolah_Rendah = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 13) {
            $sekolah_Menengah = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 14) {
            $sekolah_Agama = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 15) {
            $sekolah_Jenis = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 16) {
            $tadika_Kemas = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 17) {
            $tadika_Swasta = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 18) {
            $kedai_Runcit = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 19) {
            $kedai_Makan= $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 20) {
            $gerai_Makanan = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 21) {
            $gerai_Buah = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 22) {
            $bengkel_Motor = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 23) {
            $bengkel_Kereta = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 24) {
            $bengkel_Industri = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 25) {
            $perpustakaan_Desa = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 26) {
            $perpustakaan_Bergerak = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 27) {
            $klinik_Desa = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 28) {
            $klinik_Kesihatan = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 29) {
            $hospital = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 30) {
            $taman_Permainan = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 31) {
            $gelanggang = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 32) {
            $padang_Bola = $value_d['jumlah'];
        }
        if ($value_d['kemudahan_id'] == 33) {
            $homestay= $value_d['jumlah'];
        }

    }
    ?>



                <div class="row widget-row">

				 	<div class="col-md-12">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                            	<span class="caption-subject font-blue-madison bold uppercase">Demografi</span>
                            	<br><br>


				                <div class="row widget-row">

								 	<div class="col-md-6">
								 		<span class="caption-subject font-blue-chambray uppercase">Asas Ekonomi</span>
										<table class="table table-light">
										    <tbody>
										    	<tr>
										            <td>Kedai Runcit</td>
										            <td><b><?= $kedai_Runcit ?></b></td>
										        </tr>
										    	<tr>
										            <td>Kedai Makan</td>
										            <td><b><?= $kedai_Makan ?></b></td>
										        </tr>
										    	<tr>
										            <td>Gerai Makanan</td>
										            <td><b><?= $gerai_Makanan ?></b></td>
										        </tr>
										    	<tr>
										            <td>Gerai Buah</td>
										            <td><b><?= $gerai_Buah ?></b></td>
										        </tr>
										    	<tr>
										            <td>Bengkel Motor</td>
										            <td><b><?= $bengkel_Motor ?></b></td>
										        </tr>
										     	<tr>
										            <td>Bengkel Kereta</td>
										            <td><b><?= $bengkel_Kereta ?></b></td>
										        </tr>
										        <tr>
										            <td>Industri</td>
										            <td><b><?= $bengkel_Industri ?></b></td>
										        </tr>
										    </tbody>
										</table>
						 			</div>

		 							<div class="col-md-6">
		 								<span class="caption-subject font-blue-chambray uppercase">Kemudahan Masyarakat</span>
										<table class="table table-light">
										    <tbody>
										    	<tr>
										            <td>Balai Raya</td>
										            <td><b><?= $balairaya ?></b></td>
										        </tr>
										    	<tr>
										            <td>Dewan Orang Ramai</td>
										            <td><b><?= $dewan_Orang ?></b></td>
										        </tr>
										    	<tr>
										            <td>Dewan Serbaguna</td>
										            <td><b><?= $dewan_Serbaguna ?></b></td>
										        </tr>
										    	<tr>
										            <td>Pusat ICT</td>
										            <td><b><?= $pusat_ICT ?></b></td>
										        </tr>
										    	<tr>
										            <td>Pusat Jalur Lebar</td>
										            <td><b><?= $pusat_Jalur ?></b></td>
										        </tr>
										     	<tr>
										            <td>Medan Info Desa</td>
										            <td><b><?= $medan_Info ?></b></td>
										        </tr>
										        <tr>
										            <td>Klinik Desa</td>
										            <td><b><?= $klinik_Desa ?></b></td>
										        </tr>
										       	</tr>
										        <tr>
										            <td>Klinik Kesihatan</td>
										            <td><b><?= $klinik_Kesihatan ?></b></td>
										        </tr>
										        </tr>
										        <tr>
										            <td>Hospital</td>
										            <td><b><?= $hospital ?></b></td>
										        </tr>
										    </tbody>
										</table>
						 			</div>
								</div>

				                <div class="row widget-row">

								 	<div class="col-md-6">
								 		<span class="caption-subject font-blue-chambray uppercase">Kemudahan Pendidikan</span>
										<table class="table table-light">
										    <tbody>
										        <tr>
										            <td>Tadika Kemas</td>
										            <td><b><?= $tadika_Kemas ?></b></td>
										        </tr>
										        <tr>
										            <td>Tadika Swasta</td>
										            <td><b><?= $tadika_Swasta ?></b></td>
										        </tr>
										        <tr>
										            <td>Sekolah Rendah</td>
										            <td><b><?= $sekolah_Rendah ?></b></td>
										        </tr>
										        <tr>
										            <td>Sekolah Menengah</td>
										            <td><b><?= $sekolah_Menengah ?></b></td>
										        </tr>
										        <tr>
										            <td>Sekolah Agama</td>
										            <td><b><?= $sekolah_Agama ?></b></td>
										        </tr>
										        <tr>
										            <td>Sekolah Jenis Kebangsaan</td>
										            <td><b><?= $sekolah_Jenis ?></b></td>
										        </tr>
										        <tr>
										            <td>Perpustakaan Desa</td>
										            <td><b><?= $perpustakaan_Desa ?></b></td>
										        </tr>
										        <tr>
										            <td>Perpustakaan Bergerak</td>
										            <td><b><?= $perpustakaan_Bergerak ?></b></td>
										        </tr>

										    </tbody>
										</table>
						 			</div>

		 							<div class="col-md-6">
		 								<span class="caption-subject font-blue-chambray uppercase">Kemudahan Rumah Ibadah</span>
										<table class="table table-light">
										    <tbody>
										        <tr>
										            <td>Surau</td>
										            <td><b><?= $surau ?></b></td>
										        </tr>
										        <tr>
										            <td>Masjid</td>
										            <td><b><?= $masjid ?></b></td>
										        </tr>
										        <tr>
										            <td>Kuil</td>
										            <td><b><?= $kuil ?></b></td>
										        </tr>
										        <tr>
										            <td>Gereja</td>
										            <td><b><?= $gereja ?></b></td>
										        </tr>
										        <tr>
										            <td>Tokong</td>
										            <td><b><?= $tokong ?></b></td>
										        </tr>
										    </tbody>
										</table>
						 			</div>
								</div>

				                <div class="row widget-row">

								 	<div class="col-md-6">
								 		<span class="caption-subject font-blue-chambray uppercase">Kemudahan Rekreasi</span>
										<table class="table table-light">
										    <tbody>
										        <tr>
										            <td>Padang Bola</td>
										            <td><b><?= $padang_Bola ?></b></td>
										        </tr>
										        <tr>
										            <td>Homestay</td>
										            <td><b><?= $homestay ?></b></td>
										        </tr>
										        <tr>
										            <td>Taman Permainan Kanak - Kanak</td>
										            <td><b><?= $taman_Permainan ?></b></td>
										        </tr>
										        <tr>
										            <td>Gelanggang</td>
										            <td><b><?= $gelanggang ?></b></td>
										        </tr>

										    </tbody>
										</table>
						 			</div>

								</div>

							 </div>
						 </div>
					 </div>
				 </div>



                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->