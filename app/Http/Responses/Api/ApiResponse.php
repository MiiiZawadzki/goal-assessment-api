<?php

namespace App\Http\Responses\Api;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    /**
     * @param string $message
     * @param mixed|null $data
     * @param int $status
     * @return JsonResponse
     */
    public static function success(
        string $message,
        mixed  $data = null,
        int    $status = 200
    ): JsonResponse
    {
        return new JsonResponse([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], $status);
    }

    /**
     * @param string $message
     * @param mixed|null $errors
     * @param int $status
     * @return JsonResponse
     */
    public static function error(
        string $message,
        mixed  $errors = null,
        int    $status = 400
    ): JsonResponse
    {
        return new JsonResponse([
            'success' => false,
            'message' => $message,
            'errors' => $errors,
        ], $status);
    }
}
