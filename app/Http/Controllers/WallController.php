<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class WallController extends Controller
{

    /**
     * Display dashboard view with messages
     */
    public function dashboard(): View
    {
        $messages = Message::orderByDesc('created_at')->paginate(3);

        return view('dashboard',
                ['messages'=>$messages]);
    }

    /**
     * Insert a new message in DB
     */
    public function write(Request $request): RedirectResponse
    {
        $message = new Message();
        $message->author = Auth::id();
        $message->message = $request->message;
        $message->save();

        return Redirect::route('dashboard');
    }

    /**
     * Display edit form for a given message
     */
    public function editMessageForm(Request $request): View
    {
        $message = Message::findOrFail($request->id);

        return view('editMessageForm',
                ['message'=>$message]);
    }

    /**
     * Save a message in edtion context
     */
    public function updateMessage(Request $request): RedirectResponse
    {
        $message = Message::findOrFail($request->id);
        abort_if($message->author != Auth::id(), 403);
        $message->message = $request->message;
        $message->save();

        return Redirect::route('dashboard')
            ->with('status', 'Message updated!');
    }

    /**
     * Delete a message from  DB
     */
    public function delete(Request $request): RedirectResponse
    {
        $message = Message::findOrFail($request->id);
        abort_if($message->author != Auth::id(), 403);
        $message->delete();

        return Redirect::route('dashboard');
    }
    



}
