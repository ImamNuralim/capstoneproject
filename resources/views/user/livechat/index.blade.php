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
    <div class="category-selector">
        <h3>Pilih Kategori</h3>
        <select id="categoryDropdown" class="category-dropdown" style="width: 200px;">
            <option value="category1">Sholat</option>
            <option value="category2">Nikah</option>
            <option value="category3">Puasa</option>
            <option value="category4">Zakat</option>
        </select>
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
    const categoryDropdown = document.getElementById('categoryDropdown');
        const chatSection = document.getElementById('chatSection');
        const chatForm = document.getElementById('chatForm');
        const categorySelector = document.querySelector('.category-selector');

        categoryDropdown.addEventListener('change', function() {
            const selectedCategory = this.value;
            if (selectedCategory) {
                console.log('Kategori terpilih:', selectedCategory);
                categorySelector.style.display = 'none'; // Sembunyikan pemilih kategori
                chatSection.style.display = 'block'; // Tampilkan chat
                chatForm.style.display = 'flex'; // Tampilkan form input
            }
        });
</script>


@endsection
