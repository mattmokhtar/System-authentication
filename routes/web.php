<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Event;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\userinfoController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('events', [userinfoController::class, 'publicshow'])->name('events.show');
Route::get('/contacts', function () {
  return view('contacts');
});

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('manage_user', [AdminController::class, 'viewuser'])->name('admin.manage_user');
    Route::get('/admin/update-role/{id}', [AdminController::class, 'updateRole'])->name('admin.updateRole');
    Route::get('/admin/revert-role/{id}', [AdminController::class, 'revertRole'])->name('admin.revertRole');
    Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.deleteUser');
  });

  Route::group(['middleware' => ['auth', 'organizer']], function() {
    Route::get('/organizer/create_event', [userinfoController::class, 'index']);
    Route::post('/organizer/create_event', [userinfoController::class, 'store'])->name('organizer.create_event');
    Route::get('/organizer/create_event', [userinfoController::class, 'showOrganizerEvents']);
    Route::get('/organizer/event_list', [userinfoController::class, 'displayevent'])->name('organizer.event_list');
    Route::get('/organizer/delete/{id}', [userinfoController::class, 'delete'])->name('organizer.delete');
    Route::get('/organizer/edit_event/{id}', [userinfoController::class, 'edit'])->name('organizer.edit_event');
    Route::post('/organizer/edit_event/{id}', [userinfoController::class, 'update'])->name('organizer.update');
    Route::get('user/event_list', [userinfoController::class, 'displayevent'])->name('user.event_list');
  });

  Route::group(['middleware' => ['auth', 'participant']], function() {

    Route::get('participant/event_list', [userinfoController::class, 'displayevent'])->name('participant.event_list');
   
  });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
