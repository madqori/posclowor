<!DOCTYPE html>
<html lang = "en">

<head>
	@include('layouts.master')
</head>

<body>
	<div id ="wrapper">
		@include('sidebar.side')			
	</div>
			
			
		<!-- /.navbar-collapse -->
		</nav>
		
		<!-- page-wrapper-->
		<div id="page-wrapper">
		
			<div class="container-fluid">
				
				<!--Page Heading-->
				<div class ="row">
					<div class="col-lg-12">
						<h1 class="page-header">
								Menu Supplier Barang
						</h1> 
							<!-- <ol class="breadcrumb">
								<li class="active">
									<i class="fa fa-dashboard"></i> Dashboard
								</li>
							</ol> -->
					</div>
				</div>
				<!--/.row-->
				
				<div class="row">
					<div class="col-lg-12">	
						<div class="page-header2">
							<!-- Button trigger modal -->
								<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
									Tambah Supplier +
								</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Tambah Supplier</h4>
										</div>
										<div class="modal-body">
											<div class= "row">
												<div class = "col-lg-3">
													<label>Nama Perusahaan:</label>
												</div>
												<div class="col-lg-6">
													<form role="form" method="post" action="supplier/input">
														<div class ="form-group">
															<input name="nama_perusahaan" class="form-control">
														</div>
													 
												</div>	
											</div>
											<div class = "row">
												<div class="col-lg-3">
													<label>Nama Personel :</label>
												</div>
												<div class="col-lg-6">
													<!--<form role="form">
														<div class ="form-group">
															<select class="form-control">
																<option>Baju</option>
																<option>Kaos</option>
																<option>Jaket</option>
																<option>Celana</option>
															</select>
														</div>
													</form>-->
													 
														<div class ="form-group">
															<input name="nama_personel" class="form-control">
														</div>
													 
												</div>
												<!--<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Jenis</button>
												</div> -->
											</div>
											<div class = "row">
												<div class="col-lg-3">
													<label>Email :</label>
												</div>
												<div class="col-lg-6">
													<!--<form role="form">
														<div class ="form-group">
															<select class="form-control">
																<option>Merah</option>
																<option>Kuning</option>
																<option>Jingga</option>
																<option>Hijau</option>
															</select>
														</div>
													</form>-->
													 
														<div class ="form-group">
															<input name="email" class="form-control">
														</div>
													 
												</div>
												<!--<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Warna</button>
												</div>-->
											</div>
											<div class = "row">
												<div class="col-lg-3">
													<label>Telepon :</label>
												</div>
												<div class="col-lg-6">
													<!--<form role="form">
														<div class ="form-group">
															<select class="form-control">
																<option>S</option>
																<option>M</option>
																<option>L</option>
																<option>XL</option>
															</select>
														</div>
													</form>-->
													 
														<div class ="form-group">
															<input name="telepon" class="form-control">
														</div>
													 
												</div>
												
												
											</div>
											<div class = "row">
												<div class="col-lg-3">
													<label>Alamat </label>
												</div>
												<div class="col-lg-6">
													 
														<div class ="form-group">
															<input name="alamat" class="form-control">
														</div>
													 
												</div>
												
												<!--<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Supplier</button>
												</div>-->
											</div>
											 
											<div class = "row">
												<div class="col-lg-3">
													<label>Catatan :</label>
												</div>
												<div class="col-lg-6">
													 
														<div class ="form-group">
															<textarea name="catatan" class="form-control" rows="3"></textarea>
														</div>
													 
												</div>												
											</div>
						 				</div>
										<div class="modal-footer">
											
											<center>
											<button type="submit" name="submit" class="btn btn-primary">Tambah Supplier</button></center>
										</form>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				

			
				
				<!-- /border2 -->
			<div class="border2">	
				<div class="row">
					
						<div class="col-lg-12">
							<h3 class="page-header3">
								Supplier Barang
							</h3>
						</div>
					
					<div class ="col-lg-12" >
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>NO</th>
										<th>Perusahaan</th>
										<th>Nama Personel</th>
										<th>Email</th>
										<th>Telepon</th>
										<th>Alamat Kota</th>
										<th>Catatan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								
									<?php
										$i=1;
										foreach ($data as $dt) {
											?>
								<tbody>
									<tr>
										<td><?php echo $i; ?></td>
										
										<td><?php echo $dt->nama_perusahaan; ?></td>
										<td><?php echo $dt->nama_personel; ?></td>
										<td><?php echo $dt->email; ?></td>
										<td><?php echo $dt->telepon; ?></td>
										<td><?php echo $dt->alamat; ?></td>
										<td><?php echo $dt->catatan; ?></td>
										
										<td>	

												<button type="button" class="btn btn-warning" >Hapus</button>
												
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo $dt->id_supplier; ?>">Edit</button>
												<!-- Modal -->
											<div class="modal fade" id="<?php echo $dt->id_supplier; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

																			Nama Perusahaan: <input class="form-control" value="<?php echo $dt->nama_perusahaan; ?> "> <br/>
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			Nama Personel :<input class="form-control" value="<?php echo $dt->nama_personel; ?> ">
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			Email :<input class="form-control" value="<?php echo $dt->email; ?> ">
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			Telepon : <input class="form-control" value="<?php echo $dt->telepon; ?> ">
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			Alamat : <input class="form-control" value="<?php echo $dt->alamat; ?> ">
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			Catatan :<input class="form-control" value="<?php echo $dt->catatan; ?> ">
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
												
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#d<?php echo $dt->id_supplier;?>" data-placement="left" title="Hapus Dari Database">X</button>
											
											<!-- Modal -->
											<div class="modal fade" id="d<?php echo $dt->id_supplier;?>" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
															
															<a href="supplier/hapus/<?php echo $dt->id_supplier; ?>">
															<button type="button" class="btn btn-primary">Yes</button>
														
															</a>
														</div>
													</div>
												</div>
											</div>
									</td>
				
								</tr>
						
								</tbody>
								<?php $i++;
									}
									?>
							</table>
						</div>
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