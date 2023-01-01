@extends("blank")

@section("konten")

    <form action="{{ route("simpan_pembeli") }}" method="post">
        @csrf

        Nama : <input type="text" name="nama"> <br>
        Alamat  : <textarea name="alamat" id="" cols="20" rows="5"></textarea> <br>
        Kelamin:
            <input type="radio" name="kelamin" value="pria"> Pria
            <input type="radio" name="kelamin" value="wanita"> Wanita
        <br>


        Email : <input type="text" name="email"> <br>
        Password : <input type="password" name="password"> <br>
        Level : <input type="text" name="level"> <br>

        <button type="submit">Simpan</button>
    </form>


@endsection