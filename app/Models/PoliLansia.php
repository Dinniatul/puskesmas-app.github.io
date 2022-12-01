<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliLansia extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function pasien($value=''){
    	return $this->belongsTo(Pasien::class);
    }
    public function dokter($value=''){
    	return $this->belongsTo(Dokter::class);
    }
}
