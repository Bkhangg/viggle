<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('clients.pages.account',compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'ltn__name'          => ['required', 'string', 'max:255'],
            'ltn__phone_number'  => ['nullable', 'string', 'max:15'],
            'ltn__address'       => ['nullable', 'string', 'max:255'],
            'avatar'             => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif', 'max:2048'],
        ]);

        $user = Auth::user();

        // ✅ Xử lý upload avatar (nếu có)
        if ($request->hasFile('avatar')) {
            // Xóa ảnh cũ nếu tồn tại
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Lưu ảnh mới
            $file = $request->file('avatar');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $avatarPath = $file->storeAs('uploads/users', $filename, 'public');
            $user->avatar = $avatarPath;
        }

        // ✅ Cập nhật thông tin khác (kể cả khi không upload ảnh)
        $user->name = $request->input('ltn__name');
        $user->phone_number = $request->input('ltn__phone_number');
        $user->address = $request->input('ltn__address');
        $user->save();

        // ✅ Trả về JSON response
        return response()->json([
            'success'     => true,
            'message'     => 'Cập nhật thông tin thành công!',
            'avatar'  => asset('storage/'. $user->avatar)
        ]);
    }
}
