<div class="container-fluid p-0 mb-3 ">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">My Blog</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent"
                    data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="{{ route('posts.index')}}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="#">Users</a>
                    </li>

                </ul>
                <div class="d-flex">
                    <form class="d-flex" action="/post" method="post" >
                        @csrf
                        <input class="form-control me-2" type="search" name="search" placeholder="Search a Post By Slug" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  @guest
                        <a href="{{ route('register') }}" class="btn btn-outline-success" type="submit">SignUp</a>
                    @else
                        <span class=" nav-item dropdown">
                           @auth()

                                <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                   role="button">
                                {{\Illuminate\Support\Facades\Auth::user()->email}}
                            </a>
                           @endauth
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{ route('admin_controller.index') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('posts.create')}}">New Post</a></li>
                                <li><a class="dropdown-item" href="{{ route('categories.create') }}" >Add New Category</a></li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                 <button class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                                </form>

                                @guest()
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <form action="{{ route('login') }}" method="post">
                                    @csrf
                                 <button class="dropdown-item">Sign In</button>
                                </form>
                                @endguest
                            </ul>
                        </span>
                    @endguest

                </div>
            </div>
        </div>
    </nav>
</div>
