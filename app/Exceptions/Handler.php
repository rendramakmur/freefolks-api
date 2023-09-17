<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($request->expectsJson()) {

            if ($exception instanceof AppException) {
                $statusCode = $exception->getStatusCode();

                return response()->json([
                    'status' => 'error',
                    'meta' => [
                        'timestamp' => now(),
                    ],
                    'data' => [
                        'error' => true,
                        'message' => $exception->getMessage(),
                    ],
                ], $statusCode);
            }

            return response()->json([
                'status' => 'success',
                'meta' => [
                    'timestamp' => now(),
                ],
                'data' => $exception->getMessage(),
            ], 200);
        }

        return parent::render($request, $exception);
    }
}
