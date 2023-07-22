## Produk
1. Nama Produk
2. Harga Produk
3. Deskripsi Produk
4. Slug
5. Soft Delete

## Galeri Produk
1. Relasi ke Produk
2. URL Gambar
3. Is_Featured_Image
4. Soft Delete

## Cart
1. Relasi ke Produk
2. Relasi ke User

## Transaksi
1. Relasi ke User
2. Data Diri Pembeli
    - name
    - email
    - address
    - phone
3. Data Kurir
4. Data Pembayaran
    - payment
    - payment_url
5. Total Harga
6. Status Transaksi
7. Soft Delete

## Item Transaksi
1. Relasi ke User
2. Relasi ke Produk
3. Relasi ke Transaksi

## User
1. Roles (Admin / User)