@extends('layout.main')
@section('container')
    <main>
        <!-- Header -->
        <section class="py-5 text-center container" style="position: relative;">
            <div class="bg-image" style="background-image: url('{{ asset('images/bg-kursus.jpg') }}');"></div>
            <div class="overlay"></div>
            <div class="row py-lg-5">
                <div class="header-kursus col-lg-6 col-md-8 mx-auto">
                    <h1 class="text-custom">Daftar Kursus</h1>
                    <p class="text-custom">Temukan beragam kursus yang menginspirasi dan informatif
                        di olah.in!
                        Dari pengolahan limbah plastik hingga kreativitas DIY, kami hadir dengan konten-konten yang
                        membangkitkan kreativitas dan memberikan solusi praktis untuk mengelola limbah.</p>
                </div>
                <div>
                    <p>
                        <a href="#" class="btn btn-primary my-2" id="cta-btn">Temukan kursus</a>
                    </p>
                </div>
            </div>
        </section>
        <!-- article -->
        <div id="article-section" class="album py-5 bg-body-tertiary">
            <h2 style="text-align: center; margin-bottom: 4rem;">Article</h2>
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/celengan-botol-plastik.webp') }}" class="card-img-1"
                                alt="Celengan Botol Plastik" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">"Celengan dari Botol Plastik Bekas"! Dalam kursus ini, kita akan
                                    belajar bagaimana mengubah botol plastik bekas menjadi celengan yang cantik dan
                                    fungsional.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('kursus.show', 1) }}"
                                            class="btn btn-sm btn-outline-secondary">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/Pot-botol-plastik.webp') }}" class="card-img-2"
                                alt="Pot Botol Plastik" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">"Mengolah Botol Plastik Bekas Menjadi Pot"! Dalam kursus ini, Anda akan
                                    belajar bagaimana memanfaatkan botol plastik bekas menjadi pot tanaman yang menarik dan
                                    fungsional.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('kursus.show', 2) }}"
                                            class="btn btn-sm btn-outline-secondary">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/Hiasan-gantung-plastik.jpg') }}" class="card-img-3"
                                alt="Hiasan gantung Plastik" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">"Hiasan Gantung dari Plastik Tak Terpakai"! Dalam artikel ini, kita
                                    akan membahas cara seru dan kreatif untuk mendaur ulang botol plastik bekas menjadi
                                    hiasan gantung yang cantik..</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('kursus.show', 3) }}"
                                            class="btn btn-sm btn-outline-secondary">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/Tas-plastik-bekas.jpg') }}" class="card-img-4"
                                alt="Tas Plastik bekas" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">Dalam dunia fashion yang terus berkembang, tas dari bahan plastik bekas
                                    menjadi tren baru yang menarik perhatian. Bahan plastik bekas dari kemasan makanan,
                                    detergen, pewangi pakaian, bungkus kopi instan, dan sebagainya.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('kursus.show', 4) }}"
                                            class="btn btn-sm btn-outline-secondary">Tutorial</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/Tempat-pensil-plastik.jpg') }}" class="card-img-5"
                                alt="Tempat pensil dari plastik bekas" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">"Tempat Pensil dari Plastik Bekas"! Dalam dunia yang semakin sadar akan
                                    pentingnya keberlanjutan, mendaur ulang plastik bekas menjadi berbagai barang fungsional
                                    dan menarik adalah langkah kecil yang dapat membawa dampak besar.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('kursus.show', 5) }}"
                                            class="btn btn-sm btn-outline-secondary">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('images/Gantungan-kunci.jpg') }}" class="card-img-6" alt="Gantungan Kunci"
                                width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">"Gantungan Kunci dari Plastik Bekas"! Dalam upaya mengurangi limbah
                                    plastik dan mendukung keberlanjutan lingkungan, mendaur ulang plastik bekas menjadi
                                    barang-barang berguna dan dekoratif adalah pilihan yang tepat.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('kursus.show', 6) }}"
                                            class="btn btn-sm btn-outline-secondary">Tutorial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 style="text-align: center; margin-bottom: 4rem;">Video Tutorial</h2>
        <article class="course">
            <div class="course_video" style="text-align: center; margin-bottom: 4rem;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/nOjx2oCrCDs" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="course_info">
                <h4>Pot Bunga Bundar</h4>
                <p>Ide Kreatif Cara Membuat Pot Bunga Bundar Dari Botol Bekas AQUA</p>
            </div>
        </article>

        <article class="course">
            <div class="course_video" style="text-align: center; margin-bottom: 4rem;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qQcIc-1igSI?si=o1LbBB_IzHCqPmgX"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="course_info">
                <h4>Rak Gantung & Tempat Pensil</h4>
                <p>mendaur ulang barang-barang bekas menjadi kreasi baru yang fungsional</p>
            </div>
        </article>

        <article class="course">
            <div class="course_video" style="text-align: center; margin-bottom: 4rem;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-LfblXD9eYE" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="course_info">
                <h4>Tas dari Botol Plastik</h4>
                <p>mendaur ulang bahan-bahan yang biasanya dianggap sebagai limbah menjadi barang yang fungsional dan
                    stylish</p>
            </div>
        </article>

    </main>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#cta-btn').addEventListener('click', function(event) {
                event.preventDefault();
                var articleSection = document.getElementById('article-section');
                articleSection.style.display = 'block';
                articleSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
