@extends('app')

@section('title', 'Welcome')

@section('content')
    @include('sweetalert::alert')
    
    <style>
       
        .container1 {
            display: flex;
            align-items: center;
            justify-content: center;
            /* min-height: 100vh; */
        }
        .login-box {
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            max-width: 400px;
            width: 100%;
            background: white;
            padding: 20px;
        }
        .input-group-text {
            background: #4c51bf;
            color: #fff;
            border-radius: 0 10px 10px 0;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            background: #6b46c1;
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background: #553c9a;
        }
    </style>

    <div class="container1">
        <div class="login-box">
            <div class="text-center mb-3">
                <h2 class="text-dark">Welcome Back!</h2>
                <p class="text-muted">Sign in to continue</p>
            </div>
            <form class="needs-validation" novalidate action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
                <div class="text-center mt-3">
                    <a href="/register" class="text-primary">Register a new account</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
