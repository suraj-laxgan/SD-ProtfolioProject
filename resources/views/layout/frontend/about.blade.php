 <section id="about" class="about section light-background">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>About</h2>
         <div class="title-shape">
             <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                 <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor"
                     stroke-width="2"></path>
             </svg>
         </div>
         <p>{{$profiles->about_header}}</p>
     </div><!-- End Section Title -->

     <div class="container" data-aos="fade-up" data-aos-delay="100">

         {{-- <div class="row align-items-center"> --}}
         <div class="row">
             <div class="col-lg-3 position-relative" data-aos="fade-right" data-aos-delay="200">
                 <div class="about-image">
                     <img src="{{ asset('frontend/assets/img/profile/profile-square-2.webp') }}" alt="Profile Image"
                         class="img-fluid rounded-4">
                 </div>
             </div>

             <div class="col-lg-9" data-aos="fade-left" data-aos-delay="300">
                 <div class="about-content">
                     <span class="subtitle">About Me</span>

                     <h2>{{$profiles->about_title}}</h2>

                     <p class="lead mb-4">{{$profiles->about_subtitle}}</p>

                     <p class="mb-4">{{$profiles->about_description}}</p>
                 </div>
             </div>
             <div class="personal-info">
                 <div class="row g-4">
                     <div class="col-6">
                         <div class="info-item">
                             <span class="label">Name</span>
                             <span class="value">{{$profiles->name}}</span>
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="info-item">
                             <span class="label">Phone</span>
                             <span class="value">+91 {{$profiles->phone}}</span>
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="info-item">
                             <span class="label">Age</span>
                             <span class="value">{{$profiles->age}} Years</span>
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="info-item">
                             <span class="label">Email</span>
                             <span class="value">{{$profiles->email}}</span>
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="info-item">
                             <span class="label">Specialization</span>
                             <span class="value">Backend Development</span>
                         </div>
                     </div>

                     <div class="col-6">
                         <div class="info-item">
                             <span class="label">Nationality</span>
                             <span class="value">Indian</span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

 </section>
