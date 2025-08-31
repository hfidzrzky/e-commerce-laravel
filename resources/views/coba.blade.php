<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
</head>

<body>
    <h1>{{ $heading }}</h1> <br>

    @if($isLoggedIn)
    <p>Selamat Datang!</p>
    @else
    <p>Login Terlebih Dahulu</p>
    @endif

    <br>

    <h3>beberapa produk:</h3>
    <ol>
        @foreach($produk as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ol>
</body>

</html>