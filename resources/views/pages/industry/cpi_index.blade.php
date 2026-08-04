@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner cpi-banner">
    <div class="container">
        <h2 class="title">Capital Projects & Infrastructure</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting e_and_u">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    Capital investment drives economic growth with a approximately 14 percent of 
                    global GDP and a growing share of this is spent on projects larger than US $1 billion
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/industries/i-3.png') }}" alt="Consulting"
                    class="img-fluid service-img">
            </div>
            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    The performance of large capital projects across sectors has been historically poor and
                    prone to overruns. Troublingly, large capital projects that are completed on schedule and within
                    budget are the exception, not the rule.
                </p>
                <p class="color-dark-2 mb-8">
                    With many years' experience working on complex projects and transactions, our team brings together 
                    world-class best practice in the domain of infrastructure projects and assets operation.
                </p>
                <p class="color-dark-2 mb-8">
                    We increase the collaboration of your teams and optimize your project organizations with the right capabilities for capital excellence, 
                    and apply best-in-breed digital technologies that are changing the way projects are planned, built, and operated.
                </p>

                 <p class="color-dark-2 mb-8">
                    We can help to streamline all business processes required to support Engineering, Procurement, Construction projects execution,
                    to then hand over all relevant documents and information to their Asset management for long term operations and maintenance.
                </p>
            </div>

            <div class="col-xl-7">
               
                <p class="color-dark-2 mb-8">
                    Planning and managing documents and information exchange among owners, contractors and sub-contractors in 
                    a flexible and organized manner are what we believe we can help you to do best.
                </p>

                <p class="color-dark-2 mb-8">
                Industries we support:
                </p>
                <ul class="list-unstyled m-t-0 p-y-1">
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Engineering & Construction</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Transportation Infrastructure</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Real Estate</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Transmission & Distribution</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Government</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Project Management Services</li>
                </ul>
            </div>
            <div class="col-xl-5 d-flex flex-column">
                <div class="service-slider-wrap position-relative overflow-hidden rounded" style="aspect-ratio: 16/9;">
                    <div class="service-slider-track d-flex h-100" id="serviceTrack"
                        style="transition: transform 0.6s cubic-bezier(0.77, 0, 0.175, 1);">
                        <img src="{{ asset('assets/media/industries/i-3-1.png') }}" alt="Engineering & Construction" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-3-2.png') }}" alt="Transportation Infrastructure" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-3-3.png') }}" alt="Real Estate" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-3-4.png') }}" alt="Transmission & Distribution" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-3-5.png') }}" alt="Government" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-3-5.png') }}" alt="Project Management Services" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                    </div>

                    <button class="service-slider-btn prev" onclick="serviceSlidePrev()">&#8249;</button>
                    <button class="service-slider-btn next" onclick="serviceSlideNext()">&#8250;</button>
                    <span class="service-slider-counter" id="serviceCounter">1 / 6</span>
                </div>

                <div class="service-slider-dots d-flex justify-content-center gap-2 mt-2" id="serviceDots"></div>
            </div>
        </div>
    </div>
</section>
<style>
.service-slider-wrap { background: #f0f0f0; }
.service-slider-btn {
    position: absolute; top: 50%; transform: translateY(-50%);
    background: rgba(0,0,0,0.35); border: none; color: #fff;
    width: 36px; height: 36px; border-radius: 50%;
    font-size: 20px; line-height: 1; cursor: pointer; z-index: 10;
    transition: background 0.2s;
}
.service-slider-btn:hover { background: rgba(0,0,0,0.6); }
.service-slider-btn.prev { left: 10px; }
.service-slider-btn.next { right: 10px; }
.service-slider-counter {
    position: absolute; bottom: 10px; right: 12px;
    font-size: 12px; color: #fff;
    background: rgba(0,0,0,0.4); padding: 2px 8px; border-radius: 20px;
}
.service-slider-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: #ccc; border: none; cursor: pointer;
    padding: 0; transition: background 0.3s, transform 0.3s;
}
.service-slider-dot.active { background: #333; transform: scale(1.3); }
</style>

<script>
(function() {
    const track = document.getElementById('serviceTrack');
    const dotsWrap = document.getElementById('serviceDots');
    const counter = document.getElementById('serviceCounter');
    const total = 5;
    let current = 0, timer;

    const dots = Array.from({length: total}, (_, i) => {
        const d = document.createElement('button');
        d.className = 'service-slider-dot' + (i === 0 ? ' active' : '');
        d.onclick = () => goTo(i);
        dotsWrap.appendChild(d);
        return d;
    });

    function goTo(n) {
        dots[current].classList.remove('active');
        current = (n + total) % total;
        track.style.transform = `translateX(-${current * 100}%)`;
        dots[current].classList.add('active');
        counter.textContent = `${current + 1} / ${total}`;
        clearInterval(timer);
        timer = setInterval(() => goTo(current + 1), 3500);
    }

    window.serviceSlidePrev = () => goTo(current - 1);
    window.serviceSlideNext = () => goTo(current + 1);

    timer = setInterval(() => goTo(current + 1), 3500);
})();
</script>
@endsection