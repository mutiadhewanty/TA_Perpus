<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatAdmin extends Model
{
   

    protected $table = 'kategori_admin';

    // public function katAdmin(){
    //     return $this->hasMany(KategoriAdmin::class);
    // }
    public $timestamps = false;
    protected $primaykey = "id";

    protected $fillable = [
        'id',
        'nama_kategori',
    ];

    public function katAdmin(){
        return $this->belongsTo(KategoriAdmin::class);
    }

    use HasFactory;
};
