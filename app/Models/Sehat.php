<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sehat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pasien()
    {
    	return $this->belongsTo(Pasien::class);
    }
    public function dokter()
    {
    	return $this->belongsTo(Dokter::class);
    }
}
