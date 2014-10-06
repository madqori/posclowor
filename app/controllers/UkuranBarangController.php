<?php

class UkuranBarangController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->ukuranbarang = new barang\UkuranBarang();
	}
	//fungsi ini adalah fungsi rootnya
	protected function index()
	{
		//$warnaku = DB::table('pc_warna_barang')->get();
		$data = $this->ukuranbarang->getDataContent();
            return View::make('ukuranbarang')->with('data', $data);

    }

	public function input(){
		$input = Input::all();
		$this->ukuranbarang->simpan($input);
		// $this->ukuranbarang->simpan($input);
		return Redirect::to('ukuranbarang');
	}

	public function hapus($id)
	{
		$this->war->hapus($id);
        return Redirect::to('ukuranbarang');
	}

	public function edit($id){
		$data = $this->war->getDataContent($id);
            return View::make('edit')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->war->doEdit($input);
		return Redirect::to('ukuranbarang');
	}

}
?>