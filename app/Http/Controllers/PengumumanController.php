<?php

// app/Http/Controllers/PengumumanController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('pengumuman.index');
    }

    public function about()
    {
    	return view('pengumuman.about');
    }

    public function contact()
    {
    	return view('pengumuman.contact');
    }
}
