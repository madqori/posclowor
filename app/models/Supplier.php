<?php

class Index extends Eloquent {

	protected $table = 'pc_supplier'; //table pada database

	protected $primaryKey = 'id_supplier'; //primary key table

	 public $timestamps = false; 

	public function simpan($input){
		$this->nama_perusahaan = $input['nama_perusahaan'];
		$this->nama_personel= $input['nama_personel'];
		$this->email=$input['email'];
		$this->telepon=$input['telepon'];
		$this->catatan=$input['catatan'];
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
