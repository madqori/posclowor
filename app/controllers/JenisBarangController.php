<?php

class JenisBarangController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->jenisbarang = new barang\JenisBarang();
	}
	//fungsi ini adalah fungsi rootnya
	protected function index()
	{
		//$warnaku = DB::table('pc_warna_barang')->get();
		$data = $this->jenisbarang->getDataContent();
            return View::make('jenisbarang')->with('data', $data);

    }

	public function input(){
		$input = Input::all();
		$this->jenisbarang->simpan($input);
		// $this->warnabarang->simpan($input);
		return Redirect::to('jenisbarang');
	}

	public function hapus($id)
	{
		$this->jenisbarang->hapus($id);
        return Redirect::to('jenisbarang');
	}

	public function edit($id){
		$data = $this->jenisbarang->getDataContent($id);
            return View::make('edit')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->jenisbarang->doEdit($input);
		return Redirect::to('/');
	}

}
?>