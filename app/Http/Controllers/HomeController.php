<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Record;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dutyOn()
    {
        $id = Auth::user()->id;

        $record = new Record;
        $record->user_id = $id;
        $record->note = "上班";
        $record->save();

        return redirect()->route('home');
    }

    public function dutyOff()
    {
        $id = Auth::user()->id;

        $record = new Record;
        $record->user_id = $id;
        $record->note = "下班";
        $record->save();

        return redirect()->route('home');
    }
}
