@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner os-banner">
    <div class="container">
        <h2 class="title">Operations Support</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    By means of a dedicated source of competence for document / correspondence 
                    controlling and management, you keep your project current and accurate
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-3.jpg') }}" alt="Operations Support"
                    class="img-fluid os-img">
            </div>
            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    Projects and portfolios typically have large volumes of highly specialized and unstructured documentation 
                    associated with them, including contracts, 
                    images, engineering drawings, technical specifications, schedules, inspection reports, and claims.
                </p>
                <p class="color-dark-2 mb-8">
                    Most projects are late not because of a one-time event, but a collection of delays in resolving small questions and issues.
                </p>
                <p class="color-dark-2 mb-8">
                    Having project content constantly updated and shared helps team members to have a detailed understanding of the project's status and to promptly react to upcoming issues.
                </p>
                <p class="color-dark-2 mb-8">
                   Many organizations therefore not only need support to organize activities in the early stages 
                   of the project setup, but also to perform daily activities during project execution.
                </p>
            </div>

            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    We help organizations throughout their project lifecycle by providing a single source of competence about
                     document/correspondence controlling and management in order to:
                </p>

                <ul class="list-unstyled m-t-0 p-y-1">
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Keep project content current</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Manage information flows, including scope changes</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Organize contents, in all formats/localizations, in a single repository</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Consolidate communication treads</li>
                </ul>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-3-2.png') }}" alt="Operations Support"
                    class="img-fluid os-img">
            </div>
        </div>
    </div>
</section>

<section class="services pb-40">
    <div class="container">
        <div class="row align-items-stretch consulting">
            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">directory_sync</span>
                    <h6 class="h6 pt-2">Keep project content current</h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">swap_horiz</span>
                    <h6 class="h6 pt-2">Manage informations flows</h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">folder_check</span>
                    <h6 class="h6 pt-2">Preserve a single repository</h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">forum</span>
                    <h6 class="h6 pt-2">Consolidate communication treads</h6>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .services .service-box {
        background: #F0F2F4;
        padding: 65px 10px 20px 10px;
        border-radius: 20px;
        box-shadow: 37px 14px 16px rgba(0, 0, 0, 0.01), 9px 3px 10px rgba(0, 0, 0, 0.09);
        -webkit-transition: all 0.6s linear 0s;
        transition: all 0.6s linear 0s;

        width: 100%;
        height: 100%;    
    }

    .os-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        border-radius: 12px;
        /* optional */
    }

    .consulting .service-box .material-symbols-outlined{
        font-size: 105px !important;
    }
</style>

@endsection