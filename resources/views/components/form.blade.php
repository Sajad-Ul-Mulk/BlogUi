<div class="container">
    <div class="row justify center">

        <div class="row">
            <div class="row text-center mb-3">
                <h3>SignUp Form</h3>
            </div>
            <form class="form-control" action="#" method="get" enctype="multipart/form-data">
                <div class="col-12 mb-3">
                    <label for="name" class="form-label">UserName</label>
                    <input type="text" class="form-control" id="name" name="username" required placeholder="Username">
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email address">
                    </div>
                    <div class=" col-6 mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password" required placeholder="Password">
                    </div>

                </div>
                <div class="row">
                    <div class="col-4 mb-3">
                        <label for="formFile" class="form-label">Upload Avatar</label>
                        <input class="form-control" type="file" name="cover" id="formFile">
                    </div>

                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="mb-3 ">
                        <button class="btn btn-primary justify-end" type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>
