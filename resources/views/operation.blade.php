<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penjumlahan</title>
</head>
<body>
    <h1>Hasil Penjumlahan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($result)
        <p>Hasil dari penjumlahan adalah: {{ $result }}</p>
    @endisset

    <form action="/tambah" method="get">
        <div>
            <label for="angka1">Angka 1:</label>
            <input type="text" id="angka1" name="angka1" value="{{ old('angka1') }}">
        </div>
        <div>
            <label for="angka2">Angka 2:</label>
            <input type="text" id="angka2" name="angka2" value="{{ old('angka2') }}">
        </div>
        <button type="submit">Hitung</button>
    </form>

    <form action="/" method="get">
        <button type="submit">Kembali ke home</button>
    </form>
</body>
</html>