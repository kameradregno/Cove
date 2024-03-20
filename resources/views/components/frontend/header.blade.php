<nav class="navbar navbar-expand-lg" style="background-color: #353535">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        aria-label="Toggle navigation"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        data-mdb-target="#navbarSupportedContent"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white fw-light" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-light" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-light" href="#">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-light" href="#">Laporan</a>
          </li>
        </ul>

        <div
          class="icon-group d-flex me-3 align-items-center"
          style="justify-content: flex-end; gap: 0.8rem"
        >
          <!-- <a href="#">
            <i class="bx bxs-user-circle fs-2 text-light ms-4"></i>
          </a> -->
          <div class="dropdown">
            <button
              class="dropdown-toggle shadow-0 text-light text-end"
              style="background-color: #353535; border: none; width: 169px"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              User
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Daftar</a></li>
              <li><a class="dropdown-item" href="#">Masuk</a></li>
              <li><a class="dropdown-item" href="#">Edit Akun</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>