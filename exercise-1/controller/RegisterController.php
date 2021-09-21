<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use model\User.php;

class RegisterController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register');
    }
    
    public function register()
    {
        $user = new User();
        $business->fill($request->all());
        $user->save();
        
        return redirect('/');
    }
}
