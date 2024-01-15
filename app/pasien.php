<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
    	'id','nama','tgl_lhr','jk','alamat','hp','pendidikan','pekerjaan','alergi','nama_hewan', 'ras', 'warna_bulu', 'jenis_hewan', 'user_id',
    ]; 

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function AllData()
    {
    	return DB::table('pasien')->get();
    }
    
}
