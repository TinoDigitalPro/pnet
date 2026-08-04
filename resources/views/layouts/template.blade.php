<!DOCTYPE html>
<html lang="en">

    <head>
        @include('includes.head')
    </head>

    <body class="ui-smooth-scroll">
        <!-- Preloader -->
        <section>
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                            
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                            
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            
                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>

                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>
                            <span data-text-preloader="" class="letters-loading">
                            </span>

                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                        </div>
                    </div>	
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                </div>
            </div>
        </section>
        <!-- Main Wrapper Start -->
        <div id="main-wrapper" class="main-wrapper overflow-hidden">
            <div id="scroll-container">
                <!-- Header Area Start -->
                @include('includes.header')
                <!-- Header Area end -->
    
                @yield('content')
    
                <!-- footer Area start -->
                @include('includes.footer')
                <!-- footer Area end -->
            </div>
        </div>
        
        <!-- Jquery Js -->
        <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-validator.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/smooth-scrollbar.js') }}"></script>
        <!-- Site Scripts -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

    </body>

</html>