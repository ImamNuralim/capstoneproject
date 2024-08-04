@extends('partials.navbar')
@section('livechat')

<link rel="stylesheet" href="{{ asset('assets/css/livechat.css') }}">
<section class="msger">
    <header class="msger-header">
        <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> Ayo Tanya!
        </div>
        <div class="msger-header-options">
            <span><i class="fas fa-cog"></i></span>
        </div>
    </header>

    <!-- Kategori Pemilih -->
    <div class="category-selector" style="height: 50" id="categorySelector">
        <h3>Pilih Kategori</h3>
        <button class="category-btn" data-category="category1">Hukum</button>
        <button class="category-btn" data-category="category2">Kesehatan</button>
        <button class="category-btn" data-category="category3">Teknologi</button>
    </div>

    <!-- Chat -->
    <main class="msger-chat" id="chatSection" style="display: none;">
        <div class="msg left-msg">
            <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>

            <div class="msg-bubble">
                <div class="msg-info">
                    <div class="msg-info-name">Ustaz</div>
                    <div class="msg-info-time">12:45</div>
                </div>

                <div class="msg-text">
                    Ada yg bisa kami bantu?
                </div>
            </div>
        </div>

        <div class="msg right-msg">
            <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>

            <div class="msg-bubble">
                <div class="msg-info">
                    <div class="msg-info-name">Imam Nuralim</div>
                    <div class="msg-info-time">12:46</div>
                </div>

                <div class="msg-text">
                    Assalamualaikum Ustaz.. Apa hukum memakan uang rakyat Ustaz?
                </div>
            </div>
        </div>
    </main>

    <form class="msger-inputarea" id="chatForm" style="display: none;">
        <input type="text" class="msger-input" placeholder="Enter your message...">
        <button type="submit" class="msger-send-btn">Send</button>
    </form>
</section>

<script>
    // Menangani pemilihan kategori
    const categoryButtons = document.querySelectorAll('.category-btn');
    const chatSection = document.getElementById('chatSection');
    const chatForm = document.getElementById('chatForm');
    const categorySelector = document.getElementById('categorySelector');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const selectedCategory = this.getAttribute('data-category');
            console.log('Kategori terpilih:', selectedCategory);
            categorySelector.style.display = 'none'; // Sembunyikan pemilih kategori
            chatSection.style.display = 'block'; // Tampilkan chat
            chatForm.style.display = 'flex'; // Tampilkan form input
        });
    });
</script>


@endsection
