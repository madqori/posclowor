<?php
namespace barang; //semacam package atau folder
use Eloquent;

class WarnaBarang extends Eloquent {

	protected $table = 'pc_warna_barang'; //table pada database

	protected $primaryKey = 'kode_warna_barang'; //primary key table

	 public $timestamps = false; 

	public function simpan($input){
		$this->kode_warna_barang = $input['kode_warna_barang'];
		$this->warna_barang= $input['warna_barang'];
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
