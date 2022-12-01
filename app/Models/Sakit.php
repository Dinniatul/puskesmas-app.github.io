<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sakit extends Model
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
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['tgl_berakhir'])
        ->format('d, M Y H:i');
    }
}
