 <?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('newidex','HomeController@newindex')->name('newindex');

Route::get('admin/adminhome','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('adminlogin');
Route::post('admin','Admin\LoginController@login');

Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('admin/adminpdfGet','Admin\AdminPdfController@pdfGet')->name('adminPdfGet');
Route::get('admin/adminpdfDownload','Admin\AdminPdfController@index')->name('adminpdfdownload');

Route::get('admin/admineditshow','Admin\AdminEditController@showEdit')->name('admineditshow');
Route::post('admin/saveEditAdmin','Admin\AdminEditController@saveEdit')->name('saveEditAdmin');
//Route::get('uploads/showUpload','FormController@showUpload')->name('showUpload');
Route::post('uploads/saveupload','FormController@saveUpload')->name('saveUpload');
Route::get('uploads/showOne','FormController@showOne')->name('showOne');
Route::post('detailsform1/saveOne','FormController@saveOne')->name('saveOne');
Route::get('detailsform2/showTwo','FormController@showTwo')->name('showTwo');
Route::post('detailsform2/saveTwo','FormController@saveTwo')->name('saveTwo');


Route::get('experienceForm/showExperience','ExperienceFormController@showExperience')->name('showExperience');
Route::post('experienceForm/saveExperience','ExperienceFormController@saveExperience')->name('saveExperience');

Route::get('creditTable/creditShow','CreditPointsController@creditShow')->name('creditShow');
Route::post('creditTable/saveCredit','CreditPointsController@creditSave')->name('saveCredit');
Route::get('creditTable/creditevaluate','CreditPointsController@creditEvaluate')->name('creditEvaluate');

Route::get('creditevaluate/success','PdfController@showSuccess')->name('subsuccess');

Route::get('pdfGet','PdfController@getData')->name('pdfGet');
Route::get('pdfGet/pdfdownload','PdfController@index')->name('pdfdownload');
Route::get('pdfGet/pdfUpload','PdfController@Upload')->name('pdfUpload');
Route::get('pdfGet/pdfPersonalDownload','PdfController@personalDownload')->name('pdfPersonalDownload');
Route::get('pdfGet/pdfEducationDownload','PdfController@educationDownload')->name('pdfEducationDownload');
Route::get('pdfGet/pdfExperienceDownload','PdfController@experienceDownlaod')->name('pdfExperienceDownload');











