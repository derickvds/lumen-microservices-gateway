<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Build success reponse
     *
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Build error reponse
     *
     * @param string|array $message
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code = Response::HTTP_OK)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    /**
     * Build error message
     *
     * @param string|array $message
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorMessage($message, $code = Response::HTTP_OK)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }
}