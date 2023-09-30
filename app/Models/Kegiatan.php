<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wbp;

class Kegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function wbp(){
        return $this->belongsTo(Wbp::class);
    }

}
