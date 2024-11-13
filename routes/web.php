<?php


use Illuminate\Support\Facades\Route;

use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;


Route::get('/thankyou', function () {
    return view('frontend/thankyou');
});
Route::get('/contact', function () {
    return view('frontend/contact');
})->name('contact');

Route::get('/home-2', function () {
    return view('home-new');
});

Route::get('/calculator', function () {
    return redirect('/');
});
Route::get('/blog/dealing-with-delinquent-business-loans-protecting-your-finances-and-credit/90', function () {
    return redirect('/blogs');
});


Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::post('profile-update', [UserController::class, 'profileupdate'])->name('profile.update');


Route::post('phonepe',[PaymentController::class,'phonePe'])->name('phonePe');
Route::any('phonepe-response',[PaymentController::class,'response'])->name('response')->middleware(VerifyCsrfToken::class);
Route::get('/payment-failed', [PaymentController::class, 'paymentFailed'])->name('payment.failed');



Route::group(['prefix' => 'admin', 'middleware' => ['auth.user']], function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::get('/leads', [HomeController::class, 'leads'])->name('leads');
    Route::get('/payment/list', [HomeController::class,'payment_list'])->name('payment.list');
    Route::get('/payment/show', [HomeController::class,'payment_show'])->name('payment.show');


    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
    Route::delete('/blog/destroy/{id}', [BlogController::class,'destroy'])->name('blog.destroy');

    Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog.category');
    Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
    Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
    Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
    Route::get('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');


    // Setting routes
    Route::get('/settings', [SettingController::class, 'settingview'])->name('settings.index');
    Route::post('/settings_about', [SettingController::class, 'about'])->name('settings_about');
    Route::get('/settings-update/{id}', [SettingController::class, 'updateabout'])->name('update_about');
    Route::post('/settings_update_about/{id}', [SettingController::class, 'updateaboutpost'])->name('update_about_post');
    Route::get('/settings-delete/{id}', [SettingController::class, 'updateaboutdelete'])->name('update_about_delete');
    Route::get('user/profile', [UserController::class, 'user_profile'])->name('user.profile');

});

// Home Route start

Route::get('/city/{id}', [HomeController::class,'city_get'])->name('city.get');
Route::post('/contact/form', [HomeController::class,'contact_form'])->name('contact.form');
Route::get('/phonepe/payment', [HomeController::class,'phonePe'])->name('phonepe.payment');
Route::post('/phonepe/payment/callback', [HomeController::class,'phonePeCallback'])->name('phonepe.payment.callback')->middleware(VerifyCsrfToken::class);


//    /////////////////////////////////////////

Route::get('/', [HomeController::class,'home'])->name('home');

Route::get('/about', [HomeController::class,'about'])->name('aboutUs');
Route::get('/loan-assistance', [HomeController::class, 'loanassistance'])->name('loan.assistance');
Route::get('/personal-loan', [HomeController::class, 'personalloan'])->name('personal.loan');
Route::get('/business-loan', [HomeController::class, 'businessloan'])->name('business.loan');
Route::get('/home-loan', [HomeController::class, 'homeloan'])->name('home.loan');
Route::get('/property-loan', [HomeController::class, 'property'])->name('property_loan');
Route::get('/vehicle-loan', [HomeController::class, 'vehicleloan'])->name('vehicle.loan');
Route::get('/life-insurance', [HomeController::class, 'lifeinsurance'])->name('life.insurance');
Route::get('/health-insurance', [HomeController::class, 'healthinsurance'])->name('health.insurance');
Route::get('/general-insurance', [HomeController::class, 'generalinsurance'])->name('general.insurance');
Route::get('/sip', [HomeController::class, 'sip'])->name('sip');
Route::get('/swp', [HomeController::class, 'swp'])->name('swp');
Route::get('/elss', [HomeController::class, 'elss'])->name('elss');
Route::get('/lumpsum', [HomeController::class, 'lumpsum'])->name('lumpsum');
Route::get('/property-sale', [HomeController::class, 'property_sale'])->name('property.sale');
Route::get('/become-partner', [HomeController::class, 'becomepartner'])->name('become.partner');
Route::get('/refundpolicy', [HomeController::class, 'refundPolicy'])->name('refundpolicy');
Route::get('/privacypolicy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/termcondition', [HomeController::class, 'termcondition'])->name('termcondition');
Route::get('/assistance-type', [HomeController::class, 'assistance_type'])->name('assistance.form');


// redirection route
Route::get('/policy/terms-of-service/43', [HomeController::class, 'policy_terms']);
Route::get('/policy/loan-suvidha-policy/94', [HomeController::class, 'policy_loan']);
Route::get('/services/loan-against-property', [HomeController::class, 'loan_against_property']);
Route::get('/services/personal-loan', [HomeController::class, 'services_loan']);
Route::get('/services/car-loan', [HomeController::class, 'car_loan']);
Route::get('/services/business-loan', [HomeController::class, 'business_loan']);
Route::get('/services/education-loan', [HomeController::class, 'education_loan']);
Route::get('/services/property_sale_purchase', [HomeController::class, 'property_sale_purchase']);
Route::get('/services/generalinsurance', [HomeController::class, 'general_insurance_service']);



// Frontend Blogs

Route::get('/blogs', [BlogController::class, 'blogshow'])->name('blog.show');
Route::get('/blogs/{slug}', [BlogController::class, 'blogdetails'])->name('blogdetails');
Route::post('/ckeditor/upload', [BlogController::class, 'uploadimage'])->name('ckeditor.upload');
