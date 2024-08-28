@section('shortcut')
<style>
    .shortcut-container {
        display: grid;
        grid-template-columns: repeat(6, 100px);
        gap: 60px;
        padding-top: 15px;
        justify-content: center;
    }
    .shortcut {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 150%;
        height: 100%;
        background-color: #3695fb;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 8px;
        transition: background-color 0.3s;
    }
    .shortcut:hover {
        background-color: #0056b3;
    }
    .shortcut.active {
    background-color: #004ea0;
    color: white;
}


    /* Responsive Design */
    @media (max-width: 999px) {

        .shortcut-container {
            display: block;
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        .shortcut {
            width: 100%;
            height: 50px;
            margin-bottom: 10px;
            max-width: 80%;
            margin: 10px auto; /* Centering the shortcuts */
        }
        .shortcut-container select {
            display: block;
            width: 100%;
            height: 50px;
            font-size: 16px;
            border-radius: 8px;
            background-color: #3695fb;
            color: white;
            border: none;
            padding-left: 10px;
            margin: 0 auto; /* Centering the select */
        }
        .shortcut-container select option {
            background-color: white;
            color: black;
        }
        .shortcut.active {
    background-color: #004ea0;
    color: white;
}
    }
</style>
</head>
<body>
    <div class="shortcut-container">
        <a href="{{ route('user.kitab.musthalah-al-hadits') }}" class="shortcut {{ request()->routeIs('user.kitab.musthalah-al-hadits') ? 'active' : '' }}">Musthalah al-Hadis</a>
        <a href="{{ route('user.kitab.sanad-dan-matan') }}" class="shortcut {{ request()->routeIs('user.kitab.sanad-dan-matan') ? 'active' : '' }}">Sanad dan Matan</a>
        <a href="{{ route('user.kitab.klasifikasi.klasifikasi') }}" class="shortcut {{ request()->routeIs('user.kitab.klasifikasi.klasifikasi') ? 'active' : '' }}">Klasifikasi</a>
        <a href="{{ route('user.kitab.cabang') }}" class="shortcut {{ request()->routeIs('user.kitab.cabang') ? 'active' : '' }}">Cabang-cabang</a>
        <a href="{{ route('user.kitab.kitab-kitab.kitab') }}" class="shortcut {{ request()->routeIs('user.kitab.kitab-kitab.kitab') ? 'active' : '' }}">Kitab-kitab</a>
        <a href="{{ route('user.kitab.pilihan') }}" class="shortcut {{ request()->routeIs('user.kitab.pilihan') ? 'active' : '' }}">Hadist Pilihan</a>

        <select class="shortcut" onchange="location = this.value;">
            <option value="{{ route('user.kitab.musthalah-al-hadits') }}" {{ request()->routeIs('user.kitab.musthalah-al-hadits') ? 'selected' : '' }}>Musthalah al-Hadis</option>
            <option value="{{ route('user.kitab.sanad-dan-matan') }}" {{ request()->routeIs('user.kitab.sanad-dan-matan') ? 'selected' : '' }}>Sanad dan Matan</option>
            <option value="{{ route('user.kitab.klasifikasi.klasifikasi') }}" {{ request()->routeIs('user.kitab.klasifikasi.klasifikasi') ? 'selected' : '' }}>Klasifikasi</option>
            <option value="{{ route('user.kitab.cabang') }}" {{ request()->routeIs('user.kitab.cabang') ? 'selected' : '' }}>Cabang-cabang</option>
            <option value="{{ route('user.kitab.kitab-kitab.kitab') }}" {{ request()->routeIs('user.kitab.kitab-kitab.kitab') ? 'selected' : '' }}>Kitab-kitab</option>
            <option value="{{ route('user.kitab.pilihan') }}" {{ request()->routeIs('user.kitab.pilihan') ? 'selected' : '' }}>Hadist Pilihan</option>
        </select>
    </div>

<script>
    const shortcuts = document.querySelectorAll('.shortcut-container a');
    const dropdown = document.querySelector('.shortcut-container select');

    window.addEventListener('resize', function() {
        if (window.innerWidth <= 999) {
            shortcuts.forEach(link => link.style.display = 'none');
            dropdown.style.display = 'block';
        } else {
            shortcuts.forEach(link => link.style.display = 'flex');
            dropdown.style.display = 'none';
        }
    });

    window.dispatchEvent(new Event('resize'));
</script>
</body>
