document.addEventListener('DOMContentLoaded', function () {
    const followBtn = document.getElementById('follow-btn');
    const loadingIcon = document.getElementById('loading-icon');

    followBtn.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action

        // Show the loading icon
        loadingIcon.style.display = 'inline-block';

        // Simulate a delay for loading animation (e.g., 1 second)
        setTimeout(() => {
            // Toggle the text between "Follow" and "Following"
            if (followBtn.textContent.trim().includes('Follow')) {
                followBtn.innerHTML = 'Following<span id="loading-icon" style="display: none; margin-left: 5px;">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader">' +
                    '<line x1="12" y1="2" x2="12" y2="6"></line>' +
                    '<line x1="12" y1="18" x2="12" y2="22"></line>' +
                    '<line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>' +
                    '<line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>' +
                    '<line x1="2" y1="12" x2="6" y2="12"></line>' +
                    '<line x1="18" y1="12" x2="22" y2="12"></line>' +
                    '<line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>' +
                    '<line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>' +
                    '</svg>' +
                    '</span>';
            } else {
                followBtn.innerHTML = 'Follow<span id="loading-icon" style="display: none; margin-left: 5px;">' +
                    '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader">' +
                    '<line x1="12" y1="2" x2="12" y2="6"></line>' +
                    '<line x1="12" y1="18" x2="12" y2="22"></line>' +
                    '<line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>' +
                    '<line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>' +
                    '<line x1="2" y1="12" x2="6" y2="12"></line>' +
                    '<line x1="18" y1="12" x2="22" y2="12"></line>' +
                    '<line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>' +
                    '<line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>' +
                    '</svg>' +
                    '</span>';
            }

            // Hide the loading icon
            loadingIcon.style.display = 'none';
        }, 1000); // Adjust the delay time as needed
    });
});
