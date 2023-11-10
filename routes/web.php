<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoansController;
use App\Http\Controllers\Admin\LoanFaqsController;
use App\Http\Controllers\Admin\LoanTabsController;
use App\Http\Controllers\Admin\CityLoansController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\BanksController;
use App\Http\Controllers\Admin\OffersController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\EnquiriesController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\LoanController;


/* admin routes start*/

Route::group(['prefix'=> 'admin'],function(){
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::get('/', [LoginController::class,'index'])->name('admin');
        Route::post('/', [LoginController::class,'checkLogin'])->name('admin.checkLogin');
    });

    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
        Route::get('/logout', [DashboardController::class,'logout'])->name('admin.logout');

        //Settings
        Route::get('settings/{slug}', [AdminController::class, 'Settings'])->name('admin.Settings');
        Route::post('settings/save/{slug}', [AdminController::class, 'SaveSettings'])->name('admin.SaveSettings');

        Route::get('/profile', [AdminController::class, 'Profile'])->name('admin.Profile');
        Route::post('/saveprofile', [AdminController::class, 'SaveProfile'])->name('admin.SaveProfile');


        //Contacts

        Route::get('contact', [ContactsController::class, 'index'])->name('admin.Contacts');
        Route::get('edit-contact/{id}', [ContactsController::class, 'edit'])->name('admin.editContact');
        Route::get('view-contact/{id}', [ContactsController::class, 'show'])->name('admin.viewContact');
        Route::post('update-contact/{id}', [ContactsController::class, 'update'])->name('admin.updateContact');
        Route::get('delete-contact/{id}', [ContactsController::class, 'destroy'])->name('admin.deleteContact');
        
        //Enquiriy

        Route::get('loanenquiry', [EnquiriesController::class, 'index'])->name('admin.loanenquiry');
        Route::get('edit-enquiry/{id}', [EnquiriesController::class, 'edit'])->name('admin.editLoanEnquiry');
        Route::get('view-enquiry/{id}', [EnquiriesController::class, 'show'])->name('admin.viewLoanEnquiry');
        Route::post('update-enquiry/{id}', [EnquiriesController::class, 'update'])->name('admin.updateLoanEnquiry');
        Route::get('delete-enquiry/{id}', [EnquiriesController::class, 'destroy'])->name('admin.deleteLoanEnquiry');
        
        //partners

        Route::get('partner', [PartnersController::class, 'index'])->name('admin.Partners');
        Route::get('edit-partner/{id}', [PartnersController::class, 'edit'])->name('admin.editPartner');
        Route::post('update-partner/{id}', [PartnersController::class, 'update'])->name('admin.updatePartner');
        Route::get('delete-partner/{id}', [PartnersController::class, 'destroy'])->name('admin.deletePartner');

        // loans

        Route::get('loan', [LoansController::class, 'index'])->name('admin.loan');
        Route::get('create-loan', [LoansController::class, 'create'])->name('admin.addLoan');
        Route::post('create-loan', [LoansController::class, 'store'])->name('admin.addLoan');
        Route::get('edit-loan/{id}', [LoansController::class, 'edit'])->name('admin.editLoan');
        Route::post('update-loan/{id}', [LoansController::class, 'update'])->name('admin.updateLoan');
        Route::get('delete-loan/{id}', [LoansController::class, 'destroy'])->name('admin.deleteLoan');
        
        // Faqs

        Route::get('faq', [LoanFaqsController::class, 'index'])->name('admin.faq');
        Route::get('create-faq', [LoanFaqsController::class, 'create'])->name('admin.addLoanFaq');
        Route::post('create-faq', [LoanFaqsController::class, 'store'])->name('admin.addLoanFaq');
        Route::get('edit-faq/{id}', [LoanFaqsController::class, 'edit'])->name('admin.editLoanFaq');
        Route::post('update-faq/{id}', [LoanFaqsController::class, 'update'])->name('admin.updateLoanFaq');
        Route::get('delete-faq/{id}', [LoanFaqsController::class, 'destroy'])->name('admin.deleteLoanFaq');
        
        // loan details

        Route::get('loantabs', [LoanTabsController::class, 'index'])->name('admin.loantabs');
        Route::get('create-loantab', [LoanTabsController::class, 'create'])->name('admin.addLoanTab');
        Route::post('create-loantab', [LoanTabsController::class, 'store'])->name('admin.addLoanTab');
        Route::get('edit-loantab/{id}', [LoanTabsController::class, 'edit'])->name('admin.editLoanTab');
        Route::post('update-loantab/{id}', [LoanTabsController::class, 'update'])->name('admin.updateLoanTab');
        Route::get('delete-loantab/{id}', [LoanTabsController::class, 'destroy'])->name('admin.deleteLoanTab');

        // ity loans

        Route::get('cityloan', [CityLoansController::class, 'index'])->name('admin.cityloan');
        Route::get('create-cityloan', [CityLoansController::class, 'create'])->name('admin.addCityLoan');
        Route::post('create-cityloan', [CityLoansController::class, 'store'])->name('admin.addCityLoan');
        Route::get('edit-cityloan/{id}', [CityLoansController::class, 'edit'])->name('admin.editCityLoan');
        Route::post('update-cityloan/{id}', [CityLoansController::class, 'update'])->name('admin.updateCityLoan');
        Route::get('delete-cityloan/{id}', [CityLoansController::class, 'destroy'])->name('admin.deleteCityLoan');
        
        // banks

        Route::get('bank', [BanksController::class, 'index'])->name('admin.bank');
        Route::get('create-bank', [BanksController::class, 'create'])->name('admin.addBank');
        Route::post('create-bank', [BanksController::class, 'store'])->name('admin.addBank');
        Route::get('edit-bank/{id}', [BanksController::class, 'edit'])->name('admin.editBank');
        Route::post('update-bank/{id}', [BanksController::class, 'update'])->name('admin.updateBank');
        Route::get('delete-bank/{id}', [BanksController::class, 'destroy'])->name('admin.deleteBank');
        
        // offer

        Route::get('offer', [OffersController::class, 'index'])->name('admin.offer');
        Route::get('create-offer', [OffersController::class, 'create'])->name('admin.addOffer');
        Route::post('create-offer', [OffersController::class, 'store'])->name('admin.addOffer');
        Route::get('edit-offer/{id}', [OffersController::class, 'edit'])->name('admin.editOffer');
        Route::post('update-offer/{id}', [OffersController::class, 'update'])->name('admin.updateOffer');
        Route::get('delete-offer/{id}', [OffersController::class, 'destroy'])->name('admin.deleteOffer');

    });
});
/* admin routes end */

Route::get('/', [FrontpageController::class, 'index'])->name('/');
Route::get('offer', [FrontpageController::class, 'Offer'])->name('offer');
Route::get('partner', [FrontpageController::class, 'Partner'])->name('partner');
Route::post('add-partner', [FrontpageController::class, 'addPartner'])->name('addPartner');
Route::get('apply', [FrontpageController::class, 'Apply'])->name('apply');
Route::post('apply', [FrontpageController::class, 'loanApply'])->name('apply');
Route::get('about', [FrontpageController::class, 'About'])->name('about');
Route::get('contact', [FrontpageController::class, 'Contact'])->name('contact');
Route::post('add-contact', [FrontpageController::class, 'addContact'])->name('addContact');
Route::get('/{loandetail}', [LoanController::class, 'loanDetail']);
Route::get('/{loandetail}/{cityloandetail}', [LoanController::class, 'loanCityDetail']);
