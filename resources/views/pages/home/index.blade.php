@extends('layouts.template')

@section('content')
<!-- banner Area start -->
<section class="banner">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="title">Drive digital transformation for <em>project-driven</em> businesses</h2>
                    <p class="description">ProcessNet delivers professional services that improve the way you run your projects — boosting productivity,
                        strengthening governance, and unlocking the full potential of your ECM platform.</p>
                    <div class="links">
                        <a href="/services" class="cus-btn dark">Explore our services</a>
                        <a href="/contact-us" class="cus-btn light">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner Area end -->

<!-- Partner Area start --
<div class="logo bg-gray p-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-12 offset-xl-1 ">
                <div class="logo-slider">
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-1.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-2.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-3.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-4.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-5.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-1.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-2.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-3.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-4.png') }}" class="d-inline-block" alt="">
                    </div>
                    <div class="item text-center">
                        <img src="{{ asset('assets/media/logo/logo-5.png') }}" class="d-inline-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-- Partner Area end -->

<!-- about Area start -->
<section class="about p-100">
    <div class="container">
        <!--
        <div class="heading">
            <h2>Unveiling Our Journey and Purpose</h2>
            <p>How our unwavering commitment and passion drive us to empower<br> businesses and make a lasting impact in the corporate landscape.</p>
        </div> -->
        <div class="row">
            <div class="col-xl-3 col-md-6 box-1">
                <img src="{{ asset('assets/media/about/img-1.png') }}" alt="">
                <div class="achivement-box text-center bg-gray">
                    <h2>3</h2>
                    <p>Service Pillars</p>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 box-2">
                <div class="achivement-box text-center bg-primary">
                    <h2>20+</h2>
                    <p>Years Experience</p>
                </div>
                <img src="{{ asset('assets/media/about/img-2.png') }}" alt="">
            </div>
            <div class="col-xl-6">
                <div class="content">
                    <h2>ProcessNet reduces the operational costs and risks associated with project-driven business processes.</h2>
                    <div>
                        <div class="tab-content">
                            <div id="history" class="tab-pane active">
                                <p>
                                    ProcessNet, founded in 2003, focuses on delivering organizational and ICT services
                                    to support rapid business transformation. Over the years, it has grown through key partnerships
                                    and innovations: it partnered with OpenText in 2005, expanded internationally in 2007 with Resonate
                                    KT (UK) and GCI Inc. (US), and formalized its role as a system integrator for OpenText EMEA in 2008.
                                    <br>
                                    <br>
                                    From 2010 onward, ProcessNet developed specialized vertical solutions, including offerings for Energy &
                                    Utilities, Manufacturing, and Capital Projects. In 2016, it spun off its software development unit into
                                    ProjectVault. By 2020, the company introduced packaged solutions tailored for project-driven businesses and
                                    OpenText xECM for Engineering, reinforcing its focus on scalable, industry-specific digital solutions.
                                </p>
                            </div>
                            <div id="mission" class="tab-pane">
                                <p>Over the years, we have developed a reputation for excellence, constantly pushing the boundaries of what's cutting-edge solutions that drive real results. Today, we continue this legacy, working with success in every corner of the globe.At Vision, we have a long and proud history of empowering business excellence everywhere. Founded in 2008, our company has been dedicated to driving innovation and progress in the business world from the very beginning. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about Area end -->

