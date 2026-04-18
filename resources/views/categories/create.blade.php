<h1>Tambah Category</h1>

<form action="/categories" method="POST">
    @csrf
    <input type="text" name="category" placeholder="Nama Category">
    <button type="submit">Simpan</button>
</form>
<form action="/categories" method="POST">
    @csrf
    <input type="text" name="category">
    <button type="submit">Simpan</button>
</form>