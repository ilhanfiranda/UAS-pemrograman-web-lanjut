@extends("blank")

@section("konten")

    <h2>{{ $obat->judul }}</h2>
    <div>
        Created at {{ $obat->created_at }} by {{ $obat->pembeli->nama }}
    </div>
    <img src="{{ $obat->gambar }}" alt="">

    <div>
        {!! $obat->obat !!}
    </div>

    <div>

        @foreach($obat->kategori as $kat)
            {{ $kat->nama }} |
        @endforeach

    </div>
@endsection