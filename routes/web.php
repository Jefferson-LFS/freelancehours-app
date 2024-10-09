<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


// Route::view('/','projects.index')->name('project.index');

// Route::view('/project/{project}','projects.show')->name('projects.show');


Route::get('/', [ProjectsController::class,'index'])
->name('project.index');

Route::get('/project/{project}', [ProjectsController::class,'show'])
->name('projects.show');


