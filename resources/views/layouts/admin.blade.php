<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title>Panel Administración</title>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content=""/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | Metronic"/>
    <link rel="shortcut icon" href="{{ asset('admin/assets/media/logos/favicon.ico') }}"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="{{ asset('fonts.googleapis.com/css7b91.css?family=Inter:300,400,500,600,700')}}"/>
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

        <!--begin::Header-->
        <div id="kt_app_header" class="app-header ">

            <!--begin::Header container-->
            <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
                 id="kt_app_header_container">

                <!--begin::Sidebar mobile toggle-->
                <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                    <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                        <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1"><span class="path1"></span><span
                                class="path2"></span></i></div>
                </div>
                <!--end::Sidebar mobile toggle-->


                <!--begin::Mobile logo-->
                <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                    <a href="/home" class="d-lg-none">
                        Concurso Qr
{{--                         <img alt="Logo" src="{{ asset('admin/assets/media/logos/default-small.svg') }}" class="h-30px"/> --}}
                    </a>
                </div>
                <!--end::Mobile logo-->

                <!--begin::Header wrapper-->
                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
                     id="kt_app_header_wrapper">

                    <!--begin::Menu wrapper-->
                    <div
                        style="visibility: hidden"
                        class=" app-header-menu app-header-mobile-drawer align-items-stretch"
                        data-kt-drawer="true"
                        data-kt-drawer-name="app-header-menu"
                        data-kt-drawer-activate="{default: true, lg: false}"
                        data-kt-drawer-overlay="true"
                        data-kt-drawer-width="250px"
                        data-kt-drawer-direction="end"
                        data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                        data-kt-swapper="true"
                        data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                        data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
                    >
                        <!--begin::Menu-->
                        <div
                            class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        "

                            id="kt_app_header_menu"
                            data-kt-menu="true"
                        >
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                <!--begin:Menu link--><span class="menu-link"><span
                                        class="menu-title">Dashboards 0</span><span
                                        class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                    <!--begin:Dashboards menu-->
                                    <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                         data-kt-menu-dismiss="true">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../index.html" class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-element-11 text-primary fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/ecommerce.html"
                                                               class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-basket text-danger fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/projects.html" class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-abstract-44 text-info fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/online-courses.html"
                                                               class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-color-swatch text-success fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span><span
                                            class="path11"></span><span class="path12"></span><span
                                            class="path13"></span><span class="path14"></span><span
                                            class="path15"></span><span class="path16"></span><span
                                            class="path17"></span><span class="path18"></span><span
                                            class="path19"></span><span class="path20"></span><span
                                            class="path21"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/marketing.html"
                                                               class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-chart-simple text-dark fs-1"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/bidding.html" class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-switch text-warning fs-1"><span class="path1"></span><span
                                            class="path2"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/pos.html" class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-abstract-42 text-danger fs-1"><span
                                            class="path1"></span><span class="path2"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../dashboards/call-center.html"
                                                               class="menu-link ">
                                <span
                                    class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-duotone ki-call text-primary fs-1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span class="path7"></span><span class="path8"></span></i>                                </span>

                                                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->

                                                <div class="separator separator-dashed mx-5 my-5"></div>

                                                <!--begin:Landing-->
                                                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                                    <div class="d-flex flex-column me-5">
                                                        <div class="fs-6 fw-bold text-gray-800">
                                                            Landing Page Template
                                                        </div>
                                                        <div class="fs-7 fw-semibold text-muted">
                                                            Onpe page landing template with pricing & others
                                                        </div>
                                                    </div>

                                                    <a href="../../landing.html" class="btn btn-sm btn-primary fw-bold">
                                                        Explore
                                                    </a>
                                                </div>
                                                <!--end:Landing-->
                                            </div>
                                            <!--end:Col-->

                                            <!--begin:Col-->
                                            <div
                                                class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                                <!--begin:Heading-->
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More
                                                    Dashboards</h4>
                                                <!--end:Heading-->


                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/logistics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Logistics                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/website-analytics.html"
                                                       class="menu-link py-2 ">
                        <span class="menu-title">
                            Website Analytics                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/finance-performance.html"
                                                       class="menu-link py-2 ">
                        <span class="menu-title">
                            Finance Performance                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/store-analytics.html"
                                                       class="menu-link py-2 ">
                        <span class="menu-title">
                            Store Analytics                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/social.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Social                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/delivery.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Delivery                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/crypto.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Crypto                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/school.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            School                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->

                                                <!--begin:Menu item-->
                                                <div class="menu-item p-0 m-0">
                                                    <!--begin:Menu link-->
                                                    <a href="../../dashboards/podcast.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Podcast                        </span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Dashboards menu--></div><!--end:Menu sub--></div><!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                                    class="menu-link"><span class="menu-title">Pages</span><span
                                        class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                    <!--begin:Pages menu-->
                                    <div class="menu-active-bg px-4 px-lg-0">
                                        <!--begin:Tabs nav-->
                                        <div class="d-flex w-100 overflow-auto">
                                            <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_pages">
                                                        General </a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_account">
                                                        Account </a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_authentication">
                                                        Authentication </a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_utilities">
                                                        Utilities </a>
                                                </li>
                                                <!--end:Nav item-->
                                                <!--begin:Nav item-->
                                                <li class="nav-item mx-lg-1">
                                                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#"
                                                       data-bs-toggle="tab"
                                                       data-bs-target="#kt_app_header_menu_pages_widgets">
                                                        Widgets </a>
                                                </li>
                                                <!--end:Nav item-->
                                            </ul>
                                        </div>
                                        <!--end:Tabs nav-->

                                        <!--begin:Tab content-->
                                        <div class="tab-content py-4 py-lg-8 px-lg-7">
                                            <!--begin:Tab pane-->
                                            <div class="tab-pane active w-lg-1000px"
                                                 id="kt_app_header_menu_pages_pages">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-8">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu heading-->
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User
                                                                    Profile</h4>
                                                                <!--end:Menu heading-->

                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../pages/user-profile/overview.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Overview</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../pages/user-profile/projects.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Projects</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../pages/user-profile/campaigns.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Campaigns</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../pages/user-profile/documents.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Documents</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../pages/user-profile/followers.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Followers</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../pages/user-profile/activity.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Activity</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        Corporate</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/about.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">About</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/team.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Our Team</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/contact.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Contact Us</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/licenses.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Licenses</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/sitemap.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Sitemap</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        Careers</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/careers/list.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Careers List</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/careers/apply.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Careers Apply</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/faq/classic.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">FAQ Classic</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/faq/extended.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">FAQ Extended</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/blog/home.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Blog Home</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/blog/post.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Blog Post</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        Pricing</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/pricing/column.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Column Pricing</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/pricing/table.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Table Pricing</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        Social</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/social/feeds.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Feeds</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/social/activity.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Activty</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/social/followers.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Followers</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../pages/social/settings.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Settings</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-4">
                                                        <img src="{{ asset('admin/assets/media/stock/600x600/img-82.jpg') }}"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Tab pane-->

                                            <!--begin:Tab pane-->
                                            <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-5 mb-6 mb-lg-0">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/overview.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Overview</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/settings.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Settings</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/security.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Security</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/activity.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Activity</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/billing.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Billing</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-6">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/statements.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Statements</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/referrals.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Referrals</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/api-keys.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">API Keys</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="../../account/logs.html"
                                                                       class="menu-link ">
                                                                        <span class="menu-title">Logs</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-7">
                                                        <img src="{{ asset('admin/assets/media/stock/900x600/46.jpg') }}"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->        </div>
                                            <!--end:Tab pane-->

                                            <!--begin:Tab pane-->
                                            <div class="tab-pane  w-lg-1000px"
                                                 id="kt_app_header_menu_pages_authentication">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate
                                                                Layout</h4>
                                                            <!--end:Menu heading-->

                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/corporate/sign-in.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-In</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/corporate/sign-up.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-Up</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/corporate/two-factor.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Two-Factor</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/corporate/reset-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Reset Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/corporate/new-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">New Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->

                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay
                                                                Layout</h4>
                                                            <!--end:Menu heading-->

                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/overlay/sign-in.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-In</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/overlay/sign-up.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-Up</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/overlay/two-factor.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Two-Factor</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/overlay/reset-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Reset Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/overlay/new-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">New Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative
                                                                Layout</h4>
                                                            <!--end:Menu heading-->

                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/creative/sign-in.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-in</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/creative/sign-up.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-up</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/creative/two-factor.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Two-Factor</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/creative/reset-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Reset Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/creative/new-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">New Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->

                                                        <!--begin:Menu section-->
                                                        <div class="mb-6">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                            <!--end:Menu heading-->

                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/fancy/sign-in.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-In</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/fancy/sign-up.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Sign-Up</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/fancy/two-factor.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Two-Factor</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/fancy/reset-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Reset Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/layouts/fancy/new-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">New Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                            <!--end:Menu heading-->

                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/extended/multi-steps-sign-up.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Multi-Steps Sign-Up</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/welcome.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Welcome Message</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/verify-email.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Verify Email</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/coming-soon.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Coming Soon</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/password-confirmation.html"
                                                                   class="menu-link ">
                                                                    <span
                                                                        class="menu-title">Password Confirmation</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/account-deactivated.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Account Deactivation</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/error-404.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Error 404</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/general/error-500.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Error 500</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <!--begin:Menu section-->
                                                        <div class="mb-0">
                                                            <!--begin:Menu heading-->
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email
                                                                Templates</h4>
                                                            <!--end:Menu heading-->

                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/welcome-message.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Welcome Message</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/reset-password.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Reset Password</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/subscription-confirmed.html"
                                                                   class="menu-link ">
                                                                    <span
                                                                        class="menu-title">Subscription Confirmed</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/card-declined.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Credit Card Declined</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/promo-1.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Promo 1</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/promo-2.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Promo 2</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item p-0 m-0">
                                                                <!--begin:Menu link-->
                                                                <a href="../../authentication/email/promo-3.html"
                                                                   class="menu-link ">
                                                                    <span class="menu-title">Promo 3</span>
                                                                </a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu section-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->        </div>
                                            <!--end:Tab pane-->

                                            <!--begin:Tab pane-->
                                            <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-7">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General
                                                                        Modals</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/general/invite-friends.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Invite Friends</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/general/view-users.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">View Users</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/general/select-users.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Select Users</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/general/upgrade-plan.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Upgrade Plan</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/general/share-earn.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Share & Earn</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/forms/new-target.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">New Target</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/forms/new-card.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">New Card</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/forms/new-address.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">New Address</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/forms/create-api-key.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create API Key</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/forms/bidding.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Bidding</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced
                                                                        Modals</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/create-app.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Create App</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/create-campaign.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create Campaign</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/create-account.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create Business Acc</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/create-project.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create Project</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/top-up-wallet.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Top Up Wallet</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/offer-a-deal.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Offer a Deal</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/two-factor-authentication.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Two Factor Auth</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        Search</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/search/horizontal.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Horizontal</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/search/vertical.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Vertical</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/search/users.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Users</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/search/select-location.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Select Location</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                        Wizards</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/horizontal.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Horizontal</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/vertical.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Vertical</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/two-factor-authentication.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Two Factor Auth</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/create-app.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Create App</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/create-campaign.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create Campaign</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/create-account.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create Account</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/create-project.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Create Project</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/modals/wizards/top-up-wallet.html"
                                                                           class="menu-link ">
                                                                            <span
                                                                                class="menu-title">Top Up Wallet</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="../../utilities/wizards/offer-a-deal.html"
                                                                           class="menu-link ">
                                                                            <span class="menu-title">Offer a Deal</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-5 pe-lg-5">
                                                        <img src="{{ asset('admin/assets/media/stock/600x600/img-84.jpg') }}"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->        </div>
                                            <!--end:Tab pane-->

                                            <!--begin:Tab pane-->
                                            <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../widgets/lists.html" class="menu-link ">
                                                                <span class="menu-title">Lists</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../widgets/statistics.html" class="menu-link ">
                                                                <span class="menu-title">Statistics</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../widgets/charts.html" class="menu-link ">
                                                                <span class="menu-title">Charts</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../widgets/mixed.html" class="menu-link ">
                                                                <span class="menu-title">Mixed</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../widgets/tables.html" class="menu-link ">
                                                                <span class="menu-title">Tables</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../widgets/feeds.html" class="menu-link ">
                                                                <span class="menu-title">Feeds</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-8">
                                                        <img src="{{ asset('admin/assets/media/stock/900x600/44.jpg') }}"
                                                             class="rounded mw-100" alt=""/>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->        </div>
                                            <!--end:Tab pane-->
                                        </div>
                                        <!--end:Tab content-->
                                    </div>
                                    <!--end:Pages menu--></div><!--end:Menu sub--></div><!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item here show menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Apps</span><span
                                        class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-rocket fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i></span><span class="menu-title">Projects</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">My Projects</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/project.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View Project</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/targets.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Targets</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/budget.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Budget</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/users.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/files.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Files</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/activity.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Activity</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../projects/settings.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Settings</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-handcart fs-2"></i></span><span
                                                class="menu-title">eCommerce</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Catalog</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/catalog/products.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Products</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/catalog/categories.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Categories</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/catalog/add-product.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Add Product</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/catalog/edit-product.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Edit Product</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/catalog/add-category.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Add Category</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/catalog/edit-category.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Edit Category</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click"
                                                 class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Sales</span><span class="menu-arrow"></span></span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/sales/listing.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Orders Listing</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/sales/details.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Order Details</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/sales/add-order.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Add Order</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/sales/edit-order.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Edit Order</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click"
                                                 class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customers</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/customers/listing.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Customers Listing</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/customers/details.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Customers Details</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="click"
                                                 class="menu-item menu-accordion menu-sub-indention">
                                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Reports</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/reports/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Products Viewed</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/reports/sales.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Sales</span></a><!--end:Menu link-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/reports/returns.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Returns</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/reports/customer-orders.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Customer Orders</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../ecommerce/reports/shipping.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Shipping</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../ecommerce/settings.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Settings</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-chart fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i></span><span class="menu-title">Support Center</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../support-center/overview.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Overview</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tickets</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../support-center/tickets/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Ticket List</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../support-center/tickets/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Ticket View</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Tutorials</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../support-center/tutorials/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Tutorials List</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../support-center/tutorials/post.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Tutorials Post</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../support-center/faq.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">FAQ</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../support-center/licenses.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Licenses</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../support-center/contact.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Contact Us</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-shield-tick fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">User Management</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Users</span><span class="menu-arrow"></span></span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../user-management/users/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Users List</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../user-management/users/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View User</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Roles</span><span class="menu-arrow"></span></span>
                                                <!--end:Menu link--><!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../user-management/roles/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Roles List</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../user-management/roles/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View Roles</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../user-management/permissions.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Permissions</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-phone fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i></span><span class="menu-title">Contacts</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../contacts/getting-started.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Getting Started 1</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../contacts/add-contact.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add Contact</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../contacts/edit-contact.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Edit Contact</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../contacts/view-contact.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View Contact</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start"
                                         class="menu-item here show menu-lg-down-accordion"><!--begin:Menu link--><span
                                            class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-basket fs-2"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></i></span><span class="menu-title">Subscriptions</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link active"
                                                                                            href="getting-started.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Getting Started 2</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Subscription List</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="add.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Add Subscription</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View Subscription</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-briefcase fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">Customers</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../customers/getting-started.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Getting Started 3</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../customers/list.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer Listing</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../customers/view.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Customer Details</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-credit-cart fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">Invoice Management</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                 data-kt-menu-placement="right-start"
                                                 class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span
                                                    class="menu-link"><span class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Profile</span><span
                                                        class="menu-arrow"></span></span><!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../invoices/view/invoice-1.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Invoice 1</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../invoices/view/invoice-2.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Invoice 2</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                                    href="../invoices/view/invoice-3.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Invoice 3</span></a>
                                                        <!--end:Menu link--></div><!--end:Menu item--></div>
                                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../invoices/create.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Create Invoice</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-file-added fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">File Manager</span><span
                                                class="menu-arrow"></span></span><!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../file-manager/folders.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Folders</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../file-manager/files.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Files</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../file-manager/blank.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Blank Directory</span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../file-manager/settings.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Settings</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-sms fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i></span><span
                                                class="menu-title">Inbox</span><span class="menu-arrow"></span></span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../inbox/listing.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Messages</span><span class="menu-badge"><span
                                                            class="badge badge-light-success">3</span></span></a>
                                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../inbox/compose.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Compose</span></a><!--end:Menu link--></div>
                                            <!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../inbox/reply.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">View & Reply</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                         data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                    class="ki-duotone ki-message-text-2 fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span><span
                                                class="menu-title">Chat</span><span class="menu-arrow"></span></span>
                                        <!--end:Menu link--><!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../chat/private.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Private Chat</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../chat/group.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Group Chat</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                            href="../chat/drawer.html"><span
                                                        class="menu-bullet"><span
                                                            class="bullet bullet-dot"></span></span><span
                                                        class="menu-title">Drawer Chat</span></a><!--end:Menu link-->
                                            </div><!--end:Menu item--></div><!--end:Menu sub--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                    href="../calendar.html"><span
                                                class="menu-icon"><i class="ki-duotone ki-calendar-8 fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span><span class="path6"></span></i></span><span
                                                class="menu-title">Calendar</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                                    class="menu-link"><span class="menu-title">Layouts</span><span
                                        class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                    <!--begin:Dashboards menu-->
                                    <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6"
                                         data-kt-menu-dismiss="true">
                                        <!--begin:Row-->
                                        <div class="row">
                                            <!--begin:Col-->
                                            <div class="col-lg-6">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Heading-->
                                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                            Layouts</h4>
                                                        <!--end:Heading-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../layouts/light-sidebar.html"
                                                               class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Light Sidebar</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../layouts/dark-sidebar.html"
                                                               class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Dark Sidebar</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../layouts/light-header.html"
                                                               class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Light Header</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../layouts/dark-header.html" class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Dark Header</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="col-lg-6 mb-3">
                                                        <!--begin:Heading-->
                                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                            Toolbars</h4>
                                                        <!--end:Heading-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../toolbars/classic.html" class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Classic</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../toolbars/saas.html" class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">SaaS</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../toolbars/accounting.html" class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Accounting</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../toolbars/extended.html" class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Extended</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="../../toolbars/reports.html" class="menu-link ">
                                                                <span class="menu-bullet"><span
                                                                        class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span></span>
                                                                <span class="menu-title">Reports</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->

                                                <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>

                                                <!--begin:Layout Builder-->
                                                <div
                                                    class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                                                    <div class="d-flex flex-column me-5">
                                                        <div class="fs-6 fw-bold text-gray-800">
                                                            Layout Builder
                                                        </div>
                                                        <div class="fs-7 fw-semibold text-muted">
                                                            Customize, preview and export
                                                        </div>
                                                    </div>

                                                    <a href="../../layout-builder.html"
                                                       class="btn btn-sm btn-primary fw-bold">
                                                        Try Builder
                                                    </a>
                                                </div>
                                                <!--end:Layout Builder-->
                                            </div>
                                            <!--end:Col-->

                                            <!--begin:Col-->
                                            <div class="col-lg-6 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
                                                <img src="{{ asset('admin/assets/media/stock/900x600/45.jpg') }}"
                                                     class="rounded mw-100" alt=""/>
                                            </div>
                                            <!--end:Col-->
                                        </div>
                                        <!--end:Row-->
                                    </div>
                                    <!--end:Dashboards menu--></div><!--end:Menu sub--></div><!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-placement="bottom-start"
                                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Help</span><span
                                        class="menu-arrow d-lg-none"></span></span><!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                    href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                                                                    target="_blank"
                                                                                    title="Check out over 200 in-house components, plugins and ready for use solutions"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-dismiss="click"
                                                                                    data-bs-placement="right"><span
                                                class="menu-icon"><i class="ki-duotone ki-rocket fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">Components</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                    href="https://preview.keenthemes.com/html/metronic/docs"
                                                                                    target="_blank"
                                                                                    title="Check out the complete documentation"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-trigger="hover"
                                                                                    data-bs-dismiss="click"
                                                                                    data-bs-placement="right"><span
                                                class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i></span><span
                                                class="menu-title">Documentation</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--><!--begin:Menu item-->
                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                                    href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                                                    target="_blank"><span
                                                class="menu-icon"><i class="ki-duotone ki-code fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span></i></span><span
                                                class="menu-title">Changelog v8.1.8</span></a><!--end:Menu link--></div>
                                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->    </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->


                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">


                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-30px symbol-md-40px"
                                 data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                 data-kt-menu-attach="parent"
                                 data-kt-menu-placement="bottom-end">
                                <img src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}" alt="user"/>
                            </div>

                            <!--begin::User account menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                {{ Auth::user()->name }}
                                            </div>

                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                {{ Auth::user()->email }} </a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->


                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="menu-link px-5">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->

                        <!--begin::Header menu toggle-->
                        <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                            <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                                 id="kt_app_header_menu_toggle">
                                <i class="ki-duotone ki-element-4 fs-1"><span class="path1"></span><span
                                        class="path2"></span></i></div>
                        </div>
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header wrapper-->            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!------------------------------------------------------------------------------------------------------>
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">


            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar  flex-column "
                 data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                 data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                 data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
            >


                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="/home"> Concurso Qr</a>
                    <div
                        id="kt_app_sidebar_toggle"
                        class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
                        data-kt-toggle="true"
                        data-kt-toggle-state="active"
                        data-kt-toggle-target="body"
                        data-kt-toggle-name="app-sidebar-minimize"
                    >

                        <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span
                                class="path2"></span></i></div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                    <!--begin::Menu wrapper-->
                    <div
                        id="kt_app_sidebar_menu_wrapper"
                        class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="true"
                        data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                        data-kt-scroll-wrappers="#kt_app_sidebar_menu"
                        data-kt-scroll-offset="5px"
                        data-kt-scroll-save-state="true"
                    >
                        <!--begin::Menu-->
                        <div
                            class="menu menu-column menu-rounded menu-sub-indention px-3"

                            id="#kt_app_sidebar_menu"

                            data-kt-menu="true"
                            data-kt-menu-expand="false"
                        >

                            <!--begin:Menu item-->
                            <div class="menu-item pb-5"><!--begin:Menu content-->
                                <div class="menu-content"><span
                                        class="menu-heading fw-bold text-uppercase fs-7">Secciones</span></div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->

                            <!--begin:Menu item operator-->
                            <div data-kt-menu-trigger="click" class="pt-5 pb-5 menu-item menu-accordion hover show">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <i class="ki-duotone ki-element-11 fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <span
                                        class="menu-title"> Listas de Qr <!--User Profile 1--></span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->

                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">

                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="/qr-winner">
                                                         <span class="menu-bullet">
                                                             <span class="bullet bullet-dot"></span>
                                                         </span>
                                            <span class="menu-title">Qr con premio</span>
                                        </a>
                                        <a class="menu-link" href="/qr-trafic">
                                                         <span class="menu-bullet">
                                                             <span class="bullet bullet-dot"></span>
                                                         </span>
                                            <span class="menu-title">Qr de Tráfico</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::sidebar menu-->
            </div>
            <!--end::Sidebar-->

            @yield('main')

        </div>
        <!--end::Wrapper-->


    </div>
    <!--end::Page-->
