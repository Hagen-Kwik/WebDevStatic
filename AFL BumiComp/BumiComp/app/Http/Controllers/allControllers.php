<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\gadgets;


class allControllers extends Controller
{
    public function homefunc()
    {
        return view(
            'index',
            [
                "pagetitle" => "Home",
                "maintitle" => "Servis Elektronik dengan mudah",
                "tagline" => "Reservasi dan kontak kami sekarang untk menservis perangkat kalian",
                'reviews' => review::index()
            ]
        );
    }


    public function aboutfunc()
    {
        return view(
            'about',
            [
                "pagetitle" => "About Us",
                "maintitle" => "About Us"
            ]
        );
    }

    public function laptopFunc()
    {
        return view(
            'laptop',
            [
                "pagetitle" => "Laptop",
                "maintitle" => "Laptop",
                'info' => gadgets::getEACH('PC & Laptop')
            ]
        );
    }

    public function harddiskFunc()
    {
        return view(
            'harddisk',
            [
                "pagetitle" => "Hard Disk",
                "maintitle" => "Hard Disk",
                'info' => gadgets::getEACH('Hard Disk')
            ]
        );
    }

    public function printerFunc()
    {
        return view(
            'printer',
            [
                "pagetitle" => "Printer",
                "maintitle" => "Printer",
                'info' => gadgets::getEACH('Printer')
            ]
        );
    }
}
