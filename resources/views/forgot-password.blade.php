<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - Rex Education</title>
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


        .form-control {
            /* background-color:; */
            /* border: none; */
            /* border-bottom: 1px solid #ccc;*/
            /* border-radius: 0; */
            /* color: #000; */

        }

        /* .form-control:focus {
            border-bottom: 2px solid #003366;
            box-shadow: none;
        } */

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
                {{-- <h2 class="login-title text-center" style="font-weight:bold">Login</h2> --}}
                @if (session('status'))
                    <p style="color: green;">{{ session('status') }}</p>
                @endif
                @if ($errors->any())
                    <ul style="color: red;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif


                <form action="/forgot-password" method="post" class="mt-2">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: #102263;font-weight:600;">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter email" required oninvalid="this.setCustomValidity('email harus diisi')"
                            oninput="this.setCustomValidity('')">
                    </div>
                    <button type="submit" class="btn btn-login w-100 mb-2">Kirim Link Reset</button>
                    <div class="mb-4 text-center" style="font-size: 0.9rem;margin-top: 10px">
                        <a href="{{ route('login') }}" style="text-decoration: none">Kembali ke Login</a>
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
