<?php
/**
 * Created by PhpStorm.
 * User: victorximenis
 * Date: 05/10/16
 * Time: 12:48
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::all();
        return view('users.list', ['users' => $users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return redirect('/usuarios')->with('success', 'Usuário cadastrado com sucesso!');
    }

}
