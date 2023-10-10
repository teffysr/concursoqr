<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Prize;
use App\Models\Qr;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function winnerPage($id){
        $qr = Qr::find($id);
        if($qr){
            return view('winner_page', [
                'title' => '',
                'sponsor' => $qr,
            ]);
        }

        return view('404');
    }

    public function sponsorPage($id){
        $qr = Qr::find($id);
        if($qr) {
            return view('winner_page', [
                'title' => '',
                'sponsor' => $qr,
            ]);
        }
        return view('404');
    }
}
