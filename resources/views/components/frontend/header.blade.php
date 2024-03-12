{{-- header --}}
<nav
      class="navbar navbar-expand-lg"
      style="height: 70px; background-color: #3e423c !important"
    >
      <div class="container-fluid">
        <a class="navbar-brand text-light ms-3" href="#">Navbar</a>
        <div class="d-flex ms-auto">
          <div
            class="icon-group d-flex me-3 align-items-center"
            style="justify-content: flex-end; gap: 2rem"
          >
            <a href="#">
              <i class="bx bx-cart" style="font-size: 24px; color: #a78478"></i>
            </a>
            <a href="#">
              <i
                class="bx bx-search"
                style="font-size: 24px; color: #a78478"
              ></i>
            </a>
            <div class="dropdown me-0">
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Sign in</a></li>
                <li><a class="dropdown-item" href="#">Register</a></li>
              </ul>
              <button
                type="button"
                class="btn text-light dropdown-toggle rounded-0"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style="
                  background-color: #a78478 !important;
                  height: 40px;
                  font-size: 14.5px;
                "
              >
                Register or Sign in
              </button>
            </div>
            <hr style="stroke: #a78478" />
          </div>
        </div>
      </div>
    </nav>