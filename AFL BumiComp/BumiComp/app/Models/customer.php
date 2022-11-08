<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    private static $customer = [
        [
            'id' => 1,
            'nama' => "Vihara Sasanadipa Makassar",
            'logo' => "image/logo1.jpeg",
        ],
        [
            'id' => 2,
            'nama' => "PT Bentoel",
            'logo' => "image/logo2.png",
            #plis kasih cabang makassar
        ],
        [
            'id' => 3,
            'nama' => "Puskesmas Kassi Kassi",
            'logo' => "image/logo3.png",
        ],
        [
            'id' => 4,
            'nama' => "PT Megahputra Makassar",
            'logo' => "image/logo4.png",
        ],
        [
            'id' => 5,
            'nama' => "PT SSP Sidrap",
            'logo' => "image/logo5.png",
        ],
        [
            'id' => 6,
            'nama' => "Varia Motor",
            'logo' => "",
        ],
        [
            'id' => 7,
            'nama' => "PT Beton Perkasa Sidrap",
            'logo' => "image/logo7.png",
            #plis kasih cabang makassar
        ],
        [
            'id' => 8,
            'nama' => "PT Rana Karya Global",
            'logo' => "",
        ],
    ];

    public static function index()
    {
        return collect(self::$customer);
    }
}
