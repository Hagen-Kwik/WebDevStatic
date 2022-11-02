<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    private static $reviews = [
[
    'id' => 1,
    'profilepicture' => "image/girl1.jpg",
    'nama' => "Julianti",
    'komen' => "memang tongmi spesialis hardis, pusingkumi bawa ke tempat lain tapi nda bisa. barupi di
    sini bisa"
],
[
    'id' => 2,
    'profilepicture' => "image/laki2.jpeg",
    'nama' => "Bambang",
    'komen' => "untungnya ada ini toko, dataku bisa selamat"
],
[
    'id' => 3,
    'profilepicture' => "image/wanita3.jpg",
    'nama' => "Yanti",
    'komen' => "pelayanannya bagus dan cepat, nda di tipu tipuki juga"
]
    ];

    public static function index(){
        return collect(self::$reviews);
    }
}
