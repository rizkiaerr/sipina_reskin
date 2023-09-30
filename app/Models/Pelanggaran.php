<?php

namespace App\Models;

use App\Models\Wbp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function wbp(){
        return $this->belongsTo(Wbp::class);
    }
}
