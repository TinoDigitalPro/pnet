@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner service-banner">
    <div class="container">
        <h2 class="title">Services</h2>
    </div>
</div>

<!-- Services start -->
<section class="team p-100">
    <div class="container">
        <div class="heading text-center">
            <h2>ProcessNet Professional Services</h2>
            <p>
                ProcessNet professional services deliver significant improvements for our customers
                in project-driven business processes and document-intensive information flows.
            </p>
        </div>

        <div class="row all-services">
            <div class="col-xl-4 col-md-6">
                <a href="{{ route('services_1') }}">
                    <div class="service-box" style="--bg:url('assets/media/services/s-1.jpg');">
                        <div class="content">
                            <h4 class="title">Consulting</h4>
                            <p>Ensuring you have the right teams, capabilities, and information flows, 
                                as well as defined responsibilities, operating models and practices.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="{{ route('services_2') }}">
                    <div class="service-box" style="--bg:url('assets/media/services/s-2.jpg');">
                        <div class="content">
                            <h4 class="title">Technology</h4>
                            <p>Digital technology is disrupting industry structures, and the way capital projects are planned and delivered worldwide.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="{{ route('services_3') }}">
                    <div class="service-box" style="--bg:url('assets/media/services/s-3.jpg');">
                        <div class="content">
                            <h4 class="title">Operations Support</h4>
                            <p>Projects have large volumes of highly specialized documents associated with them, and require accurate tracking of correspondence flows.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Services end -->


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