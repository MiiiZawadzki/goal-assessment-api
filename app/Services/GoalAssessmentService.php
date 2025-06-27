<?php

namespace App\Services;

use App\Models\GoalAssessment;

class GoalAssessmentService
{
    /**
     * @param array $data
     * @return GoalAssessment
     */
    public function store(array $data): GoalAssessment
    {
        return GoalAssessment::firstOrCreate($data);
    }
}
