<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <fieldset>
            <legend>Data Siswa</legend>
            <table border='1'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Nomor Induk Siswa</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siswa as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nis }}</td>
                            <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                            <td>{{ $data->jk }}</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </fieldset>
    </body>
</html>
