<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah Data</title>
</head>
<body>
    @if(isset($surahData))
        <h1>Surah Data</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Nama Latin</th>
                    <th>Jumlah Ayat</th>
                    <th>Tempat Turun</th>
                    <th>Arti</th>
                    <th>Deskripsi</th>
                    <th>Audio</th> <!-- New column for playing audio -->
                </tr>
            </thead>
            <tbody>
                @foreach($surahData['data'] as $surah)
                    <tr>
                        <td>{{ $surah['nomor'] }}</td>
                        <td>{{ $surah['nama'] }}</td>
                        <td>{{ $surah['namaLatin'] }}</td>
                        <td>{{ $surah['jumlahAyat'] }}</td>
                        <td>{{ $surah['tempatTurun'] }}</td>
                        <td>{{ $surah['arti'] }}</td>
                        <td>{!! $surah['deskripsi'] !!}</td>
                        <td>
                            <!-- Add audio player for each audio link -->
                            @foreach($surah['audioFull'] as $audio)
                                <audio controls>
                                    <source src="{{ $audio }}" type="audio/mpeg">
                                    Your browser does not support the audio tag.
                                </audio><br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>{{ $error ?? 'No data available' }}</p>
    @endif
</body>
</html>