</div>
<!--end::App-->


<!--begin::App layout builder-->
<div
    id="kt_app_layout_builder"
    class="bg-body"

    data-kt-drawer="true"
    data-kt-drawer-name="app-settings"
    data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
    data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
    data-kt-drawer-close="#kt_app_layout_builder_close">

    <!--begin::Card-->
    <div class="card border-0 shadow-none rounded-0 w-100">
        <!--begin::Card header-->
        <div
            class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
            id="kt_app_layout_builder_header"
            style="background-image:url("{{ asset('admin/assets/media/misc/layout/customizer-header-bg.jpg') }}">

        <!--begin::Card title-->
        <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
            Metronic Builder

            <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                Get your product deeply customized
            </small>
        </h3>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <button
                type="button"
                class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
                id="kt_app_layout_builder_close"
            >
                <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span
                        class="path2"></span></i></button>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body position-relative" id="kt_app_layout_builder_body">
        <!--begin::Content-->
        <div id="kt_app_settings_content"
             class="position-relative scroll-y me-n5 pe-5"

             data-kt-scroll="true"
             data-kt-scroll-height="auto"
             data-kt-scroll-wrappers="#kt_app_layout_builder_body"
             data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
             data-kt-scroll-offset="5px">

            <!--begin::Form-->
            <form class="form" method="POST" id="kt_app_layout_builder_form"
                  action="https://preview.keenthemes.com/metronic8/demo1/index.php">
                <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>

                <!--begin::Card body-->
                <div class="card-body p-0">

                    <!--begin::Form group-->
                    <div class="form-group">
                        <!--begin::Heading-->
                        <div class="mb-6">
                            <h4 class="fw-bold text-dark">Theme Mode</h4>
                            <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                Enjoy Dark & Light modes.

                                <a class="fw-semibold"
                                   href="https://preview.keenthemes.com/html/metronic/docs/getting-started/dark-mode"
                                   target="_blank">See docs</a>
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Options-->
                        <div class="row " data-kt-buttons="true"
                             data-kt-buttons-target=".form-check-image,.form-check-input">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Option-->
                                <label class="form-check-image form-check-success">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper border-gray-200 border-2">
                                        <img src="{{ asset('admin/assets/media/preview/demos/demo1/light-ltr.png') }}"
                                             class="form-check-rounded mw-100" alt=""/>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                        <input class="form-check-input" type="radio" value="light" name="theme_mode"
                                               id="kt_layout_builder_theme_mode_light"/>

                                        <!--begin::Label-->
                                        <div class="form-check-label text-gray-700">
                                            Light
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Option-->
                                <label class="form-check-image form-check-success">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper border-gray-200 border-2">
                                        <img src="{{ asset('admin/assets/media/preview/demos/demo1/dark-ltr.png') }}"
                                             class="form-check-rounded mw-100" alt=""/>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                        <input class="form-check-input" type="radio" value="dark" name="theme_mode"
                                               id="kt_layout_builder_theme_mode_dark"/>

                                        <!--begin::Label-->
                                        <div class="form-check-label text-gray-700">
                                            Dark
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->

                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Form group-->
                    <div class="separator separator-dashed my-5"></div>

                    <!--begin::Form group-->
                    <div class="form-group d-flex flex-stack">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column">
                            <h4 class="fw-bold text-dark">RTL Mode</h4>
                            <div class="fs-7 fw-semibold text-muted">
                                Change Language Direction.

                                <a class="fw-semibold"
                                   href="https://preview.keenthemes.com/html/metronic/docs/getting-started/rtl"
                                   target="_blank">See docs</a>
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Option-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Check-->
                            <div
                                class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                <input type="hidden" value="false"
                                       name="layout-builder[layout][app][general][rtl]"/>

                                <input
                                    class="form-check-input w-45px h-30px"
                                    type="checkbox"
                                    value="true"
                                    name="layout-builder[layout][app][general][rtl]"
                                />
                            </div>
                            <!--end::Check-->
                        </div>
                        <!--end::Option-->
                    </div>
                    <!--end::Form group-->
                    <div class="separator separator-dashed my-5"></div>


                    <!--begin::Form group-->
                    <div class="form-group ">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column mb-4">
                            <h4 class="fw-bold text-dark">Width Mode</h4>
                            <div class="fs-7 fw-semibold text-muted">Page width options</div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Options-->
                        <div class="d-flex gap-7">
                            <!--begin::Check-->
                            <div
                                class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                <input
                                    class="form-check-input" type="radio"
                                    checked

                                    value="default"
                                    id="kt_layout_builder_page_width_default"
                                    name="layout-builder[layout][app][general][page-width]"
                                />

                                <!--begin::Label-->
                                <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                       for="kt_layout_builder_page_width_default">
                                    Default </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Check-->
                            <!--begin::Check-->
                            <div
                                class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                <input
                                    class="form-check-input" type="radio"


                                    value="fluid"
                                    id="kt_layout_builder_page_width_fluid"
                                    name="layout-builder[layout][app][general][page-width]"
                                />

                                <!--begin::Label-->
                                <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                       for="kt_layout_builder_page_width_fluid">
                                    Fluid </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Check-->
                            <!--begin::Check-->
                            <div
                                class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                <input
                                    class="form-check-input" type="radio"


                                    value="fixed"
                                    id="kt_layout_builder_page_width_fixed"
                                    name="layout-builder[layout][app][general][page-width]"
                                />

                                <!--begin::Label-->
                                <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                       for="kt_layout_builder_page_width_fixed">
                                    Fixed </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Check-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Form group-->
                    <div class="separator separator-dashed my-5"></div>


                    <!--begin::Form group-->
                    <div class="form-group ">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column mb-4">
                            <h4 class="fw-bold text-dark">KeenIcons Style</h4>

                            <div>
                                <span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
                                <a class="fw-semibold"
                                   href="https://preview.keenthemes.com/html/metronic/docs/icons/keenicons"
                                   target="_blank">Learn more</a>
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Options-->
                        <div class="d-flex flex-stack gap-3 " data-kt-buttons="true"
                             data-kt-buttons-target=".form-check-image,.form-check-input">

                            <!--begin::Option-->
                            <label
                                class="form-check-image form-check-success w-100 parent-active parent-hover active">
                                <!--begin::Image-->
                                <div
                                    class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                    <i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span
                                            class="path1"></span><span class="path2"></span></i>
                                    <span
                                        class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
                                </div>
                                <!--end::Image-->

                                <!--begin::Check-->
                                <div
                                    style="visibility: hidden; height: 0px!important; width:0px!important; overflow:hidden">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        value="duotone"
                                        checked
                                        name="layout-builder[layout][app][general][icons]"/>
                                </div>
                                <!--end::Check-->
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                <!--begin::Image-->
                                <div
                                    class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                    <i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                    <span
                                        class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
                                </div>
                                <!--end::Image-->

                                <!--begin::Check-->
                                <div
                                    style="visibility: hidden; height: 0 !important; width: 0 !important; overflow:hidden">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        value="outline"

                                        name="layout-builder[layout][app][general][icons]"/>
                                </div>
                                <!--end::Check-->
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                <!--begin::Image-->
                                <div
                                    class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                    <i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                    <span
                                        class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
                                </div>
                                <!--end::Image-->

                                <!--begin::Check-->
                                <div
                                    style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        value="solid"

                                        name="layout-builder[layout][app][general][icons]"/>
                                </div>
                                <!--end::Check-->
                            </label>
                            <!--end::Option-->

                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Form group-->
                    <div class="separator separator-dashed my-5"></div>

                    <!--begin::Form group-->
                    <div class="form-group">
                        <!--begin::Heading-->
                        <div class="mb-6">
                            <h4 class="fw-bold text-dark">Layouts</h4>

                            <span class="fw-semibold text-muted fs-7 lh-1">
			4 main layouts.
		</span>

                            <a href="../../layout-builder.html" class="fw-semibold text-primary">More layout
                                options</a>
                        </div>
                        <!--end::Heading-->

                        <!--begin::Options-->
                        <div class="row gy-3" data-kt-buttons="true"
                             data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Option-->
                                <label class="form-check-image form-check-success active  active">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper border-gray-200 border-2">
                                        <img src="{{ asset('admin/assets/media/misc/layout/dark-sidebar.png') }}"
                                             class="form-check-rounded mw-100" alt=""/>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                        <input
                                            class="form-check-input" type="radio"
                                            checked
                                            value="dark-sidebar"
                                            name="layout-builder[layout][app][general][layout]"
                                        />

                                        <!--begin::Label-->
                                        <div class="form-check-label text-gray-700">
                                            Dark Sidebar
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Option-->
                                <label class="form-check-image form-check-success   ">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper border-gray-200 border-2">
                                        <img src="{{ asset('admin/assets/media/misc/layout/light-sidebar.png') }}"
                                             class="form-check-rounded mw-100" alt=""/>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                        <input
                                            class="form-check-input" type="radio"

                                            value="light-sidebar"
                                            name="layout-builder[layout][app][general][layout]"
                                        />

                                        <!--begin::Label-->
                                        <div class="form-check-label text-gray-700">
                                            Light Sidebar
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Option-->
                                <label class="form-check-image form-check-success   ">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper border-gray-200 border-2">
                                        <img src="{{ asset('admin/assets/media/misc/layout/dark-header.png') }}"
                                             class="form-check-rounded mw-100" alt=""/>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                        <input
                                            class="form-check-input" type="radio"

                                            value="dark-header"
                                            name="layout-builder[layout][app][general][layout]"
                                        />

                                        <!--begin::Label-->
                                        <div class="form-check-label text-gray-700">
                                            Dark Header
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Option-->
                                <label class="form-check-image form-check-success   ">
                                    <!--begin::Image-->
                                    <div class="form-check-wrapper border-gray-200 border-2">
                                        <img src="{{ asset('admin/assets/media/misc/layout/light-header.png') }}"
                                             class="form-check-rounded mw-100" alt=""/>
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                        <input
                                            class="form-check-input" type="radio"

                                            value="light-header"
                                            name="layout-builder[layout][app][general][layout]"
                                        />

                                        <!--begin::Label-->
                                        <div class="form-check-label text-gray-700">
                                            Light Header
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->

                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Form group-->

                </div>
                <!--end::Card body-->                </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Card body-->

    <!--begin::Card footer-->
    <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
        <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">

            <!--begin::Indicator label-->
            <span class="indicator-label">
    Preview</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
            <!--end::Indicator progress-->    </button>

        <button type="button" id="kt_app_layout_builder_reset" class="btn btn-light flex-grow-1 fw-semibold">

            <!--begin::Indicator label-->
            <span class="indicator-label">
    Reset</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
            <!--end::Indicator progress-->    </button>
    </div>
    <!--end::Card footer-->    </div>
