<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
                <i class='bx bx-chevron-left'></i>
            </span>
            <img src="./img/logo.png" class="logo" alt="">
            <h3 class="hide">Aqumex</h3>
        </div>

        <div class="search">
            <i class='bx bx-search'></i>
            <input type="text" class="hide" placeholder="Quick Search ...">
        </div>

        <div class="sidebar-links">
            <ul>
                <div class="active-tab"></div>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="{{ route('dashboard.dashboard') }}" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bx-tachometer'></i>
                            <i class='bx bxs-tachometer'></i>
                        </div>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>

                <li class="tooltip-element" data-tooltip="1">
                    <a href="{{ route('dashboard.ustaz.index') }}"  data-active="1">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0-8 0M6 21v-2a4 4 0 0 1 4-4h3.5m4.92.61a2.1 2.1 0 0 1 2.97 2.97L18 22h-3v-3z"/></svg>
                        </div>
                        <span class="link hide">Ustaz</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="{{ route('dashboard.murid.index') }}" data-active="2">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0-4 0m-2 8v-1a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1M15 5a2 2 0 1 0 4 0a2 2 0 0 0-4 0m2 5h2a2 2 0 0 1 2 2v1M5 5a2 2 0 1 0 4 0a2 2 0 0 0-4 0m-2 8v-1a2 2 0 0 1 2-2h2"/></svg>
                        </div>
                        <span class="link hide">Murid</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="3">
                    <a href="{{ route('dashboard.admin.index') }}" data-active="3">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24"><path fill="currentColor" d="M17 11c.34 0 .67.04 1 .09V7.58c0-.8-.47-1.52-1.2-1.83l-5.5-2.4c-.51-.22-1.09-.22-1.6 0l-5.5 2.4C3.47 6.07 3 6.79 3 7.58v3.6c0 4.54 3.2 8.79 7.5 9.82c.55-.13 1.08-.32 1.6-.55c-.69-.98-1.1-2.17-1.1-3.45c0-3.31 2.69-6 6-6"/><path fill="currentColor" d="M17 13c-2.21 0-4 1.79-4 4s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 1.38c.62 0 1.12.51 1.12 1.12s-.51 1.12-1.12 1.12s-1.12-.51-1.12-1.12s.5-1.12 1.12-1.12m0 5.37c-.93 0-1.74-.46-2.24-1.17c.05-.72 1.51-1.08 2.24-1.08s2.19.36 2.24 1.08c-.5.71-1.31 1.17-2.24 1.17"/></svg>
                        </div>
                        <span class="link hide">Admin</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="4">
                    <a href="{{ route('dashboard.post.index') }}" data-active="4">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M4 6c0 1.657 3.582 3 8 3s8-1.343 8-3s-3.582-3-8-3s-8 1.343-8 3"/><path d="M4 6v6c0 1.657 3.582 3 8 3m8-3.5V6"/><path d="M4 12v6c0 1.657 3.582 3 8 3m3-3a3 3 0 1 0 6 0a3 3 0 1 0-6 0m5.2 2.2L22 22"/></g></svg>
                        </div>
                        <span class="link hide">Postingan</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="5">
                    <a href="{{ route('dashboard.kategori.index') }}" data-active="5">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3h6m-3-3v6"/></svg>
                        </div>
                        <span class="link hide">Kategori</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="6">
                    <a href="{{ route('dashboard.report.index') }}" data-active="6">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0-18 0m9-4v4m0 4h.01"/></svg>
                        </div>
                        <span class="link hide">Report</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="7">
                    <a href="{{ route('dashboard.iklan.index') }}" data-active="7">
                        <div class="icon" style="padding-left: 19px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M19 4a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm-4 4h-1a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h1a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3M8.5 8A2.5 2.5 0 0 0 6 10.5V15a1 1 0 0 0 2 0v-1h1v1a1 1 0 0 0 .883.993L10 16a1 1 0 0 0 1-1v-4.5A2.5 2.5 0 0 0 8.5 8m6.5 2a1 1 0 0 1 1 1v2a1 1 0 0 1-.883.993L15 14zm-6.5 0a.5.5 0 0 1 .5.5V12H8v-1.5a.5.5 0 0 1 .41-.492z"/></svg>
                            </div>
                        <span class="link hide">Iklan</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="sidebar-footer">
            <a href="#" class="account tooltip-element" data-tooltip="0">
                <i class='bx bx-user'></i>
            </a>
            <div class="admin-user tooltip-element" data-tooltip="1">
                <div class="admin-profile hide">
                    <img src="./img/face-1.png" alt="">
                    <div class="admin-info">
                        <h3>John Doe</h3>
                        <h5>Admin</h5>
                    </div>
                </div>
                <a href="#" class="log-out">
                    <i class='bx bx-log-out'></i>
                </a>
            </div>

        </div>
    </nav>



    <div class="container-fluid">
        @yield('dashboard')
        @yield('ustaz')
        @yield('murid')
        @yield('admin')
        @yield('post')
        @yield('kategori')
        @yield('report')
        @yield('iklan')
    </div>


