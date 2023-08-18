<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-4">
                            <p class="text-center h4 fw-bold mb-4">Sign up</p>
                            <form method="post" action="/user/signup">
                                @csrf

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-group" role="group" aria-label="Authentication Buttons">
                                    <input type="submit" name="submit" value="Register" class="btn btn-primary">
                                    </div>
                                        <a href="/" class="btn btn-secondary ms-3">Login</a>
                                    </div>
                                </div>
                            
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>