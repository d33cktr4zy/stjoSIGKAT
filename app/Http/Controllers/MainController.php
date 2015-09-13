<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MainController extends Controller {

	//Kontrol buat halaman utama
    //NOTE:
    //Halaman utama terbuka untuk umum

    //kontrol user auth
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index()
    {
        return view('main');
    }

}
