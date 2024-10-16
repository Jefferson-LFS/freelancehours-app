<?php

use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProjectsController::class,'index'])
->name('project.index');

Route::get('/project/{project}', [ProjectsController::class,'show'])
->name('projects.show');


