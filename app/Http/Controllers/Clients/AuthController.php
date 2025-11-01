<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('clients.pages.register');
    }

    public function register(Request $request)
    {
        // Xác thực dữ liệu từ form đăng ký
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ], [
            'name.required' => 'Vui lòng nhập họ và tên.',
            'name.string' => 'Họ và tên không hợp lệ.',
            'name.min' => 'Họ và tên phải có ít nhất 3 ký tự.',

            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.string' => 'Email không hợp lệ.',
            'email.email' => 'Định dạng email không đúng.',
            'email.unique' => 'Email này đã được đăng ký.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu không hợp lệ.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        // Check if email exists
        $emailAlreadyExists = User::where('email', $request->email)->first();

        if($emailAlreadyExists) {
            if($emailAlreadyExists->isPending) {
                toastr()->error('Email này đã được đăng ký và đang chờ kích hoạt!');
                return redirect()->route('register');
            }

            return redirect()->route('register');
        }

        $token = Str::random(64);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'pending',
            'role_id' => 3,
            'activation_token' => $token,
        ]);

        Mail::to($request->email)->send(new ActivationMail($token,$user));

        toastr()->success('Đăng ký tài khoản thành công!. vui lòng check email để kích hoạt tài khoản');
        return redirect()->route('login');

    }

    public function showloginForm() {
        return view('clients.pages.login');
    }

    public function login(Request $request)
    {
        // Xác thực dữ liệu từ form đăng nhập
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Định dạng email không đúng.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'])) {
            if (in_array(Auth::user()->role->name,['customer'])) {
                $request->session()->regenerate();
                toastr()->success('Đăng nhập thành công');
                return redirect()->intended(route('home'));
            } else {
                Auth::logout();
                toastr()->warning('Bạn không có quyền truy cập vào tài khoản này.');
                return redirect()->back();
            }
        }

        toastr()->error('Thông tin đăng nhập không chính xác hoặc tài khoản chưa kích hoạt.');
        return redirect()->back();

    }

    public function activate($token) {
        $user = User::where('activation_token', $token)->first();

        if($user) {
            $user->status = 'active';
            $user->activation_token = null;
            $user->save();

            toastr()->success('Kích hoạt tài khoản thành công!');
            return redirect()->route('login');
        }

        toastr()->error('Token không hợp lệ hoặc đã hết hạn!');
        return redirect()->route('login');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        toastr()->success('Đăng xuất thành công!');
        return redirect()->route('login');

    }
}

