<?php

class WarnaBarangController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->warnabarang = new barang\WarnaBarang();
	}
	//fungsi ini adalah fungsi rootnya
	protected function index()
	{
		//$warnaku = DB::table('pc_warna_barang')->get();
		$data = $this->warnabarang->getDataContent();
            return View::make('warnabarang')->with('data', $data);

    }

	public function input(){
		$input = Input::all();
		$this->warnabarang->simpan($input);
		// $this->warnabarang->simpan($input);
		return Redirect::to('warnabarang');
	}

	public function hapus($id)
	{
		$this->war->hapus($id);
        return Redirect::to('warnabarang');
	}

	public function edit($id){
		$data = $this->war->getDataContent($id);
            return View::make('edit')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->war->doEdit($input);
		return Redirect::to('warnabarang');
	}

}
?>