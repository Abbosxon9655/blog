<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/admin/assets/img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link "><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>






                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.categories.index') }}" class="dropdown-item">Categories</a>
                            <a href="{{ route('admin.posts.index') }}" class="dropdown-item">Posts</a>
                            <a href="{{ route('admin.tegs.index') }}" class="dropdown-item">Tegs</a>
                            <a href="#" class="dropdown-item">Posts teg</a>
                        </div>






                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('admin.messages.index') }}" class="dropdown-item">Messages</a>
                            <a href="{{ route('admin.audits.index') }}" class="dropdown-item">Audits</a>
                            <a href="{{ route('admin.logins.index') }}" class="dropdown-item">Logins</a>
                        </div>
                    </div>

            {{-- <a href="{{ route('admin.categories.index') }}" class="nav-item nav-link @yield('categories')"><i class="fa fa-th me-2"></i>Categories</a>
            <a href="{{ route('admin.posts.index') }}" class="nav-item nav-link @yield('posts')"><i class="fa fa-keyboard me-2"></i>Posts</a>
            <a href="{{ route('admin.messages.index') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Messages</a>
            <a href="{{ route('admin.logins.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>logins</a>
            <a href="{{ route('admin.audits.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>audits</a>
            <a href="{{ route('admin.post_tegs.index') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>post_teg</a>
            <div class="nav-item dropdown"> --}}


           
            



    
                </div>

            </div>
        </div>
    </nav>
</div>