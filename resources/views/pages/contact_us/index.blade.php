@extends('layouts.template')

@section('content')

<!-- Page Banner start -->
<div class="page-start-banner contact-banner">
    <div class="container">
    </div>
</div>

<!-- Contact Area Start  -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contactform-block">
                    <h2 class="">Contact ProcessNet</h2>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="post" action="{{ route('contact_us.submit') }}" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-12">
                                    <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="First Name" value="{{ old('firstname') }}">
                                    @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-12">
                                    <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Last Name" value="{{ old('lastname') }}">
                                    @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-12">
                                    <input type="email" class="form-control" id="email" name="email" required placeholder="Email" value="{{ old('email') }}">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-12">
                                    <input type="text" class="form-control" id="phone" name="phone" required placeholder="Phone Number" value="{{ old('phone') }}">
                                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-8">
                                    <textarea class="form-control" required name="message" placeholder="Message">{{ old('message') }}</textarea>
                                    @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="legal-consent-container ptop-10">
                            <div class="hs-richtext">
                                <p>ProcessNet is committed to protecting and respecting your privacy, and we’ll only use your personal information to administer your account and to provide the products and services you requested from us. From time to time, we would like to contact you about our products and services, as well as other content that may be of interest to you. If you consent to us contacting you for this purpose, please tick below to say how you would like us to contact you:</p>
                            </div>


                            <div class="check-form">
                                <input type="checkbox" id="comms">
                                <label for="comms">I agree to receive other communications from ProcessNet.</label>
                            </div>

                            <div class="hs-richtext">
                                <p>In order to provide you the content requested, we need to store and process your personal data. If you consent to us storing your personal data for this purpose, please tick the checkbox below.</p>
                            </div>

                            <div class="check-form">
                                <input type="checkbox">
                                <label for=""> I agree to allow ProjectVault to store and process my personal data.</label><span class="hs-form-required">*</span>
                            </div>

                            <div class="hs-richtext">
                                <p>You can unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices, and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.</p>
                            </div>
                        </div>


                        <button type="submit" class="cus-btn bordered" id="submitBtn">Send Message</button>
                        <!-- Alert Message -->
                        <div id="message" class="alert-msg mt-3"></div>
                    </form>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const contactForm = document.querySelector('.contact-form');
                            contactForm.addEventListener('submit', function(e) {
                                e.preventDefault();
                                const form = this;
                                const btn = document.getElementById('submitBtn');
                                const originalText = btn.innerHTML;
                                
                                // Show loader
                                btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';
                                btn.disabled = true;
                                
                                // Clear previous messages and errors
                                document.getElementById('message').innerHTML = '';
                                form.querySelectorAll('.text-danger.ajax-error').forEach(el => el.remove());

                                fetch(form.action, {
                                    method: 'POST',
                                    body: new FormData(form),
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'Accept': 'application/json'
                                    }
                                })
                                .then(response => {
                                    if (!response.ok && response.status !== 422) {
                                        throw new Error('Network response was not ok');
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    btn.innerHTML = originalText;
                                    btn.disabled = false;
                                    
                                    if (data.success) {
                                        document.getElementById('message').innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                                        form.reset();
                                    } else if (data.errors || data.message) {
                                        // Laravel validation errors (422)
                                        let errors = data.errors || {};
                                        for (const [key, messages] of Object.entries(errors)) {
                                            const input = form.querySelector(`[name="${key}"]`);
                                            if (input) {
                                                const errorSpan = document.createElement('span');
                                                errorSpan.className = 'text-danger ajax-error';
                                                errorSpan.style.display = 'block';
                                                errorSpan.innerText = messages[0];
                                                input.parentNode.appendChild(errorSpan);
                                            }
                                        }
                                        if (Object.keys(errors).length === 0 && data.message) {
                                             document.getElementById('message').innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
                                        }
                                    }
                                })
                                .catch(error => {
                                    btn.innerHTML = originalText;
                                    btn.disabled = false;
                                    document.getElementById('message').innerHTML = `<div class="alert alert-danger">An error occurred while sending the message. Please try again later.</div>`;
                                });
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-block">
                    <h3>GET IN TOUCH WITH US</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="block">
                                <h6>Address:</h6>
                                <p>ProcessNet <br>
                                    via Carducci 39,<br> 20099 Sesto San Giovanni (MI),<br> Italy
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="block">
                                <h6 class="block-title">Email:</h6>
                                <a href="mailto:info@processnet.eu" class="mail">info@processnet.eu</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3089.778504936098!2d9.223547311977141!3d45.5303266289033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c72e8442a8ad%3A0x325714f922fcbd6a!2sVia%20Giosu%C3%A8%20Carducci%2C%2039%2C%2020099%20Sesto%20San%20Giovanni%20MI!5e1!3m2!1sen!2sit!4v1778705431628!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End  -->


@endsection