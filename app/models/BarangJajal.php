<?php 
class BarangJajal extends Eloquent{
	
	public function barang(){
		return DB::table('pc_barang')->get();
	}
	public function jenisBarang(){
		return DB::table('pc_jenis_barang')->get();
	}
	public function warnaBarang(){
  		return DB::table('pc_warna_barang')->get();
	}
}