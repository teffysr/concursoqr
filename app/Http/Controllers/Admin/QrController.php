<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Qr;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QrController extends Controller
{
    public function winner_qr_generate($id){
        $qr = Qr::find($id);
        if($qr) {
            $link = env('LANDING_QR', 'http://127.0.0.1:8000') . '/winner-page/' . $id;
            return view('qr', ['link' => $link, 'sponsor' => $qr]);
        }
        return view('404');
    }

    public function sponsor_qr_generate($id){
        $qr = Qr::find($id);
        if($qr){
            $link = $qr->web;
            return view('qr', ['link' => $link, 'sponsor' => $qr]);
        }
        return view('404');
    }

    public function print_qr($id){
        $qr = Qr::find($id);
        $link = $qr->web;
        $html = view('qr', ['link' => $link, 'sponsor' => $qr]);
        $pdf = Pdf::loadView($html);
        return $pdf->download('pruebapdf.pdf');
    }

    public function update($id, Request $request, Response $response)
    {
        $data = [
            'amount' => $request->get('amount'),
            'available' => $request->get('available'),
        ];

        $qr = Qr::find($id);
        if ($qr) {
            $qr->update($data);
        }

        return back()->withInput()->with('status', 'Se ha modificado el Qr con éxito');

    }
}
