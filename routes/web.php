<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobAppController;

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


Route::get('/', [JobAppController::class, 'index'])->name('home');
Route::get('step_one_create_basic_detail', [JobAppController::class, 'step_one_create_basic_detail'])->name('step_one_create_basic_detail');
Route::post('post_step_one_create_basic_detail', [JobAppController::class, 'post_step_one_create_basic_detail'])->name('post_step_one_create_basic_detail');

Route::get('step_two_create_education_detail', [JobAppController::class, 'step_two_create_education_detail'])->name('step_two_create_education_detail');
Route::post('post_step_two_create_education_detail', [JobAppController::class, 'post_step_two_create_education_detail'])->name('post_step_two_create_education_detail');

Route::get('step_three_workexperience_detail', [JobAppController::class, 'step_three_workexperience_detail'])->name('step_three_workexperience_detail');
Route::post('post_step_three_workexperience_detail', [JobAppController::class, 'post_step_three_workexperience_detail'])->name('post_step_three_workexperience_detail');

Route::get('step_four_language_known', [JobAppController::class, 'step_four_language_known'])->name('step_four_language_known');
Route::post('post_step_four_language_known', [JobAppController::class, 'post_step_four_language_known'])->name('post_step_four_language_known');

Route::get('step_five_technologies_you_know', [JobAppController::class, 'step_five_technologies_you_know'])->name('step_five_technologies_you_know');
Route::post('post_step_five_technologies_you_know', [JobAppController::class, 'post_step_five_technologies_you_know'])->name('post_step_five_technologies_you_know');

Route::get('step_six_referance_contact', [JobAppController::class, 'step_six_referance_contact'])->name('step_six_referance_contact');
Route::post('post_step_six_referance_contact', [JobAppController::class, 'post_step_six_referance_contact'])->name('post_step_six_referance_contact');

Route::get('step_seven_preferances', [JobAppController::class, 'step_seven_preferances'])->name('step_seven_preferances');
Route::post('post_step_seven_preferances', [JobAppController::class, 'post_step_seven_preferances'])->name('post_step_seven_preferances');

Route::get('view/{id}', [JobAppController::class, 'view'])->name('view');

Route::get('delete/{id}', [JobAppController::class, 'delete'])->name('delete');
Route::get('edit/{id}', [JobAppController::class, 'edit'])->name('edit');