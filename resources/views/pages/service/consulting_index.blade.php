@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner consulting-banner">
    <div class="container">
        <h2 class="title">Consulting</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    Delivering successful projects requires the right teams, capabilities,
                    information flows, and well defined responsibilities, operating models and practices.
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-1-1.jpg') }}" alt="Consulting"
                    class="img-fluid service-img">
            </div>
            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    The level of complexity, replicability and the context in which a project is placed in many cases
                    requires an in-depth analysis of the critical aspects and of the objectives the customers are willing to achieve.
                </p>
                <p class="color-dark-2 mb-8">
                    In the Capital Projects & Infrastructures Industry many large capital projects are exposed
                    to potential delays and cost overruns.
                </p>
                <p class="color-dark-2 mb-8">
                    In the Energy & Utilities Industry, the growing use of renewables in the energy mix is leading
                    deep changes in the way we power our cars, heat our homes and power our industries
                </p>
                <p class="color-dark-2 mb-8">
                    In the Manufacturing & Supply Chain Industry to deliver products to the market, manufacturers must
                    adhere to extremely tight and stressful timelines.
                </p>
                <p class="color-dark-2 mb-8">
                    No matter what industry you work within, all projects have objectives, a budget, timescale and human
                    resources assigned. All projects rely on documents, correspondence, data and other contents on whose quality, availability, updating and timeliness the success of the project depends.
                </p>

            </div>

            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    ProcessNet Consulting activities are aimed at supporting our customers in addressing these challenges
                    in the early stages of preparation and launch of a project and / or its execution. In particular we support our customers to:
                </p>

                <ul class="list-unstyled m-t-0 p-y-1">
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Identify the best practices, operating models and digital technology that best suits each project.</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Organize internal and external information flows, including scope changes, keeping your project team well informed throughout</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Define SMART KPIs and tracking dashboards to collect, group, organize and visualize your project's most important metrics</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Provide training and ongoing support to take full advantage of digital technologies and best practices</li>
                </ul>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-1-2.jpg') }}" alt="Consulting"
                    class="img-fluid service-img">
            </div>
        </div>
    </div>
</section>

<section class="services pb-40">
    <div class="container">
        <div class="row align-items-stretch consulting">
            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">tab_search</span>
                    <h6 class="h6 pt-2">Identify the best practices</h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">account_tree</span>
                    <h6 class="h6 pt-2">Organize information flows</h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">developer_mode_tv</span>
                    <h6 class="h6 pt-2">Define SMART KPIs and dashboards</h6>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">school</span>
                    <h6 class="h6 pt-2">Provide training</h6>
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

    .service-img {
        width: 100%;
        height: 98%;
        object-fit: cover;
        border-radius: 12px;
        /* optional */
    }

    .consulting .service-box .material-symbols-outlined{
        font-size: 105px !important;
    }
</style>

@endsection