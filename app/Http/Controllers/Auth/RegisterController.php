<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function store(Request $request){

        if ($request->isMethod('post')) {
            $username = $request->input('username');
            $mail = $request->input('mail');
            $password = $request->input('password');

        User::create([
            'username' => $username,
            'mail' => $mail,
            'password' => bcrypt($password),
        ]);

        return redirect('added')->with('username', $username);
  }

  return view('auth.register');
}

    public function added(){
        return view('auth.added');
    }
}
