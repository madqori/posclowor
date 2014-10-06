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
				<div class ="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Menu Jenis Barang
						</h1> 						
					</div>
				</div>
				<!--/end page heading-->
				
				<div class ="row">
					<div class="col-lg-12">
						<h3 class="page-header2">
							Tambah Jenis
						</h3>
						<form method="post" role="role" action="jenisbarang/input">
						
						<div class="col-lg-2">
							
								<div class="form-group">
									<input class="form-control" name="kode_jenis_barang" placeholder="Kode Jenis. . .">
								</div>
							
						</div>
						<div class="col-lg-3">
							
								<div class="form-group">
									<input class="form-control" name="jenis_barang" placeholder="Jenis Barang. . .">
								</div>
							
						</div>
						<div class="col-lg-2">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah Jenis</button>
						</form>
						</div>
					</div>
					
				</div>
				
			 	
				<div class="border2">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header3">
								Tabel Jenis Barang
							</h3>
						</div>
					</div>
					<div class="row">
					<div class ="col-lg-12" >
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Jenis Barang</th>
										<th>Jenis  Barang</th>
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
										<td><?php echo $dt->kode_jenis_barang; ?></td>
										<td><?php echo $dt->jenis_barang; ?></td>
										
										<td>	
												<button type="button" class="btn btn-warning" >Hapus</button>
												
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo $dt->kode_jenis_barang; ?>">Edit</button>
												<!-- Modal -->
											<div class="modal fade" id="<?php echo $dt->kode_jenis_barang; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

																			<input class="form-control" value="<?php echo $dt->kode_jenis_barang; ?> ">
																		</div>
																	</form>
																</div>
																<div class="col-lg-3">
																	<form role="role">
																		<div class="form-group">
																			<input class="form-control" value="<?php echo $dt->jenis_barang; ?> ">
																		</div>
																	</form>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" href="/" class="btn btn-default" data-dismiss="modal">No</button>
															<button type="button" href="jenisbarang/edit" class="btn btn-primary">Simpan</button>
														</div>
													</div>
												</div>
											</div>
											</div>
										<!-- EDIT -->
												
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#d<?php echo $dt->kode_jenis_barang;?>" data-placement="left" title="Hapus Dari Database">X</button>
											
											<!-- Modal -->
											<div class="modal fade" id="d<?php echo $dt->kode_jenis_barang;?>" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
															
															<a href="jenisbarang/hapus/<?php echo $dt->kode_jenis_barang; ?>">
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