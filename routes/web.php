<?php

use App\Http\Controllers\testController;
use App\Models\Buku;
use App\Models\Penulis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Method GET
Route::get('/test', function () {
    echo "test";
});
Route::get('/test1', [testController::class, 'index']);
Route::get('/test1/{id}', [testController::class, 'coba']);
Route::get('/form', [testController::class, 'formcoba']);


// Method POST
Route::post('/testpost', [testController::class, 'simpan']);

// Pertemuan 5
Route::get('layout', function () {
    $data = [
        'npm' => '5220411080',
        'nama' => 'Charles Daniel',
        'status' => 'Mahasiswa',
        'matakuliah' => [
            'Matematika',
            'Fisika',
            'Kimia'
        ]

    ];
    return view('pages.cth-content', $data);
});
Route::get('/chalenge1', function () {
    $mahasiswa = ["data" => [
        [
            "NPM" => "5220411080",
            "nama" => "Charles Daniel",
            "matakuliah" => [
                "Pemrograman Web",
                "Pemrograman Mobile",
                "Pemrograman Sistem Cerdas",
            ],
            "status_mahasiswa" => true
        ],
        [
            "NPM" => "5220411081",
            "nama" => "Veranda",
            "matakuliah" => [
                "Matematika",
                "Fisika",
                "Kimia",
            ],
            "status_mahasiswa" => false
        ]
    ]];
    return view('pages.challenge1', $mahasiswa);
});
Route::get('/chalenge2', function () {
    $mahasiswa = ["data" => [
        [
            "NPM" => "5220411080",
            "nama" => "Charles Daniel",
            "matakuliah" => [
                "Pemrograman Web",
                "Pemrograman Mobile",
                "Pemrograman Sistem Cerdas",
            ],
            "status_mahasiswa" => true
        ],
        [
            "NPM" => "5220411081",
            "nama" => "Veranda",
            "matakuliah" => [
                "Matematika",
                "Fisika",
                "Kimia",
            ],
            "status_mahasiswa" => false
        ]
    ]];
    return view('pages.challenge2', $mahasiswa);
});

Route::get('/chalenge3', function () {
    $mahasiswa = [
        "namaprodi" => [
            "Informatika",
            "Elektro",
            "Industri"
        ],
    ];
    return view("pages.challenge3", $mahasiswa);
});

Route::get('/create', function () {
    return view('pages.create');
});
Route::post('/simpan', [testController::class, 'create']);

Route::get('/buku',function(){
    $data = [
        'buku'=> Buku::all()
    ];
    return view('pages.buku',$data);
});
Route::get('/penulis/{id}',function(Penulis $id){
    $data = [
        'penulis'=> $id->buku
    ];
    return view('pages.penulis',$data);
});