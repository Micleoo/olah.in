@extends('layout.main')
@section('container')
    <!-- Header -->
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Olah.in</h1>
                <p>Ubah Limbah Plastik Menjadi Manfaat di Rumah dengan Panduan Praktis dan Mudah Dipahami.</p>
                <a href="{{ route('kursus') }}" class="btn btn-primary">Mulai Mengolah</a>
            </div>
            <div class="header_right">
                <div class="header_right_img">
                    <img src="{{ asset('images/bg-main.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </header>

    <!-- Konten 1 -->
    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>Kategori</h1>
                <p>Mau Olah.in Apa Hari Ini?
                </p>
                <a href="{{ route('kursus') }}" class="btn">Temukan Kursus</a>

            </div>
            <div class="categories_right">
                <article class="category">
                    <h5>Daur ulang Kreatif</h5>
                    <p>Baca Tutorial tentang cara membuat barang-barang kreatif dari limbah plastik. Mulai dari dekorasi
                        rumah hingga mainan anak.</p>
                </article>
                <article class="category">
                    <h5>Pengolahan Plastik</h5>
                    <p>Pelajari teknik pengolahan plastik rumahan yang efektif. Dari pembuatan bahan baku baru hingga produk
                        siap pakai.</p>
                </article>
                <article class="category">
                    <h5>Proyek DIY</h5>
                    <p>Temukan proyek DIY (Do It Yourself) yang seru dan bermanfaat menggunakan limbah plastik. Mulai dari
                        peralatan rumah tangga hingga kerajinan tangan.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Konten 2 -->
    <section class="courses">
        <h2>Rekomendasi kursus</h2>
        <div class="container courses_container">
            <article class="course">
                <div class="course_image">
                    <img src="/images/course1.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Membuat Pot Bunga Dari Botol Plastik</h4>
                    <p>Pelajari cara mendaur ulang botol plastik bekas menjadi pot bunga yang indah dan fungsional. Kelas
                        ini mencakup langkah-langkah detail dan tips untuk hasil terbaik.</p>
                    <a href="{{ route('kursus') }}" class="btn btn-primary">Lihat Kursus</a>

                </div>
            </article>
            <article class="course">
                <div class="course_image">
                    <img src="/images/course2.jpg" alt="">
                </div>
                <div class="course_info">
                    <h4>Mengubah Kantong Plastik Menjadi Tas Belanja</h4>
                    <p>Ubah kantong plastik bekas menjadi tas belanja yang stylish dan ramah lingkungan. Tutorial ini akan
                        memandu Anda melalui prosesnya dengan mudah dan menyenangkan.</p>
                    <a href="{{ route('kursus') }}" class="btn btn-primary">Lihat Kursus</a>

                </div>
            </article>
            <article class="course">
                <div class="course_image">
                    <img src="/images/course3.jpg " alt="">
                </div>
                <div class="course_info">
                    <h4>Kreasi Mainan Anak dari Limbah Plastik</h4>
                    <p>Jadikan limbah plastik sebagai sumber bahan untuk membuat mainan anak yang kreatif dan edukatif.
                        Ikuti panduan lengkap kami untuk menciptakan mainan yang aman dan menarik.</p>
                    <a href="{{ route('kursus') }}" class="btn btn-primary">Lihat Kursus</a>

                </div>
            </article>
        </div>
    </section>
@endsection
