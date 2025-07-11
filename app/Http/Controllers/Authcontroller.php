<?php

namespace App\Http\Controllers;

use App\Models\User;
use Pest\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

class Authcontroller extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ], [
            'nim.required' => 'NIM harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);

        $user = User::where('nim', $request->nim)->first();

        if (!$user) {
            return back()->withErrors(['nim' => 'NIM tidak ditemukan'])->withInput();
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah'])->withInput();
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }


    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'nim' => 'required|unique:users,nim',
            'prodi' => 'required|string',
            'fakultas' => 'required|string',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'nim.required' => 'NIM harus diisi.',
            'nim.unique' => 'NIM sudah digunakan.',
            'prodi.required' => 'Program studi harus diisi.',
            'fakultas.required' => 'Fakultas harus diisi.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
        ]);

        Auth::login($user);

        return redirect()->route('login')->with('status', 'Registrasi berhasil. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function showForgot()
    {
        return view('forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $token = Str::random(64);
        DB::table('password_resets')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        Mail::raw("Klik link ini untuk reset password: " . url("/reset-password/{$token}"), function ($message) use ($request) {
            $message->to($request->email)->subject('Reset Password');
        });

        return back()->with('status', 'Link reset password telah dikirim ke email Anda.');
    }

    public function showResetForm($token)
    {
        return view('reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $reset = DB::table('password_resets')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$reset) {
            return back()->withErrors(['email' => 'Token tidak valid atau email tidak cocok.']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect('/')->with('status', 'Password berhasil direset.');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Cek apakah user dengan email ini sudah ada
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            return redirect()->route('login')->with('status', 'Akun belum terdaftar. Silakan daftar manual terlebih dahulu.');
        }

        // Login user
        Auth::login($user);

        return redirect('/dashboard');
    }
}
