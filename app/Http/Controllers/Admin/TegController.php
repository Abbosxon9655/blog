<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Teg;
use Illuminate\Http\Request;

class TegController extends Controller
{  public function index()
    {
        $tegs = Teg::orDerby('id', 'DESC')->get();

        return view('admin.tegs.index', compact('tegs'));
    }

    public function create()
    {
        $tegs = Teg::all();

        return view('admin.tegs.create', compact('tegs'));
    }

    public function store(Request $request, Teg $teg)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('create', 'tegs', $user, $teg));

        Teg::create($request->all());

        return redirect(route('admin.tegs.index'))->with('success', 'Ma`lumot qo`shildi');
    }

    public function show($id)
    {
        $teg = Teg::find($id);

        return view('admin.tegs.show', compact('teg'));
    }

    public function edit($id)
    {
        $teg = Teg::find($id);

        return view('admin.tegs.edit', compact('teg'));
    }

    public function update(Request $request, Teg $teg)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('edit', 'tegs', $user, $teg));
        $requestData = $request->all();

        // Teg::find($id)->update($request->all());
        $teg->update($requestData);

        return redirect()->route('admin.tegs.index')->with('success', 'Ma`lumot mavaffaqiyatli o`zgartirildi');
    }

    public function destroy(Teg $teg)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('delete', 'tegs', $user, $teg));

        $teg->delete();
     
        return redirect(route('admin.tegs.index'))->with('danger', 'Ma`lumot ochirildi');
    }
}
