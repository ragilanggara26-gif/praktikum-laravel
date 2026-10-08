<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Masuk</title>
</head>
<body>
    <h1>HalamanSurat Masuk</h1>
    <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%;">
        <thead style="background-color: #777777;">
            <tr>
                <th>ID</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suratmasuk as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nomor_surat'] }}</td>
                <td>{{ $item['tanggal'] }}</td>
                <td>{{ $item['pengirim'] }}</td>
                <td>{{ $item['perihal'] }}</td>
                <td>
                    <a href="{{ route('surat-masuk.show', $item['id']) }}">Detail Surat</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
