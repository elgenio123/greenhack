<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectContoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/terms',function(){

    return view('layouts.terms');

})->name('terms');

Route::get('/about',function(){

    return view('layouts.about');

})->name('about');


Route::get('/dashboard', function(){

    return view('layouts.admin.dashboard');

})->name('dashboard');

Route::get('dashboard/project',function(){

return view('layouts.admin.project');

})->name('project');

Route::get('dashboard/project/create-new-project',function(){

return view('layouts.admin.layouts.create-project');

})->name('create.project');

Route::get('dashboard/services',function(){

return view('layouts.admin.services');

})->name('services');

Route::get('dashboard/services/recommandation',function(){

return view('layouts.admin.layouts.recommandation');

})->name('recommandation');

require __DIR__.'/auth.php';
Route::prefix('guest')->group(function () {

    Route::prefix('myprojects')->name('projects.')->group(function () {
        Route::get('/', [ProjectContoller::class, 'index'])->name('index');
        Route::get('/create', [ProjectContoller::class, 'create'])->name('create');
        Route::get('/edit/{project}', [ProjectContoller::class, 'edit'])->name('edit');
        Route::post('/store', [ProjectContoller::class, 'store'])->name('store');
        Route::put('/update/{project}', [ProjectContoller::class, 'update'])->name('update');
        Route::delete('/delete/{project}', [ProjectContoller::class, 'delete'])->name('delete');
        Route::get('/{project}/detail', [ProjectContoller::class, 'detail'])->name('detail');
    });
});
