@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner tec-banner">
    <div class="container">
        <h2 class="title">Technology</h2>
    </div>
</div>
<!-- Page Banner end -->

<section class="blog-sec py-40 s-consulting">
    <div class="container">
        <div class="row row-gap-4">
            <div col-xl-12>
                <h5 class="medium-black mb-16 fw-700 text-center">
                    By using available technology to the full, you can significantly
                     reduce both costs and risks of your projects and make your business more profitable.
                </h5>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-2.jpg') }}" alt="Consulting"
                    class="img-fluid tec-img">
            </div>
            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    Most users spend their time using different applications and content sources with the consequent 
                    loss of productivity. Moreover, a lot of information is still filed on personal desktops or sprawled in
                     content silos, with the consequences we all know. ProcessNet's approach for project-driven business
                      processes leverages OpenText's Connected Business Workspace technology. A Business Workspace is a Digital
                       Twin to a real-world object like a customer, an employee, or a project, which is managed in a business 
                       application. Workspace technology provides the ability to aggregate content, data, people, tasks related to a common business process. 
                    This enables users to manage their critical information at the enterprise, line of business, and personal level by bridging silos. </p>
            </div>

            <div class="col-xl-7">
                <p class="color-dark-2 mb-8">
                    Moreover, OpenText technology allows users to access content in the context they are familiar with 
                    - e.g. the digital business platforms commonly used in their organization, such as SAP®, Microsoft®, Salesforce®, 
                    and Oracle®. We help our customers to use operating models and functionalities that leverage features already embedded
                     on OpenText® digital business platforms and to integrate them with their existing digital landscape. We can deliver 
                     ProjectVault's pre-packaged solutions for
                     Opentext Extended ECM when organizations require additional features to differentiate their business.
                </p>
            </div>
            <div class="col-xl-5 d-flex">
                <img src="{{ asset('assets/media/services/s-2-2.png') }}" alt="Consulting"
                    class="img-fluid tec-img">
            </div>
        </div>
    </div>
</section>

<section class="services pb-40">
    <div class="container">
        <div class="row align-items-stretch consulting">
            <div class="col-xl-4 col-md-4 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">crowdsource</span>
                    <h6 class="h6 pt-2">Increase user productivity through access and share information</h6>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">flash_on</span>
                    <h6 class="h6 pt-2">Increase process productivity through content in context technology</h6>
                </div>
            </div>

            <div class="col-xl-4 col-md-4 col-12 d-flex">
                <div class="service-box text-center">
                    <span class="material-symbols-outlined">verified_user</span>
                    <h6 class="h6 pt-2">Improve information control & governance around a single source of truth</h6>
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

    .tec-img {
        width: 100%;
        height: 245px;
        object-fit: cover;
        border-radius: 12px;
    }

    .consulting .service-box .material-symbols-outlined{
        font-size: 105px !important;
    }
</style>

@endsection