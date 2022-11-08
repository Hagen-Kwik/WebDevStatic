<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\review;
use App\Models\gadgets;
use App\Models\support;



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
                'reviews' => review::index(),
                'clients' => customer::index(),
                'supported' => support::index()
            ]
        );
    }


    public function aboutfunc()
    {
        return view(
            'about',
            [
                "pagetitle" => "About Us",
                "maintitle" => "Tentang kami"
            ]
        );
    }

    public function whyusfunc()
    {
        return view(
            'mengapakita',
            [
                "pagetitle" => "About Us",
                "maintitle" => "Mengapa kami"
            ]
        );
    }

    public function contact()
    {
        return view(
            'kontak',
            [
                "pagetitle" => "Kontak Kami",
                "maintitle" => "Kontak Kami"
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
