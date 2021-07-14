<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsersRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function form()
    {
        return view('form');
    }

    public function store(StoreUsersRequest $request)
    {
        $users = new Users();
        $users->inum = $request->inum;
        $users->firstName = $request->firstName;
        $users->lastName = $request->lastName;
        $users->phone = $request->phone;
        $users->gender = $request->gender;
        $users->save();
        return 'Success';


    }
}
