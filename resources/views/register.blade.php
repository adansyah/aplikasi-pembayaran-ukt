<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register - Rex Education</title>
    <link rel="icon" type="image/png" href="{{ asset('wisuda.png') }}">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#e0f0ff] min-h-screen flex items-center justify-center">

    <div
        class="flex flex-col lg:flex-row w-[90%] lg:w-[1000px] h-auto lg:h-[600px] rounded-[20px] overflow-hidden shadow-2xl bg-white">

        <!-- Left Panel -->
        <div class="bg-[#cce5ff] flex flex-col justify-center px-8 lg:px-12 py-10 lg:py-0 w-full lg:w-1/2">
            <h2 class="text-[#102263] font-bold text-3xl mb-6 text-center ">Register</h2>

            <form action="/register" method="post" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[#102263] font-semibold mb-1">Name</label>
                        <input type="text" name="name" placeholder="Enter Nama" required
                            oninvalid="this.setCustomValidity('Nama harus diisi')" oninput="this.setCustomValidity('')"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-[#102263] font-semibold mb-1">NIM</label>
                        <input type="text" name="nim" placeholder="Enter NIM" required
                            oninvalid="this.setCustomValidity('NIM harus diisi')"
                            oninput="this.setCustomValidity(''); this.value = this.value.replace(/[^0-9]/g, '')"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-[#102263] font-semibold mb-1">Email</label>
                    <input type="email" name="email" placeholder="Enter Email" required
                        oninvalid="this.setCustomValidity('Email harus diisi')" oninput="this.setCustomValidity('')"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <div>
                        <label class="block text-[#102263] font-semibold mb-1">Prodi</label>
                        <select name="prodi" required oninvalid="this.setCustomValidity('Prodi harus diisi')"
                            oninput="this.setCustomValidity('')"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                            <option value="">~~ Pilih Prodi ~~</option>
                            <option value="S1">~~ S1 ~~</option>
                            <option value="D3">~~ D3 ~~</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-[#102263] font-semibold mb-1">Fakultas</label>
                        <select name="fakultas" required oninvalid="this.setCustomValidity('Fakultas harus diisi')"
                            oninput="this.setCustomValidity('')"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                            <option value="">~~ Pilih Fakultas ~~</option>
                            <option value="Teknik Informatika">~~ Teknik Informatika ~~</option>
                            <option value="Komputerisasi Akuntansi">~~ Komputerisasi Akuntansi ~~</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-[#102263] font-semibold mb-1">Password</label>
                    <input type="password" name="password" placeholder="Enter Password" required
                        oninvalid="this.setCustomValidity('Password harus diisi')" oninput="this.setCustomValidity('')"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                </div>

                <div>
                    <label class="block text-[#102263] font-semibold mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" placeholder="Enter Password Confirmation"
                        required oninvalid="this.setCustomValidity('Password harus diisi')"
                        oninput="this.setCustomValidity('')"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-[#102263] focus:outline-none">
                </div>

                <button type="submit"
                    class="w-full bg-[#102263] text-white rounded-md py-2 font-semibold hover:bg-[#0b1a4a] transition duration-200">
                    Register
                </button>

                <div class="text-center text-sm ">
                    <a href="{{ route('login') }}" class="text-gray-700 hover:underline">Sudah punya akun?</a>
                </div>
            </form>
        </div>

        <!-- Right Panel -->
        <div
            class="hidden md:flex bg-[#102263] text-white  flex-col justify-center items-center px-8 py-10 w-full lg:w-1/2">
            <h2 class="text-[#cce5ff] font-bold text-4xl lg:text-5xl text-center mb-2 leading-tight">
                Welcome to<br>Rex – Education
            </h2>
            <p class="text-white/70 text-center text-base mb-6">Don't be afraid to fail. Be afraid of not trying</p>
            <div class="w-full flex justify-center">
                <img src="{{ asset('wisuda.png') }}" alt="Characters" loading="lazy" class="max-w-[200px]">
            </div>
        </div>

    </div>

</body>

</html>
