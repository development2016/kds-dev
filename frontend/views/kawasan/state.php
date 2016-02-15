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
								        <tr><td colspan="2"><span class="caption-subject font-blue-madison bold uppercase">Data Pokok</span></td></tr>
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

                    <div class="col-md-5">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                            	<span class="caption-subject font-blue-madison bold uppercase">Padanan Profil Mengikut Minat</span>
                            	<br><br>
							 </div>
						 </div>
					 </div>





                </div>
                <div class="row widget-row">

					<div class="col-md-5">
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

                <div class="row widget-row">

				 	<div class="col-md-12">
                        <!-- BEGIN WIDGET THUMB -->
                        <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                            
                            <div class="widget-thumb-wrap">
                            	<span class="caption-subject font-blue-madison bold uppercase">Demografi</span>
                            	<br><br>
							 </div>
						 </div>
					 </div>
				 </div>



                <!-- END PAGE BASE CONTENT -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->