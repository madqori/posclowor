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
								Stok Barang
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
									Tambah Barang +
								</button>

							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="myModalLabel">Tambah Barang</h4>
										</div>
										<div class="modal-body">
											<div class= "row">
												<div class = "col-lg-2">
													<label>Nama :</label>
												</div>
												<div class="col-lg-6">
													<form role="form" method="post" action="barang/input">
														<div class ="form-group">
															<input name="nama_barang" class="form-control" placeholder="Nama Barang">
														</div>
												</div>	
											</div>
											<div class = "row">
												<div class="col-lg-2">
													<label>Jenis :</label>
												</div>
												<div class="col-lg-6">
														<div class ="form-group">
															<select name="jenis_barang" class="form-control">

															<?php 
																foreach($data['jenis'] as $dt)
															{ ?>
																<option value="<?php echo $dt->kode_jenis_barang; ?>">
																<?php echo $dt->jenis_barang; ?>
																</option>
															
															<?php }; ?>
															</select>
														</div>
												</div>
												<!--<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Jenis</button>
												</div> -->
											</div>
											<div class = "row">
												<div class="col-lg-2">
													<label>Warna :</label>
												</div>
												<div class="col-lg-6">
													 
														<div class ="form-group">
															<select name="warna_barang" class="form-control">
																
															<?php 
																foreach($data['warna'] as $dt)
															{ ?>
																<option value="<?php echo $dt->kode_warna_barang; ?>"><?php echo $dt->warna_barang; ?>
																</option>		
															
															<?php }; ?>
															</select>
														</div>
													 
												</div>
												<!--<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Warna</button>
												</div>-->
											</div>
											<div class = "row">
												<div class="col-lg-2">
													<label>Ukuran :</label>
												</div>
												<div class="col-lg-3">
													 	<div class ="form-group">
															<select name="ukuran_barang" class="form-control">
															<?php 
																foreach($data['ukuran'] as $dt)
															{ ?>
																<option value="<?php echo $dt->kode_ukuran; ?>"><?php echo $dt->ukuran; ?>
																</option>
															
															<?php }; ?>
															</select>
														</div>
													 </div>
												<div class="col-lg-3">
													 
														<div class ="form-group">
															<input name="stok" class="form-control" placeholder="Jumlah. . .">
														</div>
													 
												</div>
												<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Ukuran</button>
												</div>
											</div>
											<div class = "row">
												<div class="col-lg-2">
													<label>Supplier :</label>
												</div>
												<div class="col-lg-6">
												 
														<div class ="form-group">
															<select name="supplier" class="form-control">
															<?php 
																foreach($data['supplier'] as $dt)
															{ ?>
																<option value="<?php echo $dt->id_supplier; ?>"><?php echo $dt->nama_perusahaan; ?>
																</option>
															
															<?php }; ?>
															</select>
														</div>
												 
												</div>
												<!--<div class="col-lg-3">
													<button type="button" class="btn btn-primary">Tambah Supplier</button>
												</div>-->
											</div>
											<div class = "row">
												<div class="col-lg-3">
													<label>Harga Beli : Rp</label>
												</div>
												<div class="col-lg-6">
												 
														<div class ="form-group">
															<input name="harga_beli" class="form-control">
														</div>
												 
												</div>
											</div>
											<div class = "row">
												<div class="col-lg-3">
													<label>Harga Jual : Rp</label>
												</div>
												<div class="col-lg-6">
												 
														<div class ="form-group">
															<input name="harga_jual" class="form-control">
														</div>
												 
												</div>												
											</div>
											
											<div class = "row">
												<div class="col-lg-3">
													<label>Diskon :</label>
												</div>
												<div class="col-lg-2">
												 
														<div class ="form-group">
															<input name="diskon" class="form-control">
														</div>
												 
												</div>
												<div class="col-lg-2">
													<label>%</label>
												</div>												
											</div>
											<div class= "row">
												<div class = "col-lg-3">
													<label>Diskon Mulai :</label>
												</div>
												<div class="col-lg-6">
												 
														<div class ="form-group">
															<input name="diskon_awal" class="form-control">
														</div>
												 
												</div>	
											</div>
											<div class= "row">
												<div class = "col-lg-3">
													<label>Diskon Berakhir :</label>
												</div>
												<div class="col-lg-6">
												 
														<div class ="form-group">
															<input name="diskon_akhir" class="form-control">
														</div>
												 
												</div>	
											</div>
											
										</div>
										<div class="modal-footer">
											<button type="submit" name="submit"class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
										</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="border2">
				
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header3">
								Filter Barang
							</h3>
						</div>
					</div>
				
					<div class="row">
						<div class="col-lg-6">
							<form role="form">
								<div class="form-group">
									<input class="form-control" placeholder="Silahkan input disini. . . ">
								</div>
							</form>
						</div>
											
						<div class="col-lg-3">
							<button type="button" class="btn btn-success">Search</button>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<label>Range Harga</label>
							
						</div>
						<div class="cpl-lg-6">
							<label>Range Diskon</label>
						</div>
						
						<div class="col-lg-2">
							<div class="form-group">			
								<input class="form-control">
							</div>
						</div>
					
						<div class="col-lg-1">
							<label>sd</label>
						</div>
						
						<div class="col-lg-2">
							<div class="form-group">			
								<input class="form-control">
							</div>
						</div>
						<div class="col-lg-1">
							
						</div>
						
						<div class="col-lg-2">
							<div class="form-group">			
								<input class="form-control">
							</div>
						</div>
					
						<div class="col-lg-1">
							<label>sd</label>
						</div>
						
						<div class="col-lg-2">
							<div class="form-group">			
								<input class="form-control">
							</div>
						</div>
					
					</div>
					

					
					<div class = "row">
						<div class ="col-lg-2">
							<div class="form-group">
								<label>Jenis</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Kaos
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Jaket
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Hoodie
									</label>
								</div>
							</div>
						</div>
						
						<div class ="col-lg-2">
							<div class="form-group">
								<label>Warna</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Biru
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Kuning
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Jingga
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Hitam
									</label>
								</div>
							</div>
						</div>
						<div class ="col-lg-2">
							<div class="form-group">
								<label>Ukuran</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">S
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">L
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">M
									</label>
								</div>
							</div>
						</div>
						<div class ="col-lg-2">
							<div class="form-group">
								<label>Supplier</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Joko
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Luqman
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">Mahdan
									</label>
								</div>
							</div>
						</div>
						<div class ="col-lg-2">																		
									<label>
										<input type="checkbox" value=""> Sedang Diskon
									</label>												
						</div>
							
					</div>
						
				</div>
				<!-- /border2 -->
				<div class="row">
					<div class ="col-lg-12" >
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Nama Barang</th>
										<td>Warna</td>
										<td>Jenis</td>
										<td>Hijau</td>
										<td>Hijau</td>
										<td>Hijau</td>
										<td>Hijau</td>
										<td>Hijau</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>WARNA</th>
										<td>Hijau</td>
										<td>Merah</td>
										<td>Hijau</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>	
					
			</div>
			<!--/end container-fluid-->	
				
		</div>
		<!--/page-wrapper-->
	
	</div>


	<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>