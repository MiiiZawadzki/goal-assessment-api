<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreAssessmentRequest;
use App\Http\Responses\Api\ApiResponse;
use App\Services\GoalAssessmentService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class GoalAssessmentController extends Controller
{
    public function __construct(
        private readonly GoalAssessmentService $service
    )
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssessmentRequest $request): JsonResponse
    {
        try {
            $goalAssessment = $this->service->store($request->validated());

            return ApiResponse::success(
                __('goal_assessment.success'),
                $goalAssessment,
                201
            );
        } catch (\Throwable $th) {
            Log::error($th->getMessage(), $th->getTrace());
            return ApiResponse::error(__('goal_assessment.errors.general'), [], 500);
        }
    }
}
