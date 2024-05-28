<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fadd57a8f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @extends('layout.main')

    @section('container')

    <section id="Upload Product" style="margin-top:50px">
        <div class="container mt-5" style="margin-bottom:50px">
            <div class="col-md-12 text-center">
                <h1 class="title" style="margin-top: 50px; margin-bottom: 50px; font-weight: 700; font-size: 40px;">Upload produk kamu</h1>
            </div>
            <form action="{{ route('UploadProduk') }}" method="POST" enctype="multipart/form-data" style="font-size:20px;font-weight:600;">
                @csrf
                <div class="mb-5">
                    <label for="nama_produk" class="form-label">Nama produk</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukan nama produk kamu" required>
                </div>
                <!-- Tambahkan area pratinjau gambar -->
                <div class="mb-5">
                    <label for="foto_produk" class="form-label">foto produk</label>

                    <input type="file" class="form-control" id="foto_produk" name="foto_produk" placeholder="Masukan foto produk kamu" required>


                </div>

                <div class="mb-5">
                    <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi produkmu jancok" required></textarea>
                </div>

                <div class="mb-5">
                    <label for="harga" class="form-label">Harga produk</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan harga produkmu" required>
                </div>

                <div class="mb-5">
                    <label for="jumlah_terjual" class="form-label">Jumlah terjual</label>
                    <input type="number" class="form-control" id="jumlah_terjual" name="jumlah_terjual" placeholder="Masukan jumlah terjual" required>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="width:100%;font-size:20px">Submit</button>
                </div>
            </form>
        </div>
    </section>
    @endsection

    @if (session('message'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('message') }}",
            timer: 2000,
            showConfirmButton: false
        }).then(function() {
            window.location.href = "{{ route('showMarketPlace') }}";
        });
    </script>
        @endif

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    const dropArea = document.querySelector('.input-group');
    const inputField = document.getElementById('foto_produk');
    const previewImage = document.getElementById('preview-image');

    dropArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropArea.classList.add('drag-over');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('drag-over');
    });

    dropArea.addEventListener('drop', (event) => {
        event.preventDefault();
        dropArea.classList.remove('drag-over');

        const file = event.dataTransfer.files[0];
        inputField.files = event.dataTransfer.files;
        previewFile(file);
    });

    // Tampilkan pratinjau gambar saat dipilih
    inputField.addEventListener('change', () => {
        const file = inputField.files[0];
        previewFile(file);
    });

    function previewFile(file) {
        const reader = new FileReader();

        reader.onload = function(event) {
            previewImage.src = event.target.result;
            previewImage.style.display = 'block'; // Pastikan gambar pratinjau ditampilkan
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            previewImage.src = '#';
            previewImage.style.display = 'none'; // Sembunyikan gambar pratinjau jika tidak ada file
        }
    }
</script>

</html>