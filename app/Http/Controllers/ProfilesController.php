<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    /**
 * Show the application dashboard.
 *
 * @return \Illuminate\Contracts\Support\Renderable
 */
    public function index($user)
    {
        //dd($user); echos out the value /profile/blah = blah on the webpage.
        $user = User::findOrFail($user);
        return view('profiles.index', ['user' => $user,]);
    }
}
