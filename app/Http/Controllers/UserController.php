<?php
/**
 * Created by PhpStorm.
 * User: victorximenis
 * Date: 05/10/16
 * Time: 12:48
 */

namespace App\Http\Controllers;


use App\User;

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

    public function store() {
        
    }

}
