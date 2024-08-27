<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = message::all();
        return view('dashboard.messages.index', compact('messages'));
    }

    public function create()
    {
        return view('dashboard.messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
        ]);

        return redirect()->route('dashboard.messages.index')->with('success', 'Message created successfully.');
    }


    public function destroy($id)
    {
        $message = message::findOrFail($id);
        $message->delete();

        return redirect()->route('dashboard.messages.index')->with('success', 'Message deleted successfully.');
    }
}