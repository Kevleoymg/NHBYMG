<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationRentalController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CommercialEndeavorsController;
use App\Http\Controllers\CommercialEndeavorsInformationController;
//use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ListFormController;
use App\Http\Controllers\OurDepartmentsController;
use App\Http\Controllers\OurExecutivesController;
use App\Http\Controllers\OurProjectsController;
use App\Models\Career;
use App\Models\CommercialEndeavors;
use App\Models\OurDepartments;
use App\Models\OurExecutives;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', [AboutUsController::class, 'aboutus_info'])->name('about-us');


Route::get('/mission-and-vision', [AboutUsController::class, 'mission_vision_info'])->name('mission-and-vision');

Route::get('/our-executives', [OurExecutivesController::class, 'ourexecutives_info'])->name('our-executives');


Route::get('/our-department', [OurDepartmentsController::class, 'ourdepartment_info'])->name('our-department');

Route::get('/commercial-endeavors', [CommercialEndeavorsController::class, 'commercial_info'])->name('commercial-endeavors');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::post('/careers/apply', [CareerController::class, 'submitApplication'])->name('careers.apply');

Route::get('/faq', [FaqsController::class, 'faq_info'])->name('faq');

Route::get('/our-services', function () {
    return view('our-services');
})->name('our-services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/apply', [ContactController::class, 'submitApplication'])->name('contact.apply');

//application for rental Form
Route::get('/application-for-rental', function () {
    return view('application-for-rental');
})->name('application-for-rental');

