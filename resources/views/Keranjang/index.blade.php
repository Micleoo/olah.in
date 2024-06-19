@extends('layout.main')

@section('container')
<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-8">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black">Keranjang</h1>
                                        <h6 class="mb-0 text-muted">{{ $keranjang->count() }} barang</h6>
                                    </div>
                                    <hr class="my-4">

                                    @if ($keranjang->count() > 0)
                                        @foreach ($keranjang as $item)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{ asset('storage/' . $item->product->foto_produk) }}" class="img-fluid rounded-3"
                                                        alt="{{ $item->product->nama_produk }}">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-black mb-0">{{ $item->product->nama_produk }}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button type="button" class="btn btn-link px-2" onclick="changeQuantity({{ $item->id }}, -1)">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <input id="quantity_{{ $item->id }}" min="1" name="quantity" value="{{ $item->jumlah }}"
                                                        type="number" class="form-control form-control-sm" onchange="updateQuantity({{ $item->id }})" />
                                                    <button type="button" class="btn btn-link px-2" onclick="changeQuantity({{ $item->id }}, 1)">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">{{ $item->product->harga }}</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <!-- Tombol hapus item dari keranjang -->
                                                    <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                        @endforeach
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="/Marketplace" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Kembali ke Marketplace</a></h6>
                                        </div>
                                    @else
                                    <h1>Keranjang Anda kosong</h1>
                                    <h6 class="mb-0"><a href="/Marketplace" class="btn btn-primary btn-block">Belanja Sekarang</a></h6>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 bg-grey">
                                <div class="p-5">
                                    <h3 class="fw-bold mb-5 mt-2 pt-1 text-black">Ringkasan</h3>
                                    <hr class="my-4">

                                    <div class="mb-3" id="totalHarga">
                                        <h6>Total Harga:</h6>
                                        <h5 class="fw-bold">{{ number_format($totalHarga, 0, ',', '.') }}</h5>
                                    </div>

                                    <button id="checkoutBtn" class="btn btn-primary btn-block">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// Fungsi untuk mengubah jumlah barang
function changeQuantity(itemId, change) {
    let quantityInput = document.getElementById('quantity_' + itemId);
    let currentQuantity = parseInt(quantityInput.value);
    let newQuantity = currentQuantity + change;

    // Minimal jumlah barang adalah 1
    if (newQuantity < 1) {
        newQuantity = 1;
    }

    quantityInput.value = newQuantity;

    // Simpan perubahan ke localStorage
    updateQuantity(itemId, newQuantity);

    // Hitung ulang total harga setelah mengubah jumlah barang
    recalculateTotal();
}

// Fungsi untuk meng-update jumlah barang dan total harga di localStorage
function updateQuantity(itemId, newQuantity) {
    let cart = JSON.parse(localStorage.getItem('keranjang')) || {};
    cart[itemId] = newQuantity;
    localStorage.setItem('keranjang', JSON.stringify(cart));
}

// Fungsi untuk menghitung ulang total harga
function recalculateTotal() {
    let totalHarga = 0;
    let itemElements = document.querySelectorAll('.mb-0.col-md-3.col-lg-2.col-xl-2.offset-lg-1');

    itemElements.forEach(element => {
        let hargaElement = element.nextElementSibling.textContent.trim(); // Ambil teks dari elemen harga
        let harga = parseFloat(hargaElement.replace('.', '').replace(',', '.')); // Ubah ke float
        let itemId = element.parentNode.getAttribute('data-item-id'); // Ambil ID item
        let quantityInput = element.parentNode.querySelector('input[name="quantity"]');
        let jumlah = parseInt(quantityInput.value); // Ambil nilai jumlah dari input

        totalHarga += harga * jumlah;
    });

    // Tampilkan total harga yang telah dihitung ulang
    let totalHargaElement = document.getElementById('totalHarga').querySelector('.fw-bold');
    totalHargaElement.textContent = formatRupiah(totalHarga);
}

// Fungsi untuk memuat kembali data dari localStorage saat halaman dimuat
window.onload = function() {
    let cart = JSON.parse(localStorage.getItem('keranjang')) || {};
    Object.keys(cart).forEach(itemId => {
        let quantityInput = document.getElementById('quantity_' + itemId);
        if (quantityInput) {
            quantityInput.value = cart[itemId];
        }
    });

    // Hitung ulang total harga saat halaman pertama kali dimuat
    recalculateTotal();
};

// Tambahkan event listener untuk tombol Checkout
document.getElementById('checkoutBtn').addEventListener('click', function() {
    // Tampilkan notifikasi SweetAlert2
    Swal.fire({
        icon: 'success',
        title: 'Checkout berhasil!',
        text: 'Anda berhasil checkout.',
        showConfirmButton: false,
        timer: 1500 // Durasi notifikasi dalam milidetik
    });
});

</script>
@endsection
