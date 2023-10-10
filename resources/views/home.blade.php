@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Qr</div>
                    <div class="card-body text-center">
                        <a class="btn btn-primary" href="/qr-trafic" role="button">Qr de Tráfico</a>
                        <a class="btn btn-primary" href="/qr-winner" role="button">Qr Ganadores</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
