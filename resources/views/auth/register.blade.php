
{{-- langkah 3 --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="name">Nama</label>
        <input type="text" name="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>

