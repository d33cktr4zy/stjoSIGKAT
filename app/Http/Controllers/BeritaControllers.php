<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BeritaControllers extends Controller {

	//controller yang mengatur tampilan index berita
    //Index berisi tampilan list berita sorted by time desc
    public function index()
    {
        //tampilkan index view dari Berita
        return view('berita.index');
    }

}
