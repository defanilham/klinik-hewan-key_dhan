<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class rm extends Model
{
    use HasFactory;

    protected $table = 'rm';

    protected $fillable = [
    	'id','idpasien','ku','anamnesis','pxfisik','lab','hasil','diagnosis','resep','jumlah', 'aturan', 'dokter', 'user_id',
    ]; 

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function AllData()
    {
    	return DB::table('rm')->get();
    }
    
}
