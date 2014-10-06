<?php
namespace barang;
use Eloquent;
class UkuranBarang extends Eloquent {

	protected $table = 'pc_ukuran'; //table pada database

	protected $primaryKey = 'kode_ukuran'; //primary key table

	 public $timestamps = false; 

	public function simpan($input){
		$this->id_gender = $input['id_gender'];
		$this->kode_ukuran = $input['kode_ukuran'];
		$this->ukuran= $input['ukuran'];
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
