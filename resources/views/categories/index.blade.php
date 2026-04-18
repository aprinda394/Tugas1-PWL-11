<h1>Data Category</h1>

<a href="/categories/create">Tambah</a>

@foreach($categories as $c)
    <p>{{ $c->category }}</p>
@endforeach