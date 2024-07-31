@section('share-popup')
<head>
    <link rel="stylesheet" href="{{ asset('css/share-popup.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>

<body id="shareAnswer">
    <button class="view-modal">Share</button>
    <div class="popup">
        <header>
            <span>Share Modal</span>
            <div class="close"><i class="uil uil-times"></i></div>
        </header>
        <div class="content">
            <p>Share this link via</p>
            <ul class="icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-telegram-plane"></i></a>
            </ul>
            <p>Or copy link</p>
            <div class="field">
                <i class="url-icon uil uil-link"></i>
                <input type="text" readonly value="https://codepen.io/coding_dev_">
                <button>Copy</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/share-popup.js') }}"></script>
</body>
@endsection
