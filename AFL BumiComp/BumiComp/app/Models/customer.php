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
            'cabang_mskr' => "false"
        ],
        [
            'id' => 2,
            'nama' => "PT Bentoel",
            'logo' => "image/logo2.png",
            'cabang_mskr' => "true"
        ],
        [
            'id' => 3,
            'nama' => "Puskesmas Kassi Kassi",
            'logo' => "image/logo3.png",
            'cabang_mskr' => "false"

        ],
        [
            'id' => 4,
            'nama' => "PT Megahputra Makassar",
            'logo' => "image/logo4.png",
            'cabang_mskr' => "false"

        ],
        [
            'id' => 5,
            'nama' => "PT SSP Sidrap",
            'logo' => "image/logo5.png",
            'cabang_mskr' => "false"

        ],
        [
            'id' => 6,
            'nama' => "Varia Motor",
            'logo' => "",
            'cabang_mskr' => "false"

        ],
        [
            'id' => 7,
            'nama' => "PT Beton Perkasa Sidrap",
            'logo' => "image/logo7.png",
            'cabang_mskr' => "true"

        ],
        [
            'id' => 8,
            'nama' => "PT Rana Karya Global",
            'logo' => "",
            'cabang_mskr' => "false"

        ],
    ];

    public static function index()
    {
        return collect(self::$customer);
    }
}
