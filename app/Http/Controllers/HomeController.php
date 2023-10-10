<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use App\Models\Qr;
use Illuminate\Http\Request;

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
        return view('admin/dashboard');
    }

    public function qrTrafic()
    {
        return view('admin/qr_trafic', [
            'qrTrafic' => Qr::where('is_winner',false)->get()
        ]);
    }

    public function qrWinner()
    {
        return view('admin/qr_winner', [
            'qrWinner' => Qr::where('is_winner',true)->get(),
        ]);
    }
}
