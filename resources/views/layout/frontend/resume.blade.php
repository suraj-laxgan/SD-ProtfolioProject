 <section id="resume" class="resume section">

     <!-- Section Title -->
     <div class="container section-title" data-aos="fade-up">
         <h2>Resume</h2>
         <div class="title-shape">
             <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                 <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor"
                     stroke-width="2"></path>
             </svg>
         </div>
         <p>
             {{ $profiles->resume_header }}
         </p>
     </div><!-- End Section Title -->

     <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row">
             <div class="col-12">
                 <div class="resume-wrapper">
                     <div class="resume-block" data-aos="fade-up">
                         <h2>Work Experience</h2>
                         <p class="lead">Experienced backend developer specializing in Laravel, REST API development,
                             database architecture, and scalable application design.</p>

                         <div class="timeline">
                             @forelse ($exprences as $exprence)
                                 <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                                     <div class="timeline-left">
                                         <h4 class="company">{{ $exprence->company_name }}</h4>
                                         <span class="period">{{ $exprence->start_date ? $exprence->start_date->format('F-Y') : 'N/A' }} - {{ $exprence->end_date ? $exprence->end_date->format('F-Y') : 'Current' }}  </span>
                                     </div>
                                     <div class="timeline-dot"></div>
                                     <div class="timeline-right">
                                         <h3 class="position">{{ $exprence->position }}</h3>
                                         <p class="description">
                                            {{-- {{ $exprence->description }} --}}
                                          {!! str_replace('. ', ".<br>", $exprence->description) !!}
                                         </p>
                                     </div>
                                 </div>
                             @empty
                               
                             @endforelse
                         </div>
                     </div>

                     <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
                         <h2>My Education</h2>
                         <p class="lead">{{ $profiles->edu_header }}</p>
                         <div class="timeline">
                            @forelse ($educations as $education)
                                 <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                                 <div class="timeline-left">
                                     <h4 class="company">{{ $education->institution }}</h4>
                                     <span class="period">{{ $education->start_year }}-{{ $education->end_year }}</span>
                                 </div>
                                 <div class="timeline-dot"></div>
                                 <div class="timeline-right">
                                     <h3 class="position">{{ $education->degree }} in {{ $education->field_of_study }} </h3>
                                     {{-- <p class="description">Curabitur ullamcorper ultricies nisi nam eget dui etiam
                                         rhoncus maecenas tempus.</p> --}}
                                 </div>
                             </div>
                            @empty
                                
                            @endforelse
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

 </section>
