<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Mail\ActivationMail;
use App\Models\User;
use Illuminate\Http\Request;
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
        return redirect()->back();

    }

    public function activate($token) {
        $user = User::where('activation_token', $token)->first();

        if($user) {
            $user->status = 'active';
            $user->activation_token = null;
            $user->save();

            toastr()->success('Kích hoạt tài khoản thành công!');
            return redirect()->back();
        }

        toastr()->error('Token không hợp lệ hoặc đã hết hạn!');
        return redirect()->back();
    }
}

