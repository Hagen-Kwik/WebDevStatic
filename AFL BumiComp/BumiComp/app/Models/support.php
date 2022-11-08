<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class support extends Model
{
    use HasFactory;

    private static $klien = [
        [
            'nama' => "DELL",
            'logo' => "image/klienkami/DELL.png",
        ],
        [
            'nama' => "ACER",
            'logo' => "image/klienkami/ACER.png",
        ],
        [
            'nama' => "ASUS",
            'logo' => "image/klienkami/Asus.png",

        ],
        [
            'nama' => "HGST",
            'logo' => "image/klienkami/HGST.png",

        ],
        [
            'nama' => "HP",
            'logo' => "image/klienkami/HP.png",

        ],
        [
            'nama' => "IBM",
            'logo' => "image/klienkami/IBM.jpg",

        ],
        [
            'nama' => "lenovo",
            'logo' => "image/klienkami/lenovo.jpeg",

        ],
        [
            'nama' => "SEAGATE",
            'logo' => "image/klienkami/SEAGATE.jpeg",
        ],
        [
            'nama' => "WD",
            'logo' => "image/klienkami/WD.png",
        ],
        [
            'nama' => "MSI",
            'logo' => "image/klienkami/MSI.png",
        ],
        [
            'nama' => "kingston",
            'logo' => "image/klienkami/kingston.png",
        ],
        [
            'nama' => "sandisk",
            'logo' => "image/klienkami/sandsik.png",
        ]
    ];

    public static function index()
    {
        return collect(self::$klien);
    }
}
