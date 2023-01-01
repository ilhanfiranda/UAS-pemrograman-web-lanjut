@extends("blank")


@section("konten")
    <a href="{{ route("user_input") }}">Tambah User</a>


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Level</th>
            <th>Create at</th>
            <th>Update At</th>
        </tr>
        @foreach($data_user as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>{{ $user->pembeli == null ? "" : $user->pembeli->kelamin }}</td>
                <td>
                    <a href="{{ route("user_edit", ["id" => $user->id]) }}">edit</a> |
                    <a href="{{ route("user_show", ["id" => $user->id]) }}">show</a>

                    <form action="{{ route("user_hapus", ['id' => $user->id]) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit">Hapus</button>
                    </form>

                </td>
            </tr>

        @endforeach
    </table>



@endsection

           
