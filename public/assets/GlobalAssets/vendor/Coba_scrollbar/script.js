$(document).ready(function () {

    // Tambahkan css di bagian head
    var css = `
    <style>
      body::-webkit-scrollbar-track
      {
        -webkit-box-shadow: inset 0 0 18px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
        width:18px;
        
      }
  
      body::-webkit-scrollbar
      {
        width: 14px;
        background-color: #F5F5F5;
      }
  
      body::-webkit-scrollbar-thumb
      {
        background-color: #2A6D63;
        border-radius: 6px;
        width:6px;
      }
      </style>
    `;
    $("head").append(css);
});
