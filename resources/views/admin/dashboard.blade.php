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
                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <!--begin::Card widget 3-->
                            <a href="/qr-winner">
                                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                                     style="background-color: #F1416C;background-image:url('../assets/media/svg/shapes/wave-bg-red.svg')">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5 mb-3">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                             style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                                            <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Card body-->
                                    <div class="card-body d-flex align-items-end mb-3">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <span class="fs-4hx text-white fw-bold me-6">{{ count(\App\Models\Qr::where('is_winner', true)->get()) }}</span>

                                            <div class="fw-bold fs-6 text-white">
                                                <span class="d-block">Códigos Qr</span>
                                                <span class="">Ganadores</span>
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->

                                    <!--begin::Card footer-->
                                    <div class="card-footer"
                                         style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                        <!--begin::Progress-->
                                        <div class="fw-bold text-white py-2">
                                            <span class="fs-1 d-block">{{ count(\App\Models\Qr::where(['is_winner'=> true, 'available'=> true])->get()) }} Disponibles</span>
                                            <span class="opacity-50">{{ count(\App\Models\Qr::where(['is_winner'=> true, 'available'=> false])->get()) }} Canjeado</span>

                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Card footer-->
                                </div>
                            </a>
                            <!--end::Card widget 3-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-xl-3">
                            <!--begin::Card widget 3-->
                            <a href="/qr-trafic">
                            <div
                                class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                                style="background-color: #7239EA;background-image:url('../assets/media/svg/shapes/wave-bg-purple.svg')">
                                <!--begin::Header-->
                                <div class="card-header pt-5 mb-3">
                                    <!--begin::Icon-->
                                    <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                         style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                                        <i class="ki-outline ki-call text-white fs-2qx lh-0"></i>
                                    </div>
                                    <!--end::Icon-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end mb-3">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <span class="fs-4hx text-white fw-bold me-6">{{ count(\App\Models\Qr::where('is_winner', false)->get()) }}</span>

                                        <div class="fw-bold fs-6 text-white">
                                            <span class="d-block">Códigos Qr</span>
                                            <span class="">de Sponsors</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Card footer-->
                                <div class="card-footer"
                                     style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                                    <!--begin::Progress-->
                                    <div class="fw-bold text-white py-2">
                                        <span class="fs-1 d-block">{{ count(\App\Models\Qr::where(['is_winner'=> false, 'available'=> true])->get()) }} Disponibles</span>
                                        <span class="opacity-50">{{ count(\App\Models\Qr::where(['is_winner'=> false, 'available'=> false])->get()) }} Canjeado</span>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Card footer-->
                            </div>
                            </a>
                            <!--end::Card widget 3-->
                        </div>
                        <!--end::Col-->
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





