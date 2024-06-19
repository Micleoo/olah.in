// Keranjang.js

// Fungsi untuk mengurangi jumlah item
function decrementQuantity(button) {
    var input = button.nextElementSibling; // Input element
    var currentValue = parseInt(input.value); // Nilai saat ini

    if (currentValue > 1) {
        input.value = currentValue - 1; // Kurangi nilai
    }
}

// Fungsi untuk menambah jumlah item
function incrementQuantity(button) {
    var input = button.previousElementSibling; // Input element
    var currentValue = parseInt(input.value); // Nilai saat ini

    input.value = currentValue + 1; // Tambah nilai
}
