<?php

class Index extends Eloquent {

	protected $table = 'pc_barang'; //table pada database

	protected $primaryKey = 'no_barang'; //primary key table

	 public $timestamps = false; 

	public function simpan($input){
		$this->kode_jenis_barang = $input['kode_jenis_barang'];
		$this->jenis_barang= $input['jenis_barang'];
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
