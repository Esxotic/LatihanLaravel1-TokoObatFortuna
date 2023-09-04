<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sistem Informasi Apotek Fortuna - Login</title>

    <!-- Custom fonts for this template-->
    <link
      href="css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/Untitled.ico" type="image/x-icon" />
  </head>

  <body class="bg-gradient-primary">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-3">
                    <div class="text-center">
                      <img
                        src="img/Untitled.ico"
                        alt=""
                        class="img-circle logo"
                      />
                      <h1 class="h4 text-gray-900 mb-4">
                        Sistem Informasi Apotek Fortuna
                      </h1>
                    </div>
                    <form class="user" method="POST" action="/login">
                        @csrf
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          class="form-control form-control-user @error('email')
                              is-invalid
                          @enderror"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Enter Email Address..."
                          value="{{ old('email') }}">
                         @error('email')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control form-control-user @error('password')
                              is-invalid
                          @enderror"
                          id="exampleInputPassword"
                          placeholder="Password"
                         name="password">
                         @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="customCheck"
                          />
                          <label class="custom-control-label" for="customCheck"
                            >Remember Me</label
                          >
                        </div>
                      </div>
                      <button
                        class="btn btn-primary btn-user btn-block"
                        type="submit"
                      >
                        Login
                      </button>
                    </form>
                    <hr />
                    <div class="text-center">
                      <a class="small" href="/register"
                        >Don't have an account? Registration!</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="jquery/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
