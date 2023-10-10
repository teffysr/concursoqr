@extends('layouts.qr')

@section('content')
    {!! QrCode::size(300)->generate($link); !!}
@endsection
