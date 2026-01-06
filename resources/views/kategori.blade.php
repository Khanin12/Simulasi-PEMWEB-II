<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kategori</title>
</head>

<body>
    <h1>Kategori</h1>
    <form action="{{route('kategori'}}", method="post">
        @csrf
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori">
        <br>
        <button type="submit">Simpan</button>
    </form>


    @foreach ($frame as $f)
    <p>{{ $f->id_kategori}}</p>
    <p>{{ $f->kategori}}</p>
    @endforeach
</body>

</html>
