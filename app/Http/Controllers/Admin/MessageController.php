<?php

namespace App\Http\Controllers\Admin;

use App\Events\AuditEvent;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('id', 'DESC')->get();

        return view('admin.messages.index', compact('messages'));
    }

    public function show($id)
    {
        $message = Message::find($id);

        Message::find($id)->update(['status' => 1]);

        return view('admin.messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $user = auth()->user()->name;
        event(new AuditEvent('create', 'messages', $user, $message));

        // Message::find($id)->delete();
        $message->delete();

        return redirect()->route('admin.messages.index')->with('danger', 'Malumot mavaffaqiyatli ochirildi');
    }
}
