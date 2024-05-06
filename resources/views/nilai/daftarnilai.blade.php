<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>daftar nilai</h1>

        @php
            $no = 1;
            $n2 = ['nama' => 'sabardi', 'nilai' => '80'];
            $n3 = ['nama' => 'sabardi', 'nilai' => '80'];
            $n4 = ['nama' => 'sabardi', 'nilai' => '80'];
            $n5 = ['nama' => 'sabardi', 'nilai' => '80'];
            $judul = ['no', 'nama', 'nilai', 'keterangan'];
            $mahasiswa = [$n2, $n3, $n4, $n5];
        @endphp

        <table border="1">
            <thead>
                <tr>
                    @foreach ( $judul as $judul )
                        <th>{{$judul}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($mahasiswa as $mahasis)
                    @php
                        $ket = ($mahasis['nilai'] >= 60 ? 'lulus' : 'gagal');
                        $warna = ($no % 2 == 1) ? 'green' : 'red';
                    @endphp
                    <tr bgcolor="{{$warna}}">
                        <td>{{$no}}</td>
                        <td>{{$mahasis['nama']}}</td>
                        <td>{{$mahasis['nilai']}}</td>
                        <td>{{$ket}}</td>
                    </tr>
                    @php $no++; @endphp
                @endforeach
            </tbody>

        </table>




    </center>


</body>
</html>
