@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner ms-banner">
    <div class="container">
        <h2 class="title">Manufacturing & Supply Chain</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting e_and_u">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    Manufacturing is a vital source of innovation and competitiveness, making outsized
                     contributions to research and development, exports, and productivity growth.
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/industries/i-2.png') }}" alt="Manufacturing & Supply Chain"
                    class="img-fluid service-img">
            </div>


            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    Each manufacturing industry has different drivers for success. Some of them are more capital-driven; some others are more knowledge-intensive.
                </p>
                <p class="color-dark-2 mb-8">
                    To deliver products to the market, manufacturers must adhere to extremely tight and stressful timelines. 
                    Projects are typically time, cost, and quality sensitive, and as a result of it, they tend to be tightly controlled and rigid.
                </p>
                <p class="color-dark-2 mb-8">
                    Such tight control implies poor ability to manage scope changes or to introduce adjustments as the project progresses. 
                    Many of these projects require a design commitment early on, with little flexibility to adjust as new information emerges or requirements change.
                </p>

                 <p class="color-dark-2 mb-8">
                    Manufacturers that miss deadlines risk losing out on millions of dollars in potential revenue and profit; therefore, 
                    the future of your business success will be critically dependent upon the response strategies you choose to adopt.
                </p>
            </div>

            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    At ProcessNet, we apply digital technologies to generate more value across your entire enterprise. 
                    We streamline and optimize your processes to achieve significant and sustainable savings and quality improvement.
                </p>

                <p class="color-dark-2 mb-8">
                Industries we support:
                </p>
                <ul class="list-unstyled m-t-0 p-y-1">
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Industrial Equipment</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Machinery</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Metals & Mining</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> Shipbuilding</li>
                    <li><i class="fa fa-asterisk color-green" aria-hidden="true"></i> High Tech Components</li>
                </ul>
            </div>
            <div class="col-xl-5 d-flex flex-column">
                <div class="service-slider-wrap position-relative overflow-hidden rounded" style="aspect-ratio: 16/9;">
                    <div class="service-slider-track d-flex h-100" id="serviceTrack"
                        style="transition: transform 0.6s cubic-bezier(0.77, 0, 0.175, 1);">
                        <img src="{{ asset('assets/media/industries/i-2-1.png') }}" alt="Industrial Equipment" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-2-2.png') }}" alt="Machinery" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-2-3.png') }}" alt="Metals & Mining" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-2-4.png') }}" alt="Shipbuilding" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
                        <img src="{{ asset('assets/media/industries/i-2-5.png') }}" alt="High Tech Components" class="img-fluid service-img flex-shrink-0" style="min-width:100%; object-fit:cover;">
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