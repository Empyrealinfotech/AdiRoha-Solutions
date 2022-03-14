<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('send-mail', function () {
    \Mail::to(env('MAIL_TO_ADDRESS','info@empyrealinfotech.com'))->cc(env('MAIL_CC_ADDRESS','meram.empyreal@gmail.com'))->send(new \App\Mail\MyTestMail());
    if (\Mail::failures()) {
        return 'failed';
    }
    return 'Mail sent successfully!';
});

Route::group(['prefix' => 'commands'], function () {
    Route::get('/optimize-clear', function() {
        Artisan::call('optimize:clear');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });

    Route::get('/migrate', function() {
        Artisan::call('migrate');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });

    Route::get('/clear-compiled', function() {
        Artisan::call('clear-compiled');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });

    Route::get('/migrate-fresh', function() {
        Artisan::call('migrate:fresh');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });

    Route::get('/seed', function() {
        Artisan::call('db:seed');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });

    Route::get('/db-wipe', function() {
        Artisan::call('db:wipe');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });

    Route::get('/migrate-rollback', function() {
        Artisan::call('migrate:rollback');
        echo '<pre>'.str_replace('\n', "\n", Artisan::output()).'</pre>';
    });
});

Route::group(['as' => 'front.'], function () {
	Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');
	Route::get('/financial-services', [App\Http\Controllers\Front\HomeController::class, 'financial_services'])->name('financial-services');
    Route::get('/training', [App\Http\Controllers\Front\HomeController::class, 'training'])->name('training');
    Route::get('/forcorporate', [App\Http\Controllers\Front\HomeController::class, 'forcorporate'])->name('forcorporate');
    Route::get('/blog', [App\Http\Controllers\Front\HomeController::class, 'blog'])->name('blog');
    Route::get('/about_us', [App\Http\Controllers\Front\HomeController::class, 'about_us'])->name('about_us');
    Route::get('/schedulemeeting', [App\Http\Controllers\Front\HomeController::class, 'schedulemeeting'])->name('schedulemeeting');
    Route::get('/services', [App\Http\Controllers\Front\HomeController::class, 'services'])->name('services');
    Route::get('/industry', [App\Http\Controllers\Front\HomeController::class, 'industry'])->name('industry');
    Route::get('/contactus', [App\Http\Controllers\Front\HomeController::class, 'contactus'])->name('contactus');
    Route::get('/meetingschedul', [App\Http\Controllers\Front\HomeController::class, 'meetingschedul'])->name('meetingschedul');
    Route::get('/coursesindex', [App\Http\Controllers\Front\HomeController::class, 'coursesindex'])->name('coursesindex');
    Route::get('/courses_sucess', [App\Http\Controllers\Front\HomeController::class, 'courses_sucess'])->name('courses_sucess');
    Route::get('/scheduledemo', [App\Http\Controllers\Front\HomeController::class, 'scheduledemo'])->name('scheduledemo');
    Route::get('/downloadpdf', [App\Http\Controllers\Front\HomeController::class, 'downloadpdf'])->name('downloadpdf');
    Route::get('/blog_detail/{id}', [App\Http\Controllers\Front\HomeController::class, 'blog_detail'])->name('blog_detail');




	// Route::get('/hire-dedicated-web-developers', [App\Http\Controllers\Front\HomeController::class, 'hire_dedicated_web_developers'])->name('hire.dedicated.web.developers');
	// Route::get('/hire-dedicated-web-designers', [App\Http\Controllers\Front\HomeController::class, 'hire_dedicated_frontend_developers'])->name('hire.dedicated.frontend.developers');
	// Route::get('/hire-dedicated-full-stack-developers', [App\Http\Controllers\Front\HomeController::class, 'hire_dedicated_full_stack_developers'])->name('hire.dedicated.full.stack.developers');
	// Route::get('/hire-dedicated-mobile-app-developers', [App\Http\Controllers\Front\HomeController::class, 'hire_dedicated_mobile_app_developers'])->name('hire.dedicated.mobile.app.developers');
	// Route::get('/hire-server-administrator', [App\Http\Controllers\Front\HomeController::class, 'hire_server_administrator'])->name('hire.server.administrator');
	// Route::get('/hire-dedicated-qa-engineer', [App\Http\Controllers\Front\HomeController::class, 'hire_dedicated_qa_engineer'])->name('hire.dedicated.qa.engineer');
	// Route::get('/website-design-company', [App\Http\Controllers\Front\HomeController::class, 'website_design_company'])->name('website.design.company');
	// Route::get('/website-development-company', [App\Http\Controllers\Front\HomeController::class, 'website_development_company'])->name('website.development.company');
	// Route::get('/mobile-application-development-company', [App\Http\Controllers\Front\HomeController::class, 'mobile_application_development_company'])->name('mobile.application.development.company');
	// Route::get('/ecommerce-development-company', [App\Http\Controllers\Front\HomeController::class, 'ecommerce_development_company'])->name('ecommerce.development.company');
	// Route::get('/crm-development-company', [App\Http\Controllers\Front\HomeController::class, 'crm_development_company'])->name('crm.development.company');
	// Route::get('/custom-software-development', [App\Http\Controllers\Front\HomeController::class, 'custom_software_development'])->name('custom.software.development');
	// Route::get('/seo-agency', [App\Http\Controllers\Front\HomeController::class, 'seo_agency'])->name('seo.agency');
	// Route::get('/graphics-design-company', [App\Http\Controllers\Front\HomeController::class, 'graphics_design_company'])->name('graphics.design.company');
	// Route::get('/branding-agency', [App\Http\Controllers\Front\HomeController::class, 'branding_agency'])->name('branding.agency');
	// Route::get('/content-writing-service', [App\Http\Controllers\Front\HomeController::class, 'content_writing_service'])->name('content.writing.service');
	// Route::get('/server-administration-service', [App\Http\Controllers\Front\HomeController::class, 'server_administration_service'])->name('server.administration.service');
	// Route::get('/annual-maintenance-service', [App\Http\Controllers\Front\HomeController::class, 'annual_maintenance_service'])->name('annual.maintenance.service');
	// Route::get('/it-consulting-service', [App\Http\Controllers\Front\HomeController::class, 'it_consulting_service'])->name('it.consulting.service');
	// Route::get('/about-us', [App\Http\Controllers\Front\HomeController::class, 'about_us'])->name('about.us');
	// Route::get('/services', [App\Http\Controllers\Front\HomeController::class, 'services'])->name('services');

	// Route::get('/portfolio', [App\Http\Controllers\Front\HomeController::class, 'portfolio'])->name('portfolio');
	// //Route::get('/portfolio/{id}/{page}', [App\Http\Controllers\Front\HomeController::class, 'portfolioBypage'])->name('portfolio.data');
    // Route::post('/portfolio-pagination-data', [App\Http\Controllers\Front\HomeController::class, 'portfolioData'])->name('portfolio.data');

	// Route::get('/blogs', [App\Http\Controllers\Front\HomeController::class, 'blogs'])->name('blogs');
    // Route::get('/blogs/{slug}', [App\Http\Controllers\Front\HomeController::class, 'blogsDetail'])->name('blogs.detail');
    // Route::get('/blogs/category/{slug}', [App\Http\Controllers\Front\HomeController::class, 'blogsByCat'])->name('blogs.by.tag.cat');
    // Route::post('/blogs/category/{id}/data', [App\Http\Controllers\Front\HomeController::class, 'blogsByCatData'])->name('blogs.by.tag.cat.data');

    // Route::post('/blogs-pagination-data', [App\Http\Controllers\Front\HomeController::class, 'blogsData'])->name('blogs.data');

	// Route::get('/contact-us', [App\Http\Controllers\Front\HomeController::class, 'contact_us'])->name('contact.us');
	// Route::post('/contact-us/store', [App\Http\Controllers\Front\HomeController::class, 'contact_us_store'])->name('contact.us.store');
	// Route::get('/privacy-policy', [App\Http\Controllers\Front\HomeController::class, 'privacy_policy'])->name('privacy.policy');
	// Route::get('/terms-and-conditions', [App\Http\Controllers\Front\HomeController::class, 'terms_and_conditions'])->name('terms.and.conditions');

	// Route::post('/inquiry/store', [App\Http\Controllers\Front\HomeController::class, 'inquiry_store'])->name('inquiry.store');
	// Route::post('/news-letter/store', [App\Http\Controllers\Front\HomeController::class, 'news_letter_store'])->name('news.letter.store');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/qxcfthjki', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Auth::routes(['verify' => true, 'logout' => false, 'register' => false]);

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'qxcfthjki','as' => 'control.panel.','middleware' => ['auth','verified']], function () {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	Route::group(['prefix' => 'ajax','as' => 'ajax.'], function() {
        Route::post('/blog-categories-list', [App\Http\Controllers\Admin\AjaxController::class, 'categoryList'])->name('blog.categories.list');
        Route::post('/blog-categories-select', [App\Http\Controllers\Admin\AjaxController::class, 'categorySelect'])->name('blog.categories.select');
        Route::post('/blog-tags-list', [App\Http\Controllers\Admin\AjaxController::class, 'tagList'])->name('blog.tags.list');
        Route::post('/blog-tags-select', [App\Http\Controllers\Admin\AjaxController::class, 'tagSelect'])->name('blog.tags.select');
    });

	Route::group(['prefix' => 'blog-categories'], function() {
        Route::get('/', [App\Http\Controllers\Admin\BlogCategoryController::class, 'index'])->name('blog.categories');
        Route::post('/datatable', [App\Http\Controllers\Admin\BlogCategoryController::class, 'datatable'])->name('blog.categories.data');
        Route::post('/exists', [App\Http\Controllers\Admin\BlogCategoryController::class, 'exists'])->name('blog.categories.exists');
        Route::get('/add', [App\Http\Controllers\Admin\BlogCategoryController::class, 'create'])->name('blog.categories.add');
        Route::post('/store', [App\Http\Controllers\Admin\BlogCategoryController::class, 'store'])->name('blog.categories.store');
        Route::get('/view/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'show'])->name('blog.categories.view');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BlogCategoryController::class, 'edit'])->name('blog.categories.edit');
        Route::post('/destroy', [App\Http\Controllers\Admin\BlogCategoryController::class, 'destroy'])->name('blog.categories.destroy');
        Route::post('/status/change', [App\Http\Controllers\Admin\BlogCategoryController::class, 'statusChange'])->name('blog.categories.status.change');
    });

    Route::group(['prefix' => 'blog-tags'], function() {
        Route::get('/', [App\Http\Controllers\Admin\BlogTagController::class, 'index'])->name('blog.tags');
        Route::post('/datatable', [App\Http\Controllers\Admin\BlogTagController::class, 'datatable'])->name('blog.tags.data');
        Route::post('/exists', [App\Http\Controllers\Admin\BlogTagController::class, 'exists'])->name('blog.tags.exists');
        Route::get('/add', [App\Http\Controllers\Admin\BlogTagController::class, 'create'])->name('blog.tags.add');
        Route::post('/store', [App\Http\Controllers\Admin\BlogTagController::class, 'store'])->name('blog.tags.store');
        Route::get('/view/{id}', [App\Http\Controllers\Admin\BlogTagController::class, 'show'])->name('blog.tags.view');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BlogTagController::class, 'edit'])->name('blog.tags.edit');
        Route::post('/destroy', [App\Http\Controllers\Admin\BlogTagController::class, 'destroy'])->name('blog.tags.destroy');
        Route::post('/status/change', [App\Http\Controllers\Admin\BlogTagController::class, 'statusChange'])->name('blog.tags.status.change');
    });

    Route::group(['prefix' => 'posts'], function() {
        Route::get('/', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('posts');
        Route::post('/datatable', [App\Http\Controllers\Admin\PostController::class, 'datatable'])->name('posts.data');
        Route::post('/exists', [App\Http\Controllers\Admin\PostController::class, 'exists'])->name('posts.exists');
        Route::get('/add', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('posts.add');
        Route::post('/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('posts.store');
        Route::get('/view/{id}', [App\Http\Controllers\Admin\PostController::class, 'show'])->name('posts.view');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('posts.edit');
        Route::post('/destroy', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('posts.destroy');
        Route::post('/status/change', [App\Http\Controllers\Admin\PostController::class, 'statusChange'])->name('posts.status.change');
    });
});

