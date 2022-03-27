<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Halaman Pendataan</h2>
    <form action="/kirim" method="post">
        @csrf
        <label>Nama Lengkap</label> <br>
        <input type="text"name="nama"> <br> <br>
        <label>Alamat</label> <br>
        <textarea name="alamat"cols="30" rows="10"></textarea> <br><br>
        <input type="submit"value="kirim">
    </form>
</body>
</html>