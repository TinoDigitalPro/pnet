@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner about-banner">
    <div class="container">
        <h2 class="title">About</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting e_and_u">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    ProcessNet's mission is to be a leading company in fostering digital transformation for project-driven business processes.
                </h5>
            </div>
        </div>

        <!-- history -->
        <div class="row">
            @include('pages.about.component.history')
        </div>
        <!-- history -->


        <!-- team -->
        <div class="row">
            @include('pages.about.component.team')
        </div>
        <!-- team -->

    </div>
</section>

<!-- partners -->
<section class="testimonials bg-gray p-100">
    @include('pages.about.component.partners')
</section>
<!-- partners -->
@endsection