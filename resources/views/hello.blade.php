<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hallo semua  nya</h1>

    @php
        $nama = 'budi';
        $nilai = 70;
    @endphp

    @if ($nilai >= 60)
    @php
         $keterangan = 'lulus';
    @endphp

    @else
        @php
        $keterangan = 'tidak lulus';
        @endphp
    @endphp

    @endif

    {{-- cara memanggil variabel php di laravel --}}
    <p>Nama saya : {{ $nama }}</p>
    <p>Nilai saya : {{ $nilai }}</p>
    <p>Keterangan : {{ $keterangan }}</p>
</body>
</html>
