<section id="contact" class="contact section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="content" data-aos="fade-up" data-aos-delay="200">
                    <div class="section-category mb-3">Contact</div>
                    <h2 class="display-5 mb-4">{{ $profiles->name }} <br>{{ $profiles->contact_title }}</h2>
                    <p class="lead mb-4">{{ $profiles->contact_sub_title }}</p>

                    <div class="contact-info mt-5">
                        <div class="info-item d-flex mb-3">
                            <i class="bi bi-envelope-at me-3"></i>
                            <span>{{ $profiles->email }}</span>
                        </div>

                        <div class="info-item d-flex mb-3">
                            <i class="bi bi-telephone me-3"></i>
                            <span>+91{{ $profiles->phone }}</span>
                        </div>

                        <div class="info-item d-flex mb-4">
                            <i class="bi bi-geo-alt me-3"></i>
                            <span>{{ $profiles->contact_address }}</span>
                        </div>

                        <a href="#" class="map-link d-inline-flex align-items-center">
                            Open Map
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body p-4 p-lg-5">
                        {{-- <form id="contactForm"> --}}
                        {{-- <form id="contactForm" action="forms/contact.php" method="post" class="php-email-form"> --}}
                        {{-- <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-12 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-submit w-100">Submit
                                        Message</button>
                                </div>

                            </div>
                        </form> --}}
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <div class="row gy-4">

                                <div class="col-12">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-12 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-submit w-100">Send
                                        Message</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
@push('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> --}}
    <script>
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            $('#submitBtn').prop('disabled', true);

            $.ajax({
                url: "{{ route('contact.store') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    $('#successMsg').html('Message sent successfully!');
                    $('#contactForm')[0].reset();
                },
                error: function() {
                    alert('Something went wrong');
                },
                complete: function() {
                    $('#submitBtn').prop('disabled', false);
                }
            });
        });
    </script>
@endpush
