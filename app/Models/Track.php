<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Track extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function books(){
    //     return $this->belongsTo(Book::class);
    // }

    public function getRouteKeyName(){
        return 'kode_resi';
    }

    protected $hidden = ['kode_resi'];

    public function books(){
        return $this->hasOne(Book::class);
    }
}
