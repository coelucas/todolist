<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{TestUsersController, TaskController, HomeController};

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
    return view('welcome');
});

// Route::get('/hello', function(){
//     return 'Hello School Of Net';
// });

// Route::get('/ola/{name}/{lastname?}', function($name, $lastname = ''){
//     return "Hello {$name} {$lastname}";
// });

// Route::middleware('auth')->group(function(){
    
//     Route::middleware('auth')->get('auth', function(){
//         return 'rota 1';
//     });

//     Route::middleware('auth')->get('auth-2', function(){
//         return 'rota 2';
//     });

// });


Route::get('test/users', [TestUsersController::class, 'index']);
Route::get('test/users/{id}', [TestUsersController::class, 'show']);

// Listagem total (index)
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');

// Criação (create/store)
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Visualização única (show)
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');

// Atualização (edit/put/patch)
Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Delete (delete)
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// Representa todos os métodos que estão no Controller através de uma linha de código
// Route::resource('tasks', TaskController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

