<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - Rex Education</title>
    <link rel="icon" type="image/png" href="{{ asset('wisuda.png') }}">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#e0f0ff] flex items-center justify-center min-h-screen">

    <div
        class="w-full max-w-[1000px] h-auto md:h-[600px] flex flex-col md:flex-row rounded-2xl overflow-hidden shadow-2xl bg-white">

        {{-- Left Panel --}}
        <div class="flex-1 bg-[#cce5ff] p-8 md:p-12 flex flex-col justify-center">
            @if (session('status'))
                <p class="text-green-600 mb-2">{{ session('status') }}</p>
            @endif

            @if ($errors->any())
                <ul class="text-red-600 mb-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="/forgot-password" method="POST" class="mt-2 space-y-5">
                @csrf
                <div>
                    <label for="email" class="block text-[#102263] font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter email" required
                        oninvalid="this.setCustomValidity('email harus diisi')" oninput="this.setCustomValidity('')"
                        class="w-full border border-gray-300 focus:border-[#102263] focus:ring-[#102263] rounded-lg p-3 outline-none transition">
                </div>

                <button type="submit"
                    class="w-full bg-[#102263] hover:bg-[#0b1a4a] text-white rounded-lg py-3 font-semibold transition">
                    Kirim Link Reset
                </button>

                <div class="text-center text-sm mt-2">
                    <a href="{{ route('login') }}" class="text-[#102263] hover:underline">Kembali ke Login</a>
                </div>
            </form>
        </div>

        {{-- Right Panel --}}
        <div class="hidden md:flex flex-1 bg-[#102263] text-white p-8 md:p-12  flex-col justify-center relative">
            <h2 class="text-[#cce5ff] font-bold text-4xl md:text-5xl leading-tight mb-2">Welcome to<br> Rex – Education
            </h2>
            <p class="text-white/70 text-base mb-6">Don't be afraid to fail. Be afraid of not trying.</p>
            <div class="w-full flex justify-center mt-auto">
                <img src="{{ asset('wisuda.png') }}" alt="Characters" class="w-40 md:w-52" loading="lazy">
            </div>
        </div>

    </div>

</body>

</html>
