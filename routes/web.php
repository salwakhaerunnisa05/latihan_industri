<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\ProductController;
use App\Models\post;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return 'Selamat Datang di Halaman About';
});
Route::get('/profile', function () {
    return 'Selamat Datang di Halaman Profile';
});Route::get('/biodata/{nama_lengkap}/{tempat_lahir}/{tanggal_lahir}/{jenis_kelamin}/{alamat}/{agama}/{telepon}', function ($nama_lengkap, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $alamat, $agama, $telepon) {
    return "<h1>Biodata</h1> <br>". 
            "Nama Lengkap  : $nama_lengkap <br>". 
            "Tempat Lahir  : $tempat_lahir <br>".
            "Tanggal Lahir : $tanggal_lahir <br>". 
            "Jenis Kelamin : $jenis_kelamin <br>". 
            "Alamat        : $alamat <br>". 
            "Agama         : $agama <br>". 
            "Telepon       : $telepon <br>";
});
route :: get('/hitung/{bilangan1}/{bilangan2}' , function ($bilangan1, $bilangan2){
    $hasil = $bilangan1 +$bilangan2;
    return "<h1>Menghitung</h1> <br>". 
            "Bilangan 1 : $bilangan1 <br>". 
            "Bilangan 2 : $bilangan2 <br>". 
            "Hasil : $hasil <br>";
});
route :: get('/persegi/{sisi}' , function ($sisi){
    $hasil = $sisi* $sisi ;
    return "<h1>Menghitung persegi</h1> <br>". 
            "Sisi : $sisi <br>". 
            "Hasil Luas : $hasil <br>";
});
route :: get('/persegi_panjang/{panjang}/{lebar}' , function ($panjang, $lebar){
    $hasil = $panjang* $lebar ;
    return "<h1>Menghitung persegi</h1> <br>". 
            "Panjang: $panjang <br>".
            "Lebar : $lebar <br>". 
            "Hasil Luas : $hasil <br>";
});
route :: get('/segitiga/{alas}/{tinggi}' , function ($alas, $tinggi){
    $hasil = $alas * $tinggi * 0.5; 
    return "<h1>Menghitung Segitiga</h1> <br>". 
            "Alas: $alas <br>".
            "Tinggi : $tinggi <br>". 
            "Hasil Luas : $hasil <br>";
});
route :: get('/lingkaran/{jari}' , function ($jari){
    $hasil = $jari *3.14; 
    return "<h1>Menghitung Segitiga</h1> <br>". 
            "Jari-jari: $jari <br>".
            "Hasil Luas : $hasil <br>";
});
route::get('/warung/{nama}/{telp}/{tanggal}/{jenis}/{menu}/{jumlah}',
 function ($nama,$telp, $tanggal, $jenis, $menu, $jumlah){

    if ($jenis == "Makanan") {
        if ($menu == "Batagor") {
            $harga = 5000;
        } elseif ($menu == "Seblak") {
            $harga = 10000;
        } elseif ($menu == "Baso") {
            $harga = 15000;
        }
    } elseif ($jenis == "Minuman") {
        if ($menu == "Es Teh") {
            $harga = 5000;
        } elseif ($menu == "Kopi") {
            $harga = 10000;
        } elseif ($menu == "Thai Tea") {
            $harga = 15000;
        }else {
            $harga = 0; 
        }}

    $total = $harga * $jumlah;

   return   "<h1>~Ngoding Coffe~</h1> <br>" .
            "================================= <br>". 
            "Nama Pemesan : $nama <br>".
            "No Telepon : $telp <br>".
            "Tanggal Beli : $tanggal <br>".
            "Jenis : $jenis <br>". 
            "Menu : $menu <br>".
            "Harga : $harga <br>".
            "Jumlah : $jumlah <br>".
            "================================= <br>".
            "Total : $total <br>";
    });

    //routing view
    Route::get('halaman1', function (){
         $siswa = ["Ani","salwa","Dila","Bais","Jajas","Anggi","didil","yaya","cika","naura"];

        return view('tampil1', compact('siswa'));
    });
    Route::get('halaman2', function (){
         $hobi = ["Nyanyi","Hiking","Masak","Traveling","Nonton Film","Cerik","Berenang","Lari","Melukis","Menggambar"];
        return view('tampil2', compact('hobi'));
    });
    Route::get('halaman3', function (){
        $negara = ["eropa","korea","jepang","swis","arab","cina","Thailand","Malaysia","Brazil","Inggris"];

        return view('tampil3',compact('negara'));
    });
    route::get ('post', [PostsController::class, 'tampil']);
    route::get ('Biodata1', [BiodatasController::class, 'menampilkan']);
        //merubah data
        // $post = post::find(1);
        // $post->content ="belajar dengan giat lagi";
        // $post->save();
        // return $post;

        //menamppilkan semua  data
        // $post = post::all;

        //menampiakan data tertentu
        //return $post = Post::where('id','like','%2%')->get();

        //menghappus satu data
        // $post = Post::find(1);
        // $post->delete();
        // return $post;

        //menammbahkan data
        // $post = new Post;
        // $post->title ="menjadi musuh yang baik";
        // $post->content ="menjadi musuh yang baik";
        // $post->save();
        // return $post;
        //return view('halaman_post', compact('post'));

    
    // route::get('Biodata1', function () {
    //     //return $siswa = Siswa::all;
    //     //$biodata = Biodata::all();

    //     $post = new Biodata;
    //     $post->nama_lengkap ="Ikbal";
    //     $post->jenis_kelamin ="laki-laki";
    //     $post->tanggal_lahir ="2009-02-05";
    //     $post->tempat_lahir ="bandung";
    //     $post->agama ="islam";
    //     $post->alamat ="golf";
    //     $post->email ="kibal@gmail.com";
    //     $post->save();
    //     return $post;

    //     return view('halaman_biodata', compact('biodata'));
    // });


            

    


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product', [ProductController::class, 'index'])->name('product');
