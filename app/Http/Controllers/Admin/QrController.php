<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Qr;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class QrController extends Controller
{
    public function show($id){
        $id = base64_decode($id);
        $qr = Qr::find($id);
        if($qr) {
            $instagram = [
                'Agencia Acevedo' => ['instagram' => '', 'web' => ''],
                'Pago Linea' => ['instagram' => '@pagolinea', 'web' => 'https://www.instagram.com/pagolinea'],
                'Merope' => ['instagram' => '@merope.ba', 'web' => 'https://www.instagram.com/merope.ba/'],
                'Baru' => ['instagram' => '@barugastropub', 'web' => 'https://www.instagram.com/barugastropub/'],
                'Market' => ['instagram' => '@pagotienda.market', 'web' => 'https://www.instagram.com/pagotienda.market/'],
                'Bitconf' => ['instagram' => '@labitconf', 'web' => 'https://www.instagram.com/labitconf/'],
                'La Puntita' => ['instagram' => '@lapuntita_baires', 'web' => 'https://www.instagram.com/lapuntita_baires/'],
            ];

            return \response()->json([
                'amount' => $qr->amount,
                'image' => $qr->image,
                'web' => $instagram[$qr->sponsor]['web'],
                'instagram' => $instagram[$qr->sponsor]['instagram'],
                'sponsor' => $qr->sponsor]);
        }
        return \response()->json(['message' => 'Qr no encontrado']);
    }

    public function winner_qr_generate($id){
        $qr = Qr::find($id);
        if($qr) {
            $link = env('LANDING_QR') . '/concurso-qr.html#' . base64_encode($id);
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
