<nav class="navbar navbar-expand-lg navbar-dark shadow mb-10" style="background-color: rgb(226, 157, 19)">
<link rel="stylesheet" href="style.css">
      <div class="container">
        <a class="navbar-brand" href="#">STEMANIKA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}" href="/">Beranda</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($tittle === "About") ? 'active' : '' }} " href="/about">Tentang</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($tittle === "Posts") ? 'active' : '' }}" " href="/blog">Jurusan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>