<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrondEndDisplayController;
use App\Http\Controllers\SkillCategoryController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\ProjectTechnologyController;
use App\Http\Controllers\ContactController;


/**
 *  Frontend route list :
*/

    Route::get('/', [FrondEndDisplayController::class, 'index'])->name('insex');



/**
 *  Admin Dashboard route list :
 */

    Route::get('/dashboard', function () {
            return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        /*
            User Profile route :
        */
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


        /*
            Website Profile route :
        */
            Route::get('/ws-profile/create', [ProfileController::class, 'wsCreate'])->name('wsprofile.create');
            Route::get('/ws-profile/list', [ProfileController::class, 'wsList'])->name('wsprofile.list');
            Route::post('/ws-profile/store', [ProfileController::class, 'wsStore'])->name('wsprofile.store');
            Route::get('/ws-profile/{email}', [ProfileController::class, 'wsEdit'])->name('wsprofile.edit');
            Route::patch('/ws-profile', [ProfileController::class, 'wsUpdate'])->name('wsprofile.update');
            Route::delete('/ws-profile', [ProfileController::class, 'wsDestroy'])->name('wsprofile.destroy');


        /*
            Skill category route 
        */
            Route::get('/skill-category/index', [SkillCategoryController::class, 'index'])->name('skill_category.index');
            Route::get('/skill-category/create', [SkillCategoryController::class, 'create'])->name('skill_category.create');
            Route::post('/skill-category/store', [SkillCategoryController::class, 'store'])->name('skill_category.store');
            Route::get('/skill-category/edit/{id}', [SkillCategoryController::class, 'edit'])->name('skill_category.edit');
            Route::patch('/skill-category/update', [SkillCategoryController::class, 'update'])->name('skill_category.update');
            Route::delete('/skill-category/delete/{id}', [SkillCategoryController::class, 'delete'])->name('skill_category.delete');

        /*
            Skill route 
        */
            Route::get('/skill/index', [SkillController::class, 'index'])->name('skill.index');
            Route::get('/skill/create', [SkillController::class, 'create'])->name('skill.create');
            Route::post('/skill/store', [SkillController::class, 'store'])->name('skill.store');
            Route::get('/skill/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
            Route::patch('/skill/update', [SkillController::class, 'update'])->name('skill.update');
            Route::delete('/skill/delete/{id}', [SkillController::class, 'delete'])->name('skill.delete');

        /*
            Experience route 
        */
            Route::get('/experience/index', [ExperienceController::class, 'index'])->name('experience.index');
            Route::get('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
            Route::post('/experience/store', [ExperienceController::class, 'store'])->name('experience.store');
            Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
            Route::patch('/experience/update', [ExperienceController::class, 'update'])->name('experience.update');
            Route::delete('/experience/delete/{id}', [ExperienceController::class, 'delete'])->name('experience.delete');

        /*
            Education route 
        */
            Route::get('/education/index', [EducationController::class, 'index'])->name('education.index');
            Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
            Route::post('/education/store', [EducationController::class, 'store'])->name('education.store');
            Route::get('/education/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
            Route::patch('/education/update', [EducationController::class, 'update'])->name('education.update');
            Route::delete('/education/delete/{id}', [EducationController::class, 'delete'])->name('education.delete');

        /*
            Project Protfolio route 

        */
            Route::get('/project-technology/index', [ProjectTechnologyController::class, 'index'])->name('project_technology.index');
            Route::get('/project-technology/create', [ProjectTechnologyController::class, 'create'])->name('project_technology.create');
            Route::post('/project-technology/store', [ProjectTechnologyController::class, 'store'])->name('project_technology.store');
            Route::get('/project-technology/edit/{id}', [ProjectTechnologyController::class, 'edit'])->name('project_technology.edit');
            Route::patch('/project-technology/update', [ProjectTechnologyController::class, 'update'])->name('project_technology.update');
            Route::delete('/project-technology/delete/{id}', [ProjectTechnologyController::class, 'delete'])->name('project_technology.delete');


            Route::get('/project-category/index', [ProjectCategoryController::class, 'index'])->name('project_category.index');
            Route::get('/project-category/create', [ProjectCategoryController::class, 'create'])->name('project_category.create');
            Route::post('/project-category/store', [ProjectCategoryController::class, 'store'])->name('project_category.store');
            Route::get('/project-category/edit/{id}', [ProjectCategoryController::class, 'edit'])->name('project_category.edit');
            Route::patch('/project-category/update', [ProjectCategoryController::class, 'update'])->name('project_category.update');
            Route::delete('/project-category/delete/{id}', [ProjectCategoryController::class, 'delete'])->name('project_category.delete');


            Route::get('/project/index', [ProjectController::class, 'index'])->name('project.index');
            Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
            Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
            Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
            Route::patch('/project/update', [ProjectController::class, 'update'])->name('project.update');
            Route::delete('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');

            Route::get('/project-image/index', [ProjectImageController::class, 'index'])->name('project_image.index');
            Route::get('/project-image/create', [ProjectImageController::class, 'create'])->name('project_image.create');
            Route::post('/project-image/store', [ProjectImageController::class, 'store'])->name('project_image.store');
            Route::get('/project-image/edit/{id}', [ProjectImageController::class, 'edit'])->name('project_image.edit');
            Route::patch('/project-image/update', [ProjectImageController::class, 'update'])->name('project_image.update');
            Route::delete('/project-image/delete/{id}', [ProjectImageController::class, 'delete'])->name('project_image.delete');



        /*
            Contact route : 
            
        */
            Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
            Route::delete('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');


        /*
            Blog route : 

            BlogCategoryController
            BlogController
            BlogTagController
            BlogTagMapController
        */

        /*
            Page view or track page route : 

            PageViewController
            
        */

        /*
            SEO route : 

            SeoPageController
            
        */

        /*
            Service route : 

            ServiceController
            
        */

        /*
            Settings route : 

            SettingsController
            
        */

        /*
            Testimonial route : 

            TestimonialController
            
        */

        /*
            Testimonial route : 

            VisitorController
            
        */

        /*
            API Doc route : 

            ApiDocController
            ApiEndPointController
            
        */

            


    });

require __DIR__.'/auth.php';
