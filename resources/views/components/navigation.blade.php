<div class="navbar-response">
    <nav class="navbar fixed-top" style="background-color: #0058b1;">
        <div class="container-fluid">
        <h3 class="cms">CMS Blog</h3>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
            <div class="offcanvas-header">
            <h3>CMS Blog</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/admin/dashboard') }}"><i class="bi bi-house-door"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/blog/create') }}" class="nav-link"><i class="bi bi-stickies"></i>Create Blog</a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/blog') }}" class="nav-link"><i class="bi bi-book"></i>List Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/users/create') }}" class="nav-link"><i class="bi bi-person-bounding-box"></i>Create User</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/users') }}" class="nav-link"><i class="bi bi-person-lines-fill"></i>List User</a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/support') }}" class="nav-link"><i class="bi bi-ticket"></i>Support</a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/settings/create') }}" class="nav-link"><i class="bi bi-gear"></i>Settings</a>
                </li>
                <li class="nav-item">
                <a href="{{ url('/admin') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </nav>        
</div>