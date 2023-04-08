<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvnController extends Controller
{
    public function index()
    {
        return view('evn_change.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'app_name' => 'required|min:3',
            'mail_username' => 'required|email'
        ]);
        // đổi tên APP_NAME, MAIL_USERNAME trong file .env thành tên app_name, mail_username
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'APP_NAME=' . env('APP_NAME'),
                'APP_NAME=' . $request->app_name,
                file_get_contents($path)
            ));
            file_put_contents($path, str_replace(
                'MAIL_USERNAME=' . env('MAIL_USERNAME'),
                'MAIL_USERNAME=' . $request->mail_username,
                file_get_contents($path)
            ));
        }
        return redirect()->back()->with('success', 'Đổi tên thành công');
    }
}
