<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gadgets extends Model
{
    use HasFactory;

    private static $gadgets = [
        [
            'name' =>  'Hard Disk',
            'description' =>  [
                'Secara umum, hardisk rusak bisa diakibatkan karena banyak hal misalnya Hardisk mengalami benturan yang keras (terjatuh dll), ketumpahan air atau matinya listrik secara tiba tiba yg menyebabkan 1 atau beberapa bagian part harddisk rusak atau karena sudah berumur. Faktor faktor yang tidak biasa antara lain dimasuki semut.',
                'Anda disarankan untuk menyimpan data penting anda di lebih dari satu tempat untuk menghindari kerusakan-kerusakan yang tidak perlu sebab ongkos penarikan data mahal. Jika Hard disk anda rusak, disarankan untuk langsung membawa ke pakar hardisk terdekat anda sebab jika anda mencoba memperbaikinya sendiri, kerusakan pada hard disk anda bisa menjadi lebih berat. Toko kami merupakan satu-satunya pakar hard disk di Indonesia Timur',
                'Adapun prosedur perbaikan Hardisk di toko kami adalah sebagai berikut: ',
                '1. Anda membawa Hard disk ke toko kami kemudian kami akan memeriksa. Proses ini di kenal dengan proses Cek level dan dikenakan biaya 100.000. Proses ini adalah untuk mengetahui kerusakan yang ada pada hardisk anda selayaknya anda melakukan cek kesehatan di dokter. Proses ini berlangsung selama 1 hari kerja dan anda akan di kontak oleh pakar Hard disk saat pemeriksaan Hard disk anda sudah selesai. Anda kemudian akan memutuskan untuk melanjutkan atau tidaknya proses penarikan data. Disclaimer : Penarikan data bukanlah perbaikan Hard disk.',
                '2. Ketika anda memutuskan untuk melanjutkan proses perbaikan data, anda akan membayar DP sesuai kesepakatan dengan pakarnya. Waktu pengerjaan dari Hard disk tergantung dengan tingkat kerusakan dari hardisk anda. ',
                '3. Setelah Proses Recovery Selesai, anda akan dikontak lagi untuk meyelesaikan pembayaran. Setelah anda sudah melunasi pembayaran, data anda siap untuk diambil menggunakan HDD yang disediakan oleh anda.'
            ],
            'picture' =>  'hdd.png'
        ],

        [
            'name' =>  'PC & Laptop',
            'description' =>  [
                'Permasalahan yang sangat umum di laptop adalah seiring berjalannya waktu. Laptop yang anda gunakan semakin melambat. Ini bisa dikarenakan banyak faktor namun faktor yang paling umum adalah hardware dari laptop anda yang sudah tua namun anda masih menginstall aplikasi-aplikasi yang baru dimana aplikasi-aplikasi ini memberatkan komputer anda.',
                'Selain dari permasalahan di atas, permasalahan yang lain adalah laptop bisa mati total. Laptop juga bisa restart-restart sendiri atau mati sendiri setelah beberapa lama pemakaian',
                'Solusi untuk permasalahan laptop lambat di atas ada 2 yaitu mengupgrade laptop  atau menginstall ulang laptop anda. Upgrade laptop bisa dilakukan dengna cara menambahkan RAM, menambah SSD, sampai bahkan membeli laptop baruPenginstalan ulang laptop adalah cara yang lebih murah akan tetapi solusi ini hanya solusi sementara dimana jika laptop anda, anda installkan aplikasi baru lagi, laptop anda akan melambat lagi. Selain melambat, jika laptop anda kemasukan virus maka satu satunya cara perbaikan adalah dengan menginstall ulang laptop anda.',
                'Untuk kerusakan pada pc ini jauh lebih variatif jika dibandingkan dengan laptop. Ini disebabkan oleh lebih susunan part yang lebih luas dibandingkan laptop sehingga permasalahan dari pc bisa dari hardware maupun software. Kerusakan hardware pada laptop itu jarang kecuali ada hal fisik yang terjadi pada laptop misalnya terbentur maupun tersiram air.',
                'Untuk kerusakan pada pc ini akan dicek dulu kerusakaannya apakah benar dari part ataukah hanya software saja yang rusak. Biaya dan waktu pengerjaan semuanya tergantung pada kerusakan yang terdapat di perangkat anda. Part part di pc paling sering rusak disebabkan oleh koslet listrik pada saat pemadaman listrik secara tiba-tiba. Untuk mencegah masalah ini anda dianjurkan untuk memasangkan UPS pada perangkat dimana UPS ini bisa berperan sebagai batere cadangan saat ada pemadaman listrik tiba-tiba.',
                'Jika anda ingin melakukan reparasi pada PC atau laptop anda, anda bisa menitipkan dahulu PC/Laptop anda ke toko kami di sini dimana akan dilakukan pengecekan dahulu. Setelah pengecekan dilakukan, anda akan dikabari untuk biaya pengerjaan dan juga lama pengerjaannya. Jika anda setuju maka kami akan melanjutkan perbaikan dari laptop/pc anda. Untuk biaya pengecekan dari laptop/PC adalah GRATIS'
            ],
            'picture' =>  'PC.PNG'
        ],

        [
            'name' =>  'Printer',
            'description' =>  [
                'Masalah yang umum di printer adalah hasil cetakan jelek, roler kertas tidak berfungsi nornal sehingga kertas tidak tertarik. Printer juga dapat mati total yaitu printernya tidak mau nyala apapun usaha kita untuk menyalakan dia dll. Masalah masalah di atas merupakan masalah dari partnya',
                'Selain dari kerusakan part, printer bisa rusak jika ada benda asing yang masuk kedalam printer sebagai contoh pin atau penutup pulpen. Untuk kerusakan seperti ini biayanya akan berbeda jika dibandingkan dengan kerusakan yang diakibatkan karena kerusakan part.',
                'Untuk proses reparasi printer itu miip dengan reparasi Hardisk adalah anda harus menitipkan printer dulu untuk dicek kemudian anda akan diinfokan jika anda ingin melanjutkan untuk mengerjakan printernya. Lama waktu pengerjaan dan juga biaya pengerjaan selalu berdasarkan hasil dari cek. Jika anda tidak ingin untuk melanjutkan pengerjaan, anda TIDAK akan dibiayakan biaya pemeriksaan.'
            ],
            'picture' =>  'printer.png'
        ]
    ];

    public static function index()
    {
        return collect(self::$gadgets);
    }

    public static function getEACH($name)
    {
        return self::index()->firstWhere("name", $name);
    }
}
