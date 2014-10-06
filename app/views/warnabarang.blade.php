<!DOCTYPE html>
<html lang = "en">
<head>
	@include('layouts.master')
</head>

<body>
	<div id="wrapper">
	@include('sidebar.side')	
	</div>			
		<!-- /.navbar-collapse -->
		</nav>
		<!-- page-wrapper-->
		<div id="page-wrapper">
			<div class="container-fluid">
				<!--Page Heading-->
				<!--<div class ="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Menu Warna Barang
						</h1> 
						<!-- <ol class="breadcrumb">
							<li class="active">
								<i class="fa fa-dashboard"></i> Dashboard
							</li>
						</ol> 
					</div>
				</div>-->
				
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header2">
							Tambah Warna
						</h3>
					</div>
				</div>
				
			<!-- 	<form method="post" action="mataajar/input">
						<input type="text" name="kodewarna">
						<input type="text" name="warnabarang">
						<input type="submit" name="submit" value="submit">
				</form>	 -->

				<div class="row">	
					<div class ="col-lg-12">
						<div class="page-header2">
							<!-- <div class="col-lg-2"> -->
								<form method="post" action="warnabarang/input">
									<!-- <div class="from-group">										 -->
										<input type="text" name="kode_warna_barang" placeholder="Masukkan kode warna ">
										 <input type="text" name="warna_barang" placeholder="Masukkan warna">
										<button type="submit" name="submit" value="submit" class="btn btn-primary"> Tambah warna </button>
									<!-- </div> -->

							
								</form>
							<!-- </div> -->
						</div>	
					</div>
				</div>
					
			
				
				<div class="border2">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header3">
								<center>Tabel Warna Barang</center>
							</h3>
						</div>
					</div>
					<div class="row">
					<div class ="col-lg-12" >
						<div class="table-responsive">
						<table border='1' class="table table-bordered table-hover">

					<!-- title table -->
					<thread>
									<tr>
										<th>No</th>
										<th>Kode Warna</th>
										<th>Warna Barang</th>
										<th>Jumlah Barang</th>
										<th>Aksi</th>
										
									</tr>
					</thread>
					
					<!-- isi table -->
								   <?php 
								        $i =1; 
								        foreach ($data as $dt){ 
								    ?>
						<tbody>		  
								    <tr>
								    	 <!-- hoalah iki jebule nama seng neng jero database.e tho -->
								        <td><?php echo $i; ?></td>
								        <td><?php echo $dt->kode_warna_barang; ?></td>
								        <td><?php echo $dt->warna_barang; ?></td>
								        <td><?php echo $dt->warna_barang; ?></td>
								    

										<td>	
												<button type="button" class="btn btn-warning" >Hapus</button>
												
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo $dt->kode_warna_barang; ?>">Edit</button>
												
											


												<!-- Modal -->
											<div class="modal fade" id="<?php echo $dt->kode_warna_barang; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="myModalLabel">Edit</h4>
														</div>
													
														<div class="modal-body">
															<div class ="row">
					
						
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">

																			<input class="form-control" value="<?php echo $dt->kode_warna_barang; ?> ">
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			<input class="form-control" value="<?php echo $dt->warna_barang; ?> ">
																		</div>
																	</form>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" href="/" class="btn btn-default" data-dismiss="modal">No</button>
															<button type="button" href="warnabarang/edit" class="btn btn-primary">Simpan</button>
														</div>
													</div>
												</div>
											</div>
											</div>
										<!-- EDIT -->
												
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#d<?php echo $dt->kode_warna_barang;?>" data-placement="left" title="Hapus Dari Database">X</button>
											
											<!-- Modal -->
											<div class="modal fade" id="d<?php echo $dt->kode_warna_barang;?>" tabindex="-1" " role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																<h4 class="modal-title" id="myModalLabel">Warning</h4>
														</div>
														<div class="modal-body">
															Apakah anda akan menghapus dari DATABASE??
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
															
															<a href="warnabarang/hapus/<?php echo $dt->kode_warna_barang; ?>">
															<button type="button" class="btn btn-primary">Yes</button>
														
															</a>
														</div>
													</div>
												</div>
											</div>
									</td>
				
								</tr>
						
								</tbody>
							  <?php 
								        $i++; 
								        }
								    ?>
							</table>

							</div>
						</div>
					</div>
				</div>
			</div>
				
		
				
	</div>
	
	<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
