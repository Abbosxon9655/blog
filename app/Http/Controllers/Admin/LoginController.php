<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function index()
    {
        $userinfos = Login::orderBy('id', 'DESC')->get();

        return view('admin.logins.index', compact('userinfos'));
    }

    public function show(Login $userinfo, $id)
    {
        $userinfo = Login::find($id);

        return view('admin.logins.show', compact('userinfo'));
    }

    public function destroy(Login $userinfo, $id)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'logins', $user, $userinfo));

        Login::find($id)->delete();

        return redirect()->route('admin.logins.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }

}
