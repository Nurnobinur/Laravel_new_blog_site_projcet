<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('tamplate/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('tamplate/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-sm-block bg-register-image">

                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                @if (session("content"))
                                    <div class="alert alert-success" role="alert">
                                        {{session("content")}}
                                    </div>
                                @endif
                            </div>
                            <form class="user" action="{{route('userstoredata')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">User Name:</label>
                                    @error("name")
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>ALERT!</strong> {{$message}}</strong>
                                        </div>
                                    @enderror
                                    <input type="text" value="{{old('name')}}" name="name" class="form-control form-control-user @error("name")
                                        is-invalid
                                    @enderror" id="name"
                                        placeholder="User Name.....">
                                </div>
                                <div class="form-group">
                                    <label for="email">User Email:</label>
                                    @error("email")
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>ALERT!</strong> {{$message}}</strong>
                                        </div>
                                    @enderror
                                    <input value="{{old('email')}}" type="email" name="email" class="form-control form-control-user @error('email')
                                        is-invalid
                                    @enderror" id="email"
                                        placeholder="User Email......">
                                </div>
                                <div class="form-group">
                                    <div class=" mb-3 mb-sm-0">
                                        <label for="password">Email Password:</label>
                                        @error("password")
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>ALERT!</strong> {{$message}}</strong>
                                            </div>
                                        @enderror
                                        <input type="password" name="password" value="{{old('password')}}" class="form-control form-control-user @error('password')
                                           is-invalid
                                        @enderror"
                                            id="password" placeholder="Email Password......">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="photo">User Photo:</label>
                                    <input name="photo" type="file" class="form-control form-control-user"
                                        id="photo" placeholder="User Photo...">
                                </div>
                                <div class="form-group">
                                    <label for="address">User Address:</label>
                                    @error("address")
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>ALERT!</strong> {{$message}}</strong>
                                        </div>
                                    @enderror
                                    <input name="address" value="{{old('address')}}" type="text" class="form-control form-control-user @error('address')
                                       is-invalid
                                    @enderror"
                                        id="address" placeholder="User Address.....">
                                </div>
                                <div class="form-group">
                                    <label for="phone">User Phone:</label>
                                    @error("phone")
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>ALERT!</strong> {{$message}}</strong>
                                        </div>
                                    @enderror
                                    <input value="{{old('phone')}}" name="phone" type="text" class="form-control form-control-user @error("address")
                                        is-invalid
                                    @enderror"
                                        id="phone" placeholder="User Phone.....">
                                </div>
                                {{-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr> --}}
                                <input type="reset" class="btn btn-danger btn-lg mb-3" value="Reset Now">
                                <input type="submit" class="btn btn-primary btn-lg mb-3" value="Register Now">
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
