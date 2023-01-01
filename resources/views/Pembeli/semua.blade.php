@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $pembeli)
        Nama : {{ $pembeli->nama }} <br>
        Alamat: {{ $pembeli->alamat }} <br>
        Kelamin: {{ $pembeli->kelamin }} <br>
        <a href="{{ route('ubah_pembeli', ['id' => $pembeli->id]) }}">Ubah</a>
        <a href="{{ route('tampil_pembeli', ['id' => $pembeli->id]) }}">Tampil</a>

        <form action="{{ route('hapus_pembeli', ['id' => $pembeli->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection