<?php

use Illuminate\Support\Facades\Route;

Route::post('/goal/assessment', [\App\Http\Controllers\Api\GoalAssessmentController::class, 'store']);
