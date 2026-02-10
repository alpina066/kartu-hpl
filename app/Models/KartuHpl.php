<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuHpl extends Model
{
    protected $table = 'kartu_hpl';

    protected $fillable = [
    
        'user_id','nama','umur','suami','pekerjaan','alamat','dx_keb',
        'hpht','hpl','perdarahan','bb','tb','tensi','hb',
        'status_tt','tablet_fe','letak_janin','lila','jarak_anak',
        'partus_tgl','penolong','jenis_kelamin','cara_lahir',
        'bayi','plasenta','ku_bayi','ku_ibu','bbl','lk_ld'
    ];

    public function user()
    {
        
    return $this->belongsTo(User::class);
    }   


}
