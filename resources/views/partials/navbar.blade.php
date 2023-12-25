<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<nav class="navbar fixed-top navbar-expand-lg navbar-light gradient shadow" >
    
  <div class="container">    
    <a class="navbar-brand" href="/">
      <img src="https://www.perhutani.co.id/wp-content/themes/perhutani2022/assets/images/logo.png" alt="" style="width: 80%" >
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarNav" >
        <ul class="navbar-nav mx-auto" >
          <li class="nav-item" id="nav-item-1" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" style="margin-right: 25px;">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/" style="font-size: 18px; font-weight: 600" >Home</a>
          </li>
          <li class="nav-item" id="nav-item-2" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" style="margin-right: 25px;">
            <a class="nav-link {{ Request::is('category*') ? 'active' : '' }}" href="/category" style="font-size: 18px; font-weight: 600;">Laporan</a>
          </li>
          <li class="nav-item" id="nav-item-3" onmouseover="addUnderline(this.id)" onmouseleave="removeUnderline(this.id)" >
            <a class="nav-link {{ Request::is('tentang*') ? 'active' : '' }}" href="/tentang" style="font-size: 18px; font-weight: 600">Tentang Kami</a>
          </li>
          </ul>

        <ul class="navbar-nav ms-auto">
        @auth
        <li class="bg-success rounded nav-item dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px; font-weight: 400; color: white">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <li><a class="dropdown-item" href="/dashboard/"><i class="bi bi-layout-text-window-reverse" ></i> Dashboard </a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">
                  <i class="bi bi-box-arrow-right"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li class="nav-item">
            <a class="btn btn-outline-success {{ Request::is('login*') ? 'active' : '' }}" href="/login" role="button" style="font-size: 18px; font-weight: 600">Login<i class="bi bi-box-arrow-in-right"></i></a>
          </li>
        @endauth
        </ul>
      </div>
  </div>
</nav>

<style>
  .gradient{
    background-color: #FFFFFF
  }
</style>

<script>
    function addUnderline(elementId) {
        var element = document.getElementById(elementId);
        element.style.borderBottom = "3px solid black";
    }

    function removeUnderline(elementId) {
        var element = document.getElementById(elementId);
        element.style.borderBottom = "none";
    }
</script>
