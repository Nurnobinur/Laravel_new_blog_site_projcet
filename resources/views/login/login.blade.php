<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield("title")</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('tamplate/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    <div class="container mt-3">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    @if (session("message"))
                                        <div class="alert alert-danger">{{session("message")}}</div>
                                    @endif
                                    <form class="user" action="{{url('loginstoredata')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Enter Email</label>
                                            @error("email")
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <input type="email" name="email" class="form-control @error("email")
                                                is-invalid
                                            @enderror"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email......">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Password:</label>
                                            @error("password")
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <input name="password" type="password" class="form-control @error("password")
                                                is-invalid
                                            @enderror"
                                                id="password" placeholder="write email Password......">
                                        </div>
                                        <input class="btn btn-success btn-md" type="submit" value="Submit">

                                    </form>
                                    
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{url('adduser')}}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@extends("layout.footer")

