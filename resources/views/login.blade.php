<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Rex Education</title>
    <link rel="icon" type="image/png" href="{{ asset('wisuda.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f0ff;
            margin: 0;
            padding: 0;
        }

        .login-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 1000px;
            height: 600px;
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
        }

        .login-left {
            background-color: #cce5ff;
            padding: 50px;
            flex: 1;
        }

        .login-right {
            background-color: #102263;
            color: #fff;
            flex: 1;
            padding: 50px;
            position: relative;
        }




        .btn-login {
            background-color: #102263;
            color: #fff;
            border-radius: 8px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-login:hover {
            background-color: #0b1a4a;
        }

        .login-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #102263;
        }

        .forgot {
            font-size: 0.9rem;
            color: #555;
            margin-top: 10px;
        }

        .forgot a {
            color: #102263;
            text-decoration: none;
        }

        .illustration {
            /* position: relative; */
            /* top: 100px; */
            bottom: 10px;
            width: 100%;
            text-align: center;
        }

        .illustration img {
            max-width: 200px;
        }

        a.btn-google:hover {
            background-color: #f8f9fa;
            color: #333;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container login-container">
        <div class="login-card d-flex">
            <!-- Left Panel -->
            <div class="login-left d-flex flex-column justify-content-center">
                <h2 class="login-title mb-5 m-auto" style="font-weight:bold">Login</h2>
                @if (session('status'))
                    <p style="color: green;">{{ session('status') }}</p>
                @endif

                @error('nim')
                    <ul style="color: red">
                        <li>{{ $message }}</li>
                    </ul>
                @enderror

                @error('password')
                    <ul style="color: red">
                        <li>{{ $message }}</li>
                    </ul>
                @enderror

                <form action="/login" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="nim" class="form-label" style="color: #102263; font-weight: 600">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim" placeholder="Enter NIM"
                            required oninvalid="this.setCustomValidity('NIM harus diisi')"
                            oninput="this.setCustomValidity(''); this.value = this.value.replace(/[^0-9]/g, '')">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"
                            style="color: #102263;font-weight:600;">Password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter Password" required
                            oninvalid="this.setCustomValidity('Password harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <div class="forgot
                            mb-4">
                        <a href="/forgot-password">Lupa Sandi?</a>
                    </div>
                    <button type="submit" class="btn btn-login w-100 mb-2">Login</button>
                    <a href="{{ url('/auth/google') }}"
                        class="btn btn-google mb-2 w-100 d-flex align-items-center justify-content-center"
                        style="border: 1px solid #ddd; background-color: #fff; color: #555; font-weight: 500; border-radius: 8px;">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google Logo"
                            style="width: 20px; margin-right: 10px;">
                        Login dengan Google
                    </a>

                    <div class="mb-4 text-center" style="font-size: 0.9rem;margin-top: 10px">
                        <a href="/register" style="text-decoration: none">Belum punya akun?</a>
                    </div>

                </form>
            </div>

            <!-- Right Panel -->
            <div class="login-right d-flex flex-column justify-content-center">
                <h2 class="fw-bold mt-5 mb-0" style="color: #cce5ff;font-size: 3rem">Welcome to<br> Rex – Education
                </h2>
                <p class="text-white-50 mb-0" style="font-size: 1rem">Don't be afraid to fail. Be afraid of not trying
                </p>
                <div class="illustration">
                    <img src="{{ asset('wisuda.png') }}" alt="Characters" loading="lazy" />
                </div>
            </div>
        </div>
    </div>

</body>

</html>
