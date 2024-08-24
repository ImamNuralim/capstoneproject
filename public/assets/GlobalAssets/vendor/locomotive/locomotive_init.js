var locomotive_init = '<link rel="stylesheet" href="/GlobalAssets/vendor/locomotive/locomotive-scroll.css">' +
'<script src="/GlobalAssets/vendor/locomotive/locomotive-scroll.min.js"></script>';

$('head').append(locomotive_init);

function addScriptToBottom(scriptContent) {
    var script = document.createElement('script');
    script.text = scriptContent;
    document.body.appendChild(script);
}

$(document).ready(function() {

    var scriptContent = `
        const scroll = new LocomotiveScroll({
            el: document.querySelector('body'),
            smooth: true, 
            multiplier: 1,
            scrollbarClass: 'd-none'
        });
    `;

    addScriptToBottom(scriptContent);
});