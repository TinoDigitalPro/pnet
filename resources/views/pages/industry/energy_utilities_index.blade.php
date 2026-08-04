@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner energy_utilities-banner">
    <div class="container">
        <h2 class="title">Energy & Utilities</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting e_and_u">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    Global primary energy demand plateaus around 2030 after more a century of
                     rapid growth, predominantly driven by the penetration of renewable sources in the energy mix
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-1-1.jpg') }}" alt="Consulting"
                    class="img-fluid service-img">
            </div>
            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    Each energy system is going through rapid transitions that will bring important
                     changes to the way we fuel our cars, heat our homes, and power our industries.
                </p>
                <p class="color-dark-2 mb-8">
                    Over the coming years, organizations operating in the energy supply chain, from 
                    natural resources extraction to consumption, will face different yet concurrent challenges.
                </p>
                <p class="color-dark-2 mb-8">
                    Oil & gas upstream operators must evaluate the value of each asset 
                    to then assign a strategic mission to each one, defining which activities to focus on.
                </p>

                 <p class="color-dark-2 mb-8">
                    The distribution of electricity used to be a stable, seemingly risk-free business. Things are rapidly 
                    changing: beside the burden of an aging asset base, grids need to be adapted to new power flows as the 
                    energy transition progresses, while maintaining or raising standards for service quality.
                </p>
            </div>

            <div class="col-xl-7">
               
                <p class="color-dark-2 mb-8">
                    Utilities need to work harder to stay competitive. Often, work is split 
                    between multiple departments or operating companies, 
                    resulting in fragmentation, a lack of scale, and inconsistencies in approach.
                </p>
                <p class="color-dark-2 mb-8">
                    Many operators in the Energy & Utilities industry are also owners of capital intensive projects.
                    To run their operations, these organizations need to manage a high 
                    volume of communications & documents exchange with their business counterparts.
                </p>

                <p class="color-dark-2 mb-8">
                We help organizations across industries, to organize and run projects, 
                and/or to improve document & correspondence intensive information flows.
                </p>

                <p class="color-dark-2 mb-8">
                Industries we support:
                </p>
                <ul class="list-unstyled m-t-0 p-y-1">
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Oil & Gas</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Power Generation</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Transmission & Distribution</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Trading</li>

                </ul>
            </div>
            <div class="col-xl-5 d-flex flex-column">
                <div class="service-slider-wrap position-relative overflow-hidden rounded" style="aspect-ratio: 16/9;">
                    <div class="service-slider-track d-flex h-100" id="serviceTrack"
                        style="transition: transform 0.6s cubic-bezier(0.77, 0, 0.175, 1);">
                        <img src="{{ asset('assets/media/industries/i-1-2.png') }}" alt="Oil & Gas" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-1-3.png') }}" alt="Power Generation" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-1-4.png') }}" alt="Transmission & Distribution" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-1-5.png') }}" alt="Trading" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                    </div>

                    <button class="service-slider-btn prev" onclick="serviceSlidePrev()">&#8249;</button>
                    <button class="service-slider-btn next" onclick="serviceSlideNext()">&#8250;</button>
                    <span class="service-slider-counter" id="serviceCounter">1 / 4</span>
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