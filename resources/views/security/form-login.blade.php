<form action="{{ route("proses_login") }}" method="post">
    @csrf
    Email<input type="text" name="email" > <br>
    Password <input type="password" name="password" > <br>
    <button type="submit">Login</button>
</form>