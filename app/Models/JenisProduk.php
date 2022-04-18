<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','slug'];

    public function produks(){
        return $this->hasMany(Produk::class);
    }
}
