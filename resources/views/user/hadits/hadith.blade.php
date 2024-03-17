<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadith Data</title>
</head>
<body>
    @if(isset($hadithData))
        <h1>Hadith Data</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Arabic Text</th>
                    <th>ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($hadithData['data']['hadiths'] as $hadith)
                    <tr>
                        <td>{{ $hadith['number'] }}</td>
                        <td>{{ $hadith['arab'] }}</td>
                        <td>{{ $hadith['id'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>{{ $error ?? 'No data available' }}</p>
    @endif
</body>
</html>
