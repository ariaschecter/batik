<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.user.index', compact('users'));
    }

    public function login_view() {
        return view('admin.login');
    }

    public function create() {
        return view('admin.user.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        $user = $request->only(['name', 'email']);
        $user['password'] = bcrypt($request->password);
        User::create($user);

        $notification = [
            'message' => 'User created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('home.user.index')->with($notification);
    }



    public function destroy(User $user) {
        $user->delete();
        $notification = [
            'message' => 'User deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function login_store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $notification = [
                'message' => 'Login Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->intended('dashboard')->with($notification);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
