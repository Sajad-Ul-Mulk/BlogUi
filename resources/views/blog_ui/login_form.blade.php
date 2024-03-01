<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
</head>
<body>
<div class="container-fluid p-0 mb-3 ">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.blade.php">My Blog</a>
            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler" data-bs-target="#navbarSupportedContent"
                    data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="#">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a aria-current="page" class="nav-link active" href="#">Users</a>
                    </li>

                </ul>
                <div class="d-flex">
                    <span class=" nav-item dropdown">
                        <a aria-expanded="false" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                           role="button">
                            Abc@gmail.com
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dashboard.blade.php">Dashboard</a></li>
                            <li><a class="dropdown-item" href="index.blade.php">Logout</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="login_form.html">SignIn</a></li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </nav>
</div> <!-- navbar-->

<div class="container">
    <div class="row justify center">
       <div class="row">
           <div class="row text-center mb-3">
               <h3>Welcome Back</h3>
           </div>
            <form class="form-control" action="#" method="get" enctype="multipart/form-data">
                    <div class="col-6 mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email address">
                    </div>
                    <div class=" col-6 mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password" required placeholder="Password">
                    </div>

                <div class="">
                    <div class="col-3 ">
                        <button class="btn btn-primary justify-end" type="submit">Login</button>
                    </div>
                </div>


            </form>
       </div>

    </div>
</div>

<div class="container-fluid p-0">
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">© 2021 Company, Inc</p>
        </footer>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
