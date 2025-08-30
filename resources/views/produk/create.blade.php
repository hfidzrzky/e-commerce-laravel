<h1>Tambah Produk</h1>
<form method="POST" action="/produk">
    @csrf
    <input type="text" name="nama" placeholder="Nama Produk"><br>
    <input type="number" name="harga" placeholder="Harga"><br>
    <button type="submit">Simpan</button>
</form>