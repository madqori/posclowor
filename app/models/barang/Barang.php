<?php
namespace barang;
use Eloquent;

class Barang extends Eloquent {

	protected $table = 'pc_barang'; //table pada database

	protected $primaryKey = 'no_barang'; //primary key table

	 public $timestamps = false; 

	public function simpan($input){
		$this->nama_barang = $input['nama_barang'];
		$this->kode_jenis_barang = $input['jenis_barang'];
		$this->kode_warna_barang = $input['warna_barang'];
		$this->kode_ukuran = $input['ukuran_barang'];
		$this->id_supplier = $input['supplier'];
		$this->harga_beli = $input['harga_beli'];
		$this->harga_jual = $input['harga_jual'];
		$this->diskon_awal = $input['diskon_awal'];
		$this->diskon_akhir = $input['diskon_akhir'];
		$this->stok= $input['stok'];
		$this->diskon=$input['diskon'];
		$this->save();
	}

	public function getDataContent($id = null){
		if ($id == 1) {
            return $this->find($id)->get();
        }else{
            return self::all();
        }
	}

	public function hapus($id){
        self::find($id)->delete();
    }

   //  public function doEdit($input){
   //          $id = $input['id_mataajar'];
   //          $update = $this->find($id);
   //         // $user = User::find(1);

			// $update->nama_mataajar = $input['nama_mataajar'];

			// $update->save();
   //  }
}
?>
