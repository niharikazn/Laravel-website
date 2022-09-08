<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactt;
class ContacttControler extends Controller
{
    //
    public function store(Request $request)
    {
        $user = new Contactt();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->subject = $request->subject;
        $user->message = $request->message;
        $user->save();
        return redirect()->route('user.index')->with('success', ' Data has been stored successfully.');
    }
}
