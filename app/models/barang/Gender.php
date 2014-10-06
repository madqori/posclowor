<?php
	namespace barang;
	use Eloquent;
	class Gender extends Eloquent {

		protected $table = 'pc_gender'; //table pada database

		protected $primaryKey = 'id_gender'; //primary key table

		public $timestamps = false; 

		public function getDataContent($id = null){
			if ($id == 1) {
	            return $this->find($id)->get();
	        }else{
	            return self::all();
	        }
		}
	}
?>
