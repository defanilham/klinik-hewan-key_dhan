<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendaftaranController extends Controller
{

    public function index()
    {
        return view('pendaftaran.pendaftaran');
    }


    // Proses menyimpan pasien baru
    public function simpan_pendaftaran(Request $request)
    {
        $this->validate($request, [
            'Nama_Lengkap' => 'required|min:5|max:35',
            'Tanggal_Lahir' => 'required|before:today',
            'Alamat' => 'required',
            'Pekerjaan' => 'required',
            'no_handphone' => 'required|numeric',
            'Jenis_Kelamin' => 'required',
            'nama_hewan' => 'required',
            'ras' => 'required',
            'warna_bulu' => 'required',
            'jenis_hewan' => 'required',
        ]);
        
        DB::table('pasien')->insert([
            'nama' => $request->Nama_Lengkap,
            'tgl_lhr' => $request->Tanggal_Lahir,
            'alamat' => $request->Alamat,
            'pekerjaan' => $request->Pekerjaan,
            'hp' => $request->no_handphone,
            'jk' => $request->Jenis_Kelamin,
            'pendidikan' => $request->Pendidikan_terakhir,
            'nama_hewan' => $request->nama_hewan,
            'ras' => $request->ras,
            'warna_bulu' => $request->warna_bulu,
            'jenis_hewan' => $request->jenis_hewan,
            'alergi' => $request->alergi,
            'created_time' => Carbon::now(),
            'updated_time' => Carbon::now(),
        ]);
        $ids= DB::table('pasien')->latest('created_time')->first();         
        switch($request->simpan) {
            case 'simpan': 
                $buka=route('pengumuman', $ids->id);
                $pesan='Data pasien berhasil disimpan!';
            break;
           
        }

        return redirect($buka)->with('pesan', $pesan);
    }

}
