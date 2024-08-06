document.addEventListener('DOMContentLoaded', function () {
    var notificationButton = document.getElementById('notification-button');
    var notificationDropdown = document.getElementById('notification-dropdown');

    notificationButton.addEventListener('click', function (event) {
        event.preventDefault();
        if (window.innerWidth > 768) { // Cek jika layar lebih besar dari 768px (desktop)
            notificationDropdown.classList.toggle('show');
        }
    });

    // Tutup dropdown jika klik di luar dropdown
    document.addEventListener('click', function (event) {
        if (!notificationButton.contains(event.target) && !notificationDropdown.contains(event.target)) {
            notificationDropdown.classList.remove('show');
        }
    });
});
