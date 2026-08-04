@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner ot-banner">
    <div class="container">
        <h2 class="title">Other Industries</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting e_and_u">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    By their nature all projects have common characteristics, regardless of the industry 
                    and context in which they are being executed.
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/industries/i-4.png') }}" alt="Other Industries"
                    class="img-fluid service-img">
            </div>

            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    The level of complexity, replicability and the context in which a 
                    project is placed in many cases requires an in-depth analysis of the critical aspects of the operational model, mainly when lots of compliance and IT integration aspects come into the picture.
                </p>
                <p class="color-dark-2 mb-8">
                    However, no matter what industry you work within, all projects have objectives, a budget, 
                    timescale and human resources assigned. All projects must be structured in order to ensure maximal operational flexibility, productivity and control.
                </p>
                <p class="color-dark-2 mb-8">
                   Moreover, all projects rely on documents, correspondence, data and other contents on whose quality, availability, updating and timeliness the success of the project depends.
                </p>
            </div>

            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    We help organizations across industries, to organize and run projects, and/or to improve document/correspondence intensive information flows.
                </p>

                <p class="color-dark-2 mb-8">
                Industries we support:
                </p>
                <ul class="list-unstyled m-t-0 p-y-1">
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Banking</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Insurance</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Communication & Media</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Certification Services</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Software & Platform</li>
                </ul>
            </div>
            <div class="col-xl-5 d-flex flex-column">
                <div class="service-slider-wrap position-relative overflow-hidden rounded" style="aspect-ratio: 16/9;">
                    <div class="service-slider-track d-flex h-100" id="serviceTrack"
                        style="transition: transform 0.6s cubic-bezier(0.77, 0, 0.175, 1);">
                        <img src="{{ asset('assets/media/industries/i-4-1.png') }}" alt="Banking" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-4-2.png') }}" alt="Insurance" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-4-3.png') }}" alt="Communication & Media" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-4-4.png') }}" alt="Certification Services" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-4-5.png') }}" alt="Software & Platform" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                    </div>

                    <button class="service-slider-btn prev" onclick="serviceSlidePrev()">&#8249;</button>
                    <button class="service-slider-btn next" onclick="serviceSlideNext()">&#8250;</button>
                    <span class="service-slider-counter" id="serviceCounter">1 / 5</span>
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