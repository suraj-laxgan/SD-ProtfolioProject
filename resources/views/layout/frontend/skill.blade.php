<section id="skills" class="skills section">

    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <div class="title-shape">
            <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor"
                    stroke-width="2"></path>
            </svg>
        </div>

    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-12 col-lg-12 " data-aos="fade-up" data-aos-delay="100">
            <div class="skills-master-container">

                @foreach ($skills as $category)
                    <div class="category-section">
                        <h3 class="category-title">{{ $category->name }}</h3>

                        <p class="category-description">
                            {{ $category->description }}
                        </p>

                        <ul class="skill-pills">
                            @foreach ($category->categorySkill as $skill)
                                <li>{{ $skill->name }}</li>
                            @endforeach
                        </ul>

                        @if (!$loop->last)
                            <hr class="category-divider">
                        @endif
                    </div>
                @endforeach

            </div>
        </div>



    </div>

</section>
