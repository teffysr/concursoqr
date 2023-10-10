@extends('layouts.admin')

@section('main')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">

            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">


                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Concurso QR
                        </h1>
                        <!--end::Title-->

                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">

                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <div class="table-responsive">
                            <div class="card">
                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                @enderror
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="card-body text-center">
                                    <table class="table">
                                        <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Patrocinador</th>
                                            <th scope="col">Premio</th>
                                            <th scope="col">Disponibilidad</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($qrTrafic as $qr)
                                            <tr>
                                                <form class="row g-3 justify-content-center" method="POST" action="/admin/qr/update/{{ $qr->id }}">
                                                    @csrf
                                                    <th scope="row">{{ $qr->sponsor }}</th>
                                                    <td>
                                                        Sin Premio
                                                        <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="amount" value="{{ $qr->amount }}" id="amount" placeholder="1000">
                                                    </td>
                                                    <td>
                                                        <select class="form-select" aria-label="Default select example" name="available">
                                                            <option value="1" {{ in_array( $qr->available,[true])?'selected':'' }}>Disponible</option>
                                                            <option value="0" {{ in_array( $qr->available,[false])?'selected':'' }}>No Disponible</option>
                                                        </select>
                                                    </td>
                                                    <td><button type="submit" class="btn btn-primary mb-3">Actualizar</button></td>
                                                    <td><a class="btn btn-primary" href="/admin/sponsor-qr/{{$qr->id}}" role="button">Ver Qr</a></td>
                                                </form>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Row-->


                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->
@endsection

@section('script')
@endsection
