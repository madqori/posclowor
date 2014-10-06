<?php

class SupplierController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->supplier = new barang\Supplier();
	}
	//fungsi ini adalah fungsi rootnya
	protected function index()
	{
		//$warnaku = DB::table('pc_warna_barang')->get();
		$data = $this->supplier->getDataContent();
            return View::make('supplier')->with('data', $data);

    }

	public function input(){
		$input = Input::all();
		$this->supplier->simpan($input);
		// $this->warnabarang->simpan($input);
		return Redirect::to('supplier');
	}

	public function hapus($id)
	{
		$this->supplier->hapus($id);
        return Redirect::to('supplier');
	}

	public function edit($id){
		$data = $this->supplier->getDataContent($id);
            return View::make('edit')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->supplier->doEdit($input);
		return Redirect::to('/');
	}

}
?>