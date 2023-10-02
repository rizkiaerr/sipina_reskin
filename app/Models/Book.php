<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wbp;
use App\Models\Track;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getRouteKeyName(){
        return 'kode_resi';
    }

    protected $hidden = ['kode_resi'];

    public function book(){
        return $this->hasMany(Wbp::class);
    }

    public function track(){
        return $this->hasMany(Track::class,'kode_resi');
    }
}
