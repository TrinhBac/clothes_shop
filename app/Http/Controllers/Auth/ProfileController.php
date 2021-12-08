<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;


class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(Request $request)
    {
        $request->flash();
        $validator = Validator::make($request->all(),
            [
                'name'   => 'nullable|string|min:2|max:50',
                'phone'   => 'nullable|numeric|max:99999999999',
                'address'   => 'nullable|string|max:255',
            ]
        );

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        User::find(Auth::id())->update($request->all());

        return view('welcome');
    }
}