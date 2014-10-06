<?php

class BarangController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){
		$this->jenisBarang = new barang\JenisBarang();
		$this->warnaBarang = new barang\WarnaBarang();
		$this->ukuranBarang = new barang\UkuranBarang();
		$this->supplier = new barang\Supplier();
		$this->barang2 = new barang\Barang();
		// $this->barangJajal = new BarangJajal;
	}
	//fungsi ini adalah fungsi rootnya
	protected function index()
	{
		//$warnaku = DB::table('pc_warna_barang')->get();
		$data=array(
			'warna' => $this->warnaBarang->getDataContent(),
			'jenis' => $this->jenisBarang->getDataContent(),
			'ukuran' => $this->ukuranBarang->getDataContent(),
			'supplier' => $this->supplier->getDataContent(),
			'barang2' => $this->barang2->getDataContent(),

			); 
		return View::make('barang')->with('data',$data);
		//$data = $this->barang->getDataContent();
            // return View::make('barang');
            // 	->with('pc_barang', $this->barangJajal->barang())
            // 	->with('pc_jenis_barang', $this->barangJajal->jenisBarang())
            // 	->with('pc_ukuran_barang', $this->barangJajal->ukuranBarang());

    }

	public function input(){
		$input = Input::all();
		$this->barang->simpan($input);
		// $this->warnabarang->simpan($input);
		return Redirect::to('barang');
	}

	public function hapus($id)
	{
		$this->barang->hapus($id);
        return Redirect::to('barang');
	}

	public function edit($id){
		$data = $this->barang->getDataContent($id);
            return View::make('edit')
                        ->with('data', $data);
	}

	public function doEdit(){
		$input = Input::all();
		$this->barang->doEdit($input);
		return Redirect::to('/');
	}

}
?>