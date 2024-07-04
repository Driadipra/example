<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "tittle" => "About",
        "name"  => "",
        "email" => "",
        "image" => ""
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
      [
        "tittle" => "Teknik Mesin",
        "slug" => "judul-post-pertama",
        "author" => "Dadad Triadi Prasetia",
        "body" => "Teknik Mesin merupakan bidang keilmuan yang mempelajari prinsip dasar fisika untuk analisis, desain, manufaktur, dan memelihara sebuah sistem mekanik."
    ],
    [
      "tittle" => "Desain Pemodelan dan Informasi Bangunan",
      "slug" => "judul-post-kedua",
      "author" => "Dadad Triadi Prasetia",
      "body" => "Desain Pemodelan dan Informasi Bangunan adalah salah satu jurusan yang mempelajari tentang perencanaan bangunan, pelaksanakan pembuatan gedung, perbaikan gedung, dan lain sebagainya."
  ],
  [
    "tittle" => "Teknik Instalasi Tenaga Listrik",
    "slug" => "judul-post-ketiga",
    "author" => "Dadad Triadi Prasetia",
    "body" => "Teknik Instalasi Tenaga Listrik adalah jurusan yang mempelajari tentang perencanaan dan pemasangan instalasi penerangan, tenaga pemasangan dan pengoperasian motor listrik dengan kendali elektromekanik, elektronik dan PLC (Programable Logic Controller)."
],
[
  "tittle" => "Teknik Kendaraan Ringan",
  "slug" => "judul-post-keempat",
  "author" => "Dadad Triadi Prasetia",
  "body" => "Teknik Kendaraan Ringan merupakan kompetensi keahlian dibidang Teknik Otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan."
],
[
"tittle" => "Teknik Sepeda Motor",
"slug" => "judul-post-kelima",
"author" => "Dadad Triadi Prasetia",
"body" => "Teknik Sepeda Motor adalah konsentrasi keahlian yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua."
],
[
"tittle" => "Teknik Komputer dan Jaringan",
"slug" => "judul-post-keenam",
"author" => "Dadad Triadi Prasetia",
"body" => "TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar."
],
[
"tittle" => "Rekayasa Perangkat Lunak",
"slug" => "judul-post-ketujuh",
"author" => "Dadad Triadi Prasetia",
"body" => "Rekayasa Perangkat Lunak merupakan jurusan yang didalamnya mempelajari prinsip sekaligus teknik mendesain perangkat lunak yang mudah digunakan dan tepat guna."
],
    ];

    return view ('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
      [
        "tittle" => "Teknik Mesin",
        "slug" => "judul-post-pertama",
        "author" => "Dadad Triadi Prasetia",
        "body" => "Teknik Mesin merupakan bidang keilmuan yang mempelajari prinsip dasar fisika untuk analisis, desain, manufaktur, dan memelihara sebuah sistem mekanik."
    ],
    [
      "tittle" => "Desain Pemodelan dan Informasi Bangunan",
      "slug" => "judul-post-kedua",
      "author" => "Dadad Triadi Prasetia",
      "body" => "Desain Pemodelan dan Informasi Bangunan adalah salah satu jurusan yang mempelajari tentang perencanaan bangunan, pelaksanakan pembuatan gedung, perbaikan gedung, dan lain sebagainya."
  ],
  [
    "tittle" => "Teknik Instalasi Tenaga Listrik",
    "slug" => "judul-post-ketiga",
    "author" => "Dadad Triadi Prasetia",
    "body" => "Teknik Instalasi Tenaga Listrik adalah jurusan yang mempelajari tentang perencanaan dan pemasangan instalasi penerangan, tenaga pemasangan dan pengoperasian motor listrik dengan kendali elektromekanik, elektronik dan PLC (Programable Logic Controller)."
],
[
  "tittle" => "Teknik Kendaraan Ringan",
  "slug" => "judul-post-keempat",
  "author" => "Dadad Triadi Prasetia",
  "body" => "Teknik Kendaraan Ringan merupakan kompetensi keahlian dibidang Teknik Otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan."
],
[
"tittle" => "Teknik Sepeda Motor",
"slug" => "judul-post-kelima",
"author" => "Dadad Triadi Prasetia",
"body" => "Teknik Sepeda Motor adalah konsentrasi keahlian yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua."
],
[
"tittle" => "Teknik Komputer dan Jaringan",
"slug" => "judul-post-keenam",
"author" => "Dadad Triadi Prasetia",
"body" => "TKJ merupakan sebuah kejuruan yang mempelajari tentang cara merakit komputer, mengenal dan mempelajari komponen hardware apa saja yang ada di dalam komputer, merakit komputer serta fokus mempelajari jaringan dasar."
],
[
"tittle" => "Rekayasa Perangkat Lunak",
"slug" => "judul-post-ketujuh",
"author" => "Dadad Triadi Prasetia",
"body" => "Rekayasa Perangkat Lunak merupakan jurusan yang didalamnya mempelajari prinsip sekaligus teknik mendesain perangkat lunak yang mudah digunakan dan tepat guna."
],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle"  => "Single Post",
        "post" => $new_post]);
});