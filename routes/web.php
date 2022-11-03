<?php

use App\Http\Controllers\Category\CreateController as CategoryCreateController;
use App\Http\Controllers\Category\DeleteController as CategoryDeleteController;
use App\Http\Controllers\Category\EditController as CategoryEditController;
use App\Http\Controllers\Category\IndexController as CategoryIndexController;
use App\Http\Controllers\Category\ShowController as CategoryShowController;
use App\Http\Controllers\Category\StoreController as CategoryStoreController;
use App\Http\Controllers\Category\UpdateController as CategoryUpdateController;
use App\Http\Controllers\Color\CreateController as ColorCreateController;
use App\Http\Controllers\Color\DeleteController as ColorDeleteController;
use App\Http\Controllers\Color\EditController as ColorEditController;
use App\Http\Controllers\Color\IndexController as ColorIndexController;
use App\Http\Controllers\Color\ShowController as ColorShowController;
use App\Http\Controllers\Color\StoreController as ColorStoreController;
use App\Http\Controllers\Color\UpdateController as ColorUpdateController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Tag\CreateController;
use App\Http\Controllers\Tag\DeleteController;
use App\Http\Controllers\Tag\EditController;
use App\Http\Controllers\Tag\IndexController as TagIndexController;
use App\Http\Controllers\Tag\ShowController;
use App\Http\Controllers\Tag\StoreController;
use App\Http\Controllers\Tag\UpdateController;
use App\Http\Controllers\User\CreateController as UserCreateController;
use App\Http\Controllers\User\DeleteController as UserDeleteController;
use App\Http\Controllers\User\EditController as UserEditController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\User\ShowController as UserShowController;
use App\Http\Controllers\User\StoreController as UserStoreController;
use App\Http\Controllers\User\UpdateController as UserUpdateController;
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

Route::get('/', IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function() {
  Route::get('/', CategoryIndexController::class)->name('category.index');
  Route::get('/create', CategoryCreateController::class)->name('category.create');
  Route::post('/', CategoryStoreController::class)->name('category.store');
  Route::get('/{category}/edit', CategoryEditController::class)->name('category.edit');
  Route::get('/{category}', CategoryShowController::class)->name('category.show');
  Route::patch('/{category}', CategoryUpdateController::class)->name('category.update');
  Route::delete('/{category}', CategoryDeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'tags'], function() {
  Route::get('/', TagIndexController::class)->name('tag.index');
  Route::get('/create', CreateController::class)->name('tag.create');
  Route::post('/', StoreController::class)->name('tag.store');
  Route::get('/{tag}/edit', EditController::class)->name('tag.edit');
  Route::get('/{tag}', ShowController::class)->name('tag.show');
  Route::patch('/{tag}', UpdateController::class)->name('tag.update');
  Route::delete('/{tag}', DeleteController::class)->name('tag.delete');
});

Route::group(['prefix' => 'colors'], function() {
  Route::get('/', ColorIndexController::class)->name('color.index');
  Route::get('/create', ColorCreateController::class)->name('color.create');
  Route::post('/', ColorStoreController::class)->name('color.store');
  Route::get('/{color}/edit', ColorEditController::class)->name('color.edit');
  Route::get('/{color}', ColorShowController::class)->name('color.show');
  Route::patch('/{color}', ColorUpdateController::class)->name('color.update');
  Route::delete('/{color}', ColorDeleteController::class)->name('color.delete');
});

Route::group(['prefix' => 'users'], function() {
  Route::get('/', UserIndexController::class)->name('user.index');
  Route::get('/create', UserCreateController::class)->name('user.create');
  Route::post('/', UserStoreController::class)->name('user.store');
  Route::get('/{user}/edit', UserEditController::class)->name('user.edit');
  Route::get('/{user}', UserShowController::class)->name('user.show');
  Route::patch('/{user}', UserUpdateController::class)->name('user.update');
  Route::delete('/{user}', UserDeleteController::class)->name('user.delete');
});

