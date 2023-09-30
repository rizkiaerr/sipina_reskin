<?php

namespace App\Models;

use App\Models\Status;
use App\Models\Kegiatan;
use App\Models\Kesehatan;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wbp extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getRouteKeyName(){
        return 'id_registrasi';
    }

    protected $hidden = ['id_registrasi'];

    public function kegiatan(){
        return $this->hasMany(Kegiatan::class,'wbp_id');
    }

    public function kesehatan(){
        return $this->hasMany(Kesehatan::class,'wbp_id');
    }

    public function status(){
        return $this->hasMany(Status::class,'wbp_id');
    }

}
