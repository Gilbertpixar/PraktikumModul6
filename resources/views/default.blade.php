<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Clothesez</title>
    @vite('resources/sass/app.scss')
</head>

<body>
        {{-- Contoh cara mereferensikan gambar di dalam file blade dengan
menggunakan pendekatan Vite --}}
        <div class="container text-center mt-5 bg-light">
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/laravel.jpg') }}" alt="image" width="250">
            <div class="mt-4">
                <div class="table-responsive border p-3 rounded-3 bg-secondary">

                    <div class="text-white">
                        <p><strong>"Clothesez is easy"</strong></p>
                        <p>Clothesez ini merupakan perusahaan yang bergerak dibidang clothing. Didirikan pada tahun 2023 oleh Gilbert mahasiswa Institut Teknologi Telkom Surabaya angkatan 2020. Berbagai macam produk fashion yang ditawarkan memiliki kualitas yang tinggi dengan harga yang terjangkau. Pada masa mula perkembangannya, Clorhesez mencoba memasuki pasar lokal yang sudah ramai dengan berbagai brand lokal terkenal. Meski menuai hasil yang belum maksimal, hal itu tidak membuat kami berkecil hati karena setiap brand memiliki sesuatu hal yang menjadi ciri khasnya masing-masing.</p>
                    </div>
                    <table class="table table-bordered table-hover table-striped mb-0 bg-light text-secondary">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Email</th>
                                <th>Interest</th>
                                <th>Contact</th>
                                <th>Social Media</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>Gilbert Pierro</td>
                                    <td>18 August 2002</td>
                                    <td>gilbertpierro18@gmail.com</td>
                                    <td>Music and sport</td>
                                    <td>+6285258874237</td>
                                    <td>Insta: Gilbertpixar_</td>
                                </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    @vite('resources/js/app.js')
</body>
</html>

