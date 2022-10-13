<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dosen', function () {
    $dosen = [
        "Data_Mining"=>"Betha Nurina sari",
        "Framework_Pemrograman_Web"=>"Aji Primajaya",
        "Cloud_Computing"=>"Arip Solehudin",
        "Teknopreneur"=>"Hannie",
        "Blockchain"=>"Adhi Rizal", 
        "Pemrograman_Berbasis_Mobile"=>"Purwantoro",
        "Statistika_dan_Probabilitas"=>"Iqbal Maulana",
        "Kecerdasan_Buatan"=>"Ratna Mufidah",
        "Rekayasa_Perangkat_Lunak"=>"Oman Komarudin", 
        "Analisis_Desain_Algoritma"=>"Intan Purnama Sari",];

        return view('dosen')->with('dosens',$dosen);
});

Route::get('/mahasiswa', function () {
    $mahasiswa = [
        "Ilham Safaat",
        "Lily",
        "Joko Kendil",
        "Frise Anesha Lutia",
        "Hagi Azzam Azzikri", 
        "Ilhan Firaldi",
        "Ray Rizky Fawzy",
        "Gilang Maulana",
        "Rusdi Ngawi", 
        "Fauzan Arista Alamsyah",];
  
        return view('mahasiswa')->with('mahasiswas',$mahasiswa);
});

Route::get('/matakuliah', function () {
    $matakuliah = [
        "Data Mining",
        "Framework Pemrograman Web",
        "Cloud Computing",
        "Teknopreneur",
        "Blockchain", 
        "Pemrograman Berbasis Mobile",
        "Statistika dan Probabilitas",
        "Kecerdasan Buatan",
        "Rekayasa Perangkat Lunak", 
        "Analisis Desain Algoritma",];
  
        return view('matakuliah')->with('matakuliahs',$matakuliah);
});