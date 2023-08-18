<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="overflow-x: hidden;">
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-6">
          <div class="card rounded-3 text-black">
            <div class="card-body p-md-5 mx-md-4">
              <div class="text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                  style="width: 185px;" alt="logo">
                <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
              </div>

              <form method="post" action="/user/login"> 
              @csrf
                <p>Please login to your account</p>

                <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" class="form-control" name="email" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control" name="password" />
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                  <input type="submit" class = "btn btn-primary" name="submit" value="Log in">
                </div>

                <div class="text-center">
                  <p>Don't have an account? <a href="/register" class="btn btn-link">Register</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<style>
  .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
  }

  @media (min-width: 768px) {
    .gradient-form {
      height: 100vh !important;
    }
  }

  @media (min-width: 769px) {
    .gradient-custom-2 {
      border-top-right-radius: .3rem;
      border-bottom-right-radius: .3rem;
    }
  }
</style>

</html>