<!-- Process Area start -->
<section class="process py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-xl-3 col-md-6">
                <div class="step-card text-center p-4 h-100">
                    <h2 class="step-number" data-target="20">0+</h2>
                    <p class="step-text">Years of Experience</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-md-6">
                <div class="step-card text-center p-4 h-100">
                    <h2 class="step-number" data-target="100">0+</h2>
                    <p class="step-text">International Projects</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-md-6">
                <div class="step-card text-center p-4 h-100">
                    <h2 class="step-number">BCMM®</h2>
                    <p class="step-text">Proprietary Methodology</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-md-6">
                <div class="step-card text-center p-4 h-100">
                    <h2 class="step-number">OpenText</h2>
                    <p class="step-text">Premier ECM Partner</p>
                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .process {
        background: linear-gradient(135deg, #f8f9fa, #eef1f5);
    }

    .step-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .step-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .step-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1A3F6D;
        margin-bottom: 10px;
    }

    .step-text {
        font-size: 1rem;
        color: #6c757d;
        margin: 0;
    }

    /* Optional: subtle top accent */
    .step-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: #1A3F6D;
    }

    .service-box h6{
        padding-top: 10px;
        margin-bottom: 10px !important;
    }

    .services .row > div {
    display: flex;
}

.services .service-box {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    width: 100%;
    height: 100%;
    padding: 30px 20px;
}
</style>
<!-- Process Area end -->

<!-- services Area start -->
<section class="services p-100">
    <div class="container">
        <div class="heading">
            <h2 class="">Built for complex, project-driven sectors</h2>
            <p>Our expertise spans industries where document-intensive projects and compliance are mission-critical.</p>
        </div>
        <div class="row ">
            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <a href="{{ route('industries_1') }}">
                    <div class="service-box text-center">
                        <img src="{{ asset('assets/media/icon/target-blue.png') }}" alt="" class="default">
                        <img src="{{ asset('assets/media/icon/target.png') }}" alt="" class="onhover">
                        <h6 class="mt-10">Energy & Utilities</h6>
                        <p>Technical document management for complex asset operations</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <a href="{{ route('industries_2') }}">
                    <div class="service-box text-center">
                        <img src="{{ asset('assets/media/icon/discussion.png') }}" alt="" class="default">
                        <img src="{{ asset('assets/media/icon/discussion-white.png') }}" alt="" class="onhover">
                        <h6 class="mt-10">Manufacturing & Supply Chain</h6>
                        <p>Digital transformation across the enterprise and supply chain</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <a href="{{ route('industries_3') }}">
                    <div class="service-box text-center">
                        <img src="{{ asset('assets/media/icon/rating.png') }}" alt="" class="default">
                        <img src="{{ asset('assets/media/icon/rating-white.png') }}" alt="" class="onhover">
                        <h6 class="mt-10">Capital Projects & Infrastructure</h6>
                        <p>Project document control from design through commissioning</p>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-12 d-flex">
                <a href="{{ route('industries_4') }}">
                    <div class="service-box text-center">
                        <img src="{{ asset('assets/media/icon/management.png') }}" alt="" class="default">
                        <img src="{{ asset('assets/media/icon/management-white.png') }}" alt="" class="onhover">
                        <h6 class="mt-10">Other Industries</h6>
                        <p>Compliance-ready ECM for regulated document workflows</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- services Area end -->

<!-- showcase Area start -->
<section class="showcase bg-gray p-100">
    <div class="container">
        <div class="heading">
            <h2>Professional Services</h2>
            <p>ProcessNet professional services deliver significant improvements for our customers
                in the specific domain of project-driven business <br> processes and for document/correspondence intensive information flows.</p>
        </div>
        <div class="showcase-slider">
            <div class="showcase-box">
                <a href="{{ route('services_1') }}">
                    <img src="{{ asset('assets/media/showcase/s-1.png') }}" alt="">
                    <h4 class="title">Consulting</h4>
                </a>
            </div>
            <div class="showcase-box">
                <a href="{{ route('services_2') }}">
                    <img src="{{ asset('assets/media/showcase/2.png') }}" alt="">
                    <h4 class="title">Technology</h4>
                </a>
            </div>
            <div class="showcase-box">
                <a href="{{ route('services_3') }}">
                    <img src="{{ asset('assets/media/showcase/s-3.png') }}" alt="">
                    <h4 class="title">Operations Support</h4>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- showcase Area end -->


@endsection