<!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::Engage-->
<div class="app-engage " id="kt_app_engage" style="display: none">
    <!--begin::Prebuilts toggle-->
    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_app_engage_prebuilts_modal"
       class="app-engage-btn hover-dark">
        <i class="ki-duotone ki-abstract-41 fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>
        Prebuilts
    </a>
    <!--end::Prebuilts toggle-->


    <!--begin::Get help-->
    <a href="https://devs.keenthemes.com/" target="_blank" class="app-engage-btn hover-primary">
        <i class="ki-duotone ki-like-shapes fs-1 pt-1 mb-2"><span class="path1"></span><span class="path2"></span></i>
        Get Help
    </a>
    <!--end::Get help-->

    <!--begin::Prebuilts toggle-->
    <a href="https://1.envato.market/EA4JP" target="_blank" class="app-engage-btn hover-success">
        <i class="ki-duotone ki-basket fs-2 pt-1 mb-2"><span class="path1"></span><span class="path2"></span><span
                class="path3"></span><span class="path4"></span></i> Buy Now
    </a>
    <!--end::Prebuilts toggle-->

    <!--begin::Engage close-->
    <a href="#" id="kt_app_engage_toggle_off" class="app-engage-btn app-engage-btn-toggle-off text-hover-primary p-0">
        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i> </a>
    <!--end::Engage close-->

    <!--begin::Engage close-->
    <a href="#" id="kt_app_engage_toggle_on" class="app-engage-btn app-engage-btn-toggle-on text-hover-primary p-0"
       data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="tooltip-inverse" data-bs-dimiss="click"
       title="Explore Metronic">
        <i class="ki-duotone ki-question fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span
                class="path3"></span></i> </a>
    <!--end::Engage close-->
</div>
<!--end::Engage-->

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i></div>
<!--end::Scrolltop-->

<!--begin::Javascript-->
<script>
    var hostUrl = "assets/index.html";        </script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom/utilities/modals/users-search.js') }}"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

<!--end::Custom Javascript-->
<!--end::Javascript-->
@yield('script')
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/metronic8/demo1/apps/subscriptions/getting-started.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 15:00:24 GMT -->
</html>
