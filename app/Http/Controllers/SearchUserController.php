<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\User;

class SearchUserController extends Controller
{    
    public function userList(Request $request)
    {
        if ($request->has('search')) {
            $users = User::search($request->search)->paginate(6);
        } else {
            $users = User::paginate(6);
        }

        return view('search', compact('users'));
    }
}
