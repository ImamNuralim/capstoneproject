@extends('partials.navbar')
@section('hadith')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadith Data</title>
</head>
<body>
    <div class="hadith-home">
        <ul class="tabs tab-bg"></ul>

    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
      </div>
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
@stop