</body>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script>
    const shrink_btn = document.querySelector(".shrink-btn");
    const search = document.querySelector(".search");
    const sidebar_links = document.querySelectorAll(".sidebar-links a");
    const active_tab = document.querySelector(".active-tab");
    const shortcuts = document.querySelector(".sidebar-links h4");
    const tooltip_elements = document.querySelectorAll(".tooltip-element");

    // Set activeIndex default to 0 (first item)
    let activeIndex = 0;

    // Function to move the active tab indicator
    function moveActiveTab() {
        let topPosition = activeIndex * 58 + 2.5; // Assuming 58px is the height of each sidebar link

        if (activeIndex > 3 && shortcuts) { // Safely handle the presence of shortcuts
            topPosition += shortcuts.clientHeight;
        }

        active_tab.style.top = `${topPosition}px`;
    }

    // Function to handle link clicks and update activeIndex
    function changeLink() {
        sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
        this.classList.add("active");

        activeIndex = this.dataset.active;
        console.log("Active Index:", activeIndex); // Debugging to ensure the correct active index is set

        moveActiveTab();
    }

    // Attach click event listener to each sidebar link
    sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

    // Function to show tooltip on hover
    function showTooltip() {
        let tooltip = this.parentNode.lastElementChild;
        let spans = tooltip.children;
        let tooltipIndex = this.dataset.tooltip;

        Array.from(spans).forEach((sp) => sp.classList.remove("show"));
        spans[tooltipIndex].classList.add("show");

        tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
    }

    // Attach hover event listener to each tooltip element
    tooltip_elements.forEach((elem) => {
        elem.addEventListener("mouseover", showTooltip);
    });

    // Handle shrink button click
    shrink_btn.addEventListener("click", () => {
        document.body.classList.toggle("shrink");
        setTimeout(moveActiveTab, 400); // Adjust active tab after shrink effect

        shrink_btn.classList.add("hovered");

        setTimeout(() => {
            shrink_btn.classList.remove("hovered");
        }, 500);
    });

    // Handle search click
    search.addEventListener("click", () => {
        document.body.classList.remove("shrink");
        search.lastElementChild.focus();
    });

    // Initial setup: Move active tab to its correct position based on default activeIndex
    moveActiveTab();
    // Function to handle link clicks and update activeIndex
function changeLink() {
    sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
    this.classList.add("active");

    activeIndex = this.dataset.active;
    localStorage.setItem("activeIndex", activeIndex); // Simpan activeIndex ke localStorage

    moveActiveTab();
}

// Load the activeIndex from localStorage on page load
window.addEventListener("load", () => {
    const savedIndex = localStorage.getItem("activeIndex");
    if (savedIndex !== null) {
        activeIndex = savedIndex;
        sidebar_links[activeIndex].classList.add("active");
    } else {
        sidebar_links[0].classList.add("active"); // Default ke dashboard jika tidak ada yang tersimpan
    }

    moveActiveTab();
});

</script>

</html>