Route::post('/application-for-rental/apply', [ApplicationRentalController::class, 'submitApplication'])->name('application-for-rental.apply');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'restrictRole:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');



    //About Us
    Route::prefix('/admin/about-us')->group(function () {

        Route::get('/', [AboutUsController::class, 'index'])->name('admin.aboutus.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [AboutUsController::class, 'create'])->name('admin.aboutus.create');

        // Edit
        Route::get('/edit/{id}', [AboutUsController::class, 'edit'])->name('admin.aboutus.edit');

        // store
        Route::post('/', [AboutUsController::class, 'storeAboutUs'])->name('admin.aboutus.store');

        ///Update
        Route::put('/update-about-us/{id}', [AboutUsController::class, 'update'])->name('admin.aboutus.update');
    });

    //Our Executive
    Route::prefix('/admin/our-executives')->group(function () {


        Route::get('/', [OurExecutivesController::class, 'index'])->name('admin.our-executives.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [OurExecutivesController::class, 'create'])->name('admin.our-executives.create');

        Route::post('/', [OurExecutivesController::class, 'store'])->name('admin.our-executives.store');

        // Edit
        Route::get('/edit/{id}', [OurExecutivesController::class, 'edit'])->name('admin.our-executives.edit');

        ///Update
        Route::put('/update-our-executives/{id}', [OurExecutivesController::class, 'update'])->name('admin.our-executives.update');

        ///delete
        Route::delete('/delete-our-executives/{id}/delete', [OurExecutivesController::class, 'destroy'])->name('admin.our-executives.destroy');
    });

    //Commercial Endeavors
    Route::prefix('/admin/commercial-endeavors')->group(function () {

        Route::get('/', [CommercialEndeavorsController::class, 'index'])->name('admin.commercial-endeavors.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [CommercialEndeavorsController::class, 'create'])->name('admin.commercial-endeavors.create');

        Route::post('/', [CommercialEndeavorsController::class, 'store'])->name('admin.commercial-endeavors.store');

        // Edit
        Route::get('/edit/{id}', [CommercialEndeavorsController::class, 'edit'])->name('admin.commercial.endeavors.edit');

        ///Update
        Route::put('/update-commercial/{id}', [CommercialEndeavorsController::class, 'update'])->name('admin.commercial.endeavors.update');

        ///delete
        Route::delete('/delete-commercial/{id}/delete', [CommercialEndeavorsController::class, 'destroy'])->name('admin.commercial.endeavors.destroy');
    });

    //Commercial Endeavors Information Page
    Route::prefix('/admin/commercial-endeavors/information')->group(function () {
        //page information
        Route::get('/', [CommercialEndeavorsInformationController::class, 'index'])->name('admin.commercial-endeavors.information.index');

        //Show the form for creating new front-end content.
        Route::get('/create', [CommercialEndeavorsInformationController::class, 'create'])->name('admin.commercial-endeavors.information.create');

        Route::post('/', [CommercialEndeavorsInformationController::class, 'store'])->name('admin.commercial-endeavors.information.store');

        // Edit
        Route::get('/edit-info_page/{id}', [CommercialEndeavorsInformationController::class, 'edit'])->name('admin.commercial.endeavors.information.edit');

        ///Update
        Route::put('/update-commercial-info-page/{id}', [CommercialEndeavorsInformationController::class, 'update'])->name('admin.commercial.endeavors.information.update');

        ///delete
        Route::delete('/delete-commercial-info-page/{id}/delete', [CommercialEndeavorsInformationController::class, 'destroy'])->name('admin.commercial.endeavors.information.destroy');
    });

    //Career Admin
    Route::prefix('/admin/career')->group(function () {
        //page information
        Route::get('/', [CareerController::class, 'index'])->name('admin.career.index');
    });

    //FAQS
    Route::prefix('/admin/faqs')->group(function () {
        Route::get('/', [FaqsController::class, 'index'])->name('admin.faqs.index');
        Route::get('/create', [FaqsController::class, 'create'])->name('admin.faqs.create');
        Route::post('/', [FaqsController::class, 'store'])->name('admin.faqs.store');
        Route::get('/{faq}', [FaqsController::class, 'show'])->name('admin.faqs.show');
        Route::get('/{faq}/edit', [FaqsController::class, 'edit'])->name('admin.faqs.edit');
        Route::put('/{faq}', [FaqsController::class, 'update'])->name('admin.faqs.update');
        Route::delete('/{faq}', [FaqsController::class, 'destroy'])->name('admin.faqs.destroy');
    });

    //OurDeparment
    Route::prefix('/admin/our-department')->group(function () {
        Route::get('/', [OurDepartmentsController::class, 'index'])->name('admin.our-department.index');
        Route::get('/create', [OurDepartmentsController::class, 'create'])->name('admin.our-department.create');
        Route::post('/', [OurDepartmentsController::class, 'store'])->name('admin.our-department.store');

        Route::get('/edit/{id}', [OurDepartmentsController::class, 'edit'])->name('admin.our-department.edit');

        Route::put('/update/{id}', [OurDepartmentsController::class, 'update'])->name('admin.our-department.update');

        Route::delete('/{id}/delete', [OurDepartmentsController::class, 'destroy'])->name('admin.our-department.destroy');

        //delete photo in post
        Route::get('/edit/photo/{id}', [OurDepartmentsController::class, 'destroyPhoto'])->name('admin.our-department.deletephoto');
    });

    //OurProjects
    Route::prefix('/admin/our-projects')->group(function () {
        Route::get('/', [OurProjectsController::class, 'index'])->name('admin.our-projects.index');

        Route::get('/create', [OurProjectsController::class, 'create'])->name('admin.our-projects.create');

        Route::post('/', [OurProjectsController::class, 'store'])->name('admin.our-projects.store');

        Route::get('/edit/{id}', [OurProjectsController::class, 'edit'])->name('admin.our-projects.edit');

        Route::put('/update/{id}', [OurProjectsController::class, 'update'])->name('admin.our-projects.update');

        Route::delete('/{id}/delete', [OurProjectsController::class, 'destroy'])->name('admin.our-projects.destroy');
    });
});




//Rutas forms
Route::middleware(['auth:sanctum', 'restrictRole:user,admin'])->group(function () {
    Route::get('/list-form', [ListFormController::class, 'index'])->name('listform.index');
});