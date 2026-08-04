@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner industries-banner">
    <div class="container">
        <h2 class="title">Industries</h2>
    </div>
</div>

<!-- Industries start -->
<section class="team p-100">
    <div class="container">
        <div class="heading text-center">
            <h2>Built for complex, project-driven sectors</h2>
            <p>
                Our expertise spans industries where document-intensive projects and compliance are mission-critical.
            </p>
        </div>

        <div class="row all-services">
            <div class="col-xl-6 col-md-6">
                <a href="{{ route('industries_1') }}">
                    <div class="service-box" style="--bg:url('assets/media/industries/i-1.png');">
                        <div class="content">
                            <h4 class="title">Energy & Utilities</h4>
                            <p>Technical document management for complex asset operations</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-6 col-md-6">
                <a href="{{ route('industries_2') }}">
                    <div class="service-box" style="--bg:url('assets/media/industries/i-2.png');">
                        <div class="content">
                            <h4 class="title">Manufacturing & Supply Chain</h4>
                            <p>Digital transformation across the enterprise and supply chain</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-6 col-md-6">
                <a href="{{ route('industries_3') }}">
                    <div class="service-box" style="--bg:url('assets/media/industries/i-3.png');">
                        <div class="content">
                            <h4 class="title">Capital Projects & Infrastructure</h4>
                            <p>Capital investment drives economic growth with a approximately 14
                                percent of global GDP and a growing share of this is spent on projects larger than US $1B</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="col-xl-6 col-md-6">
                <a href="{{ route('industries_4') }}">
                    <div class="service-box" style="--bg:url('assets/media/industries/i-4.png');">
                        <div class="content">
                            <h4 class="title">Other Industries</h4>
                            <p>By their nature all projects have common characteristics, regardless
                                of the industry and context in which they are being executed</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Industries end -->


<!-- Why ProcessNet start -->
<section class="services bg-gray p-100">
    <div class="container">
        <div class="heading">
            <h2 class="">Why ProcessNet</h2>
        </div>
        <div class="row align-items-stretch">

            <div class="col-xl-4 col-md-4 col-12 d-flex">
                <div class="service-box text-center w-100">
                    <span class="material-symbols-outlined">public</span>
                    <h6>Global Project Experience</h6>
                    <p>Skills gained through participation in multiple international
                        projects across diverse industries, bringing adaptability and a broad perspective.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12 d-flex">
                <div class="service-box text-center w-100">
                    <span class="material-symbols-outlined">network_intel_node</span>
                    <h6>Advanced Digital Platform Expertise</h6>
                    <p>Full utilization of digital business platforms to maximize efficiency, performance, and innovation.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-4 col-12 d-flex">
                <div class="service-box text-center w-100">
                    <span class="material-symbols-outlined">partner_exchange</span>
                    <h6>Customer-Centric Approach</h6>
                    <p>A strong focus on customer needs, ensuring tailored support to successfully plan, execute, and deliver projects.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Why ProcessNet end -->

<style>
.all-services a{
    width: 100%;
}

.all-services .service-box {
    position: relative;
    height: 280px;
    border-radius: 16px;
    overflow: hidden;
    display: flex;
    align-items: flex-end;
    padding: 20px;
    color: #fff;
    cursor: pointer;
}

.all-services .service-box .title{
    color: #fff;
}

/* Background image layer */
.all-services .service-box::before {
    content: "";
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: all 0.4s ease;
    z-index: 0;
}

/* Dark overlay */
.all-services .service-box::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.35);
    transition: all 0.4s ease;
    z-index: 1;
}

/* Content always stays sharp */
.all-services .service-box .content {
    position: relative;
    z-index: 2;
    transform: translateY(20px);
    transition: all 0.4s ease;
}

.all-services .service-box p {
    opacity: 0;
    transition: all 0.4s ease;
}

/* 🔥 Hover effects ONLY on image layer */
.all-services .service-box:hover::before {
    filter: grayscale(100%) blur(4px);
    transform: scale(1.1);
}

.all-services .service-box:hover::after {
    background: rgba(0, 0, 0, 0.6);
}

.all-services .service-box:hover .content {
    transform: translateY(0);
}

.all-services .service-box:hover p {
    opacity: 1;
}
.all-services .service-box::before {
    background-image: var(--bg);
}
</style>
@endsection