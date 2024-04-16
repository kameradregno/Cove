<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px; height: 700px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="/frontend/images/logo.png" class="mx-3" width="40" height="40">
        <use xlink:href="{{ url('/') }}"></use>
        </img>
    </a>
    <hr />
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link text-white" aria-current="page">
                <i class="bx bx-home text-light mx-2" style="font-size: 20px; vertical-align:-2px"></i>
                Beranda
            </a>
        </li>
        <li>
            <a href="{{ url('dashboard') }}" class="nav-link text-white">
                <i class="bx bxs-dashboard text-light mx-2" style="font-size: 20px; vertical-align:-2px"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ url('customer') }}" class="nav-link text-white">
                <i class="bx bx-user text-light mx-2" style="font-size: 20px; vertical-align:-2px"></i>
                Customer
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bx bxs-report text-light mx-2" style="font-size: 20px; vertical-align:-2px"></i>
                Laporan
            </a>
        </li>
    </ul>
    <hr />
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2" />
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li>
                <a class="dropdown-item" href="#">New project...</a>
            </li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
