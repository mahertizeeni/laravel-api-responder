<?php

namespace Maher\ApiResponder;

use Illuminate\Http\JsonResponse;
use Maher\ApiResponder\Contracts\ResponderInterface;

class ApiResponder implements ResponderInterface
{
    protected array $config;

    public function __construct()
    {
        $this->config = config('api-responder');
    }

    public function success(
        mixed $data = null,
        string $message = null,
        int $status = 200
    ): JsonResponse {
        return response()->json([
            $this->config['success_key'] => true,
            $this->config['message_key'] => $message,
            $this->config['data_key']    => $data,
        ], $status);
    }

    public function error(
        string $message,
        int $status = 400,
        array $errors = []
    ): JsonResponse {
        return response()->json([
            $this->config['success_key'] => false,
            $this->config['message_key'] => $message,
            $this->config['errors_key']  => $errors,
        ], $status);
    }
}
