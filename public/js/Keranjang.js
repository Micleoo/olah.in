// Fungsi untuk menambah produk ke keranjang belanja
    function addToCart(productId) {
        // Kirim permintaan AJAX untuk menambahkan produk ke keranjang belanja
        // Gantilah URL dengan URL yang sesuai dengan rute Anda
        $.ajax({
            url: '/add-to-cart',
            method: 'POST',
            data: {
                productId: productId
            },
            success: function(response) {
                // Tampilkan pesan sukses atau perbarui tampilan keranjang belanja
                alert('Produk berhasil ditambahkan ke keranjang belanja');
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan kesalahan jika terjadi kesalahan
                alert('Terjadi kesalahan: ' + error);
            }
        });
    }

    // Fungsi untuk menghapus produk dari keranjang belanja
    function removeFromCart(productId) {
        // Kirim permintaan AJAX untuk menghapus produk dari keranjang belanja
        // Gantilah URL dengan URL yang sesuai dengan rute Anda
        $.ajax({
            url: '/remove-from-cart',
            method: 'POST',
            data: {
                productId: productId
            },
            success: function(response) {
                // Perbarui tampilan keranjang belanja
                alert('Produk berhasil dihapus dari keranjang belanja');
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan kesalahan jika terjadi kesalahan
                alert('Terjadi kesalahan: ' + error);
            }
        });
    }

    // Fungsi untuk memperbarui jumlah produk di keranjang belanja
    function updateCart(productId, quantity) {
        // Kirim permintaan AJAX untuk memperbarui jumlah produk di keranjang belanja
        // Gantilah URL dengan URL yang sesuai dengan rute Anda
        $.ajax({
            url: '/update-cart',
            method: 'POST',
            data: {
                productId: productId,
                quantity: quantity
            },
            success: function(response) {
                // Perbarui tampilan keranjang belanja
                alert('Jumlah produk berhasil diperbarui');
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan kesalahan jika terjadi kesalahan
                alert('Terjadi kesalahan: ' + error);
            }
        });
        // fungsi tombol
        function incrementQuantity(button) {
            var input = button.parentNode.querySelector('input[type=number]');
            var newValue = parseInt(input.value, 10) + 1;
            input.value = newValue;
        }

        function decrementQuantity(button) {
            var input = button.parentNode.querySelector('input[type=number]');
            var newValue = parseInt(input.value, 10) - 1;
            input.value = newValue >= 0 ? newValue : 0;
        }
}