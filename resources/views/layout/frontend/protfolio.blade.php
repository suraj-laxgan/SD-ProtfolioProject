     <section id="portfolio" class="portfolio section">
         <!-- Section Title -->
         <div class="container section-title" data-aos="fade-up">
             <h2>Portfolio</h2>
             <div class="title-shape">
                 <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor"
                         stroke-width="2"></path>
                 </svg>
             </div>
             <p>{{$profiles->protfolio_header}}</p>
         </div><!-- End Section Title -->

         <div class="container" data-aos="fade-up" data-aos-delay="100">

             <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                 <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
                     <ul class="portfolio-filters isotope-filters">
                         <li data-filter="*" class="filter-active">All Work</li>
                         @forelse ($projectcategories as $projectcategory)
                             <li data-filter=.{{ $projectcategory->name }}>{{ $projectcategory->name }}</li>
                         @empty
                         @endforelse
                     </ul>
                 </div>

                 <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                     @forelse ($projects as $project)
                         <div class="col-lg-3 col-md-3 portfolio-item isotope-item {{ $project->getCategory->name }}">
                             <div class="portfolio-card">

                                 <div class="portfolio-content">
                                     <span class="category">{{ $project->getCategory->name }}</span>
                                     <h3>{{ $project->title }}</h3>
                                     <p>{!! nl2br(e($project->description)) !!}</p>
                                     <div style="padding: 10px">
                                         <ul class="technology-pills">
                                             @foreach ($project->technologies as $technology)
                                                 <li>{{ $technology->name }}</li>
                                             @endforeach
                                         </ul>
                                     </div>
                                 </div>

                             </div>
                         </div><!-- End Portfolio Item -->
                     @empty
                     @endforelse

                     {{-- @forelse ($projects as $project)
                         <div
                             class="col-lg-3 col-md-6 mb-4 portfolio-item isotope-item {{ $project->getCategory->name }}">
                             <div class="portfolio-card h-100 d-flex flex-column">
                                 <div class="portfolio-content d-flex flex-column flex-grow-1">
                                     <span class="category text-muted small">{{ $project->getCategory->name }}</span>
                                     <h3 class="mt-2">{{ $project->title }}</h3>

                                     <!-- Description with limit -->
                                     <p class="description-text flex-grow-1">
                                         {{ Str::limit($project->description, 120) }}
                                     </p>

                                     <div class="mt-auto">
                                         <ul class="technology-pills">
                                             @foreach ($project->technologies as $technology)
                                                 <li>{{ $technology->name }}</li>
                                             @endforeach
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     @empty
                         <p>No projects found.</p>
                     @endforelse --}}

                 </div><!-- End Portfolio Container -->
             </div>
         </div>
     </section>
