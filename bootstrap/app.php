<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
     ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (Throwable $e, $request) {
          

            /*
        |--------------------------------------------------------------------------
        | WEB Exception Handling
        |--------------------------------------------------------------------------
        */

            if ($e instanceof ValidationException) {
                    return redirect()->back()
                        ->withErrors($e->errors())
                        ->withInput();
                }
                
            $status = $e instanceof HttpExceptionInterface ? $e->getStatusCode() : 500;
            // Log every web exception
            $data = [
                'request_id'       => Str::uuid()->toString(),
                'web_version'      => config('app.app_version'),
                'frontend_version' => $request->server('HTTP_FRONTEND_VERSION'),
                'url_path'         => $request->fullUrl(),
                'method'           => $request->method(),
                // 'user_id'          => Auth::id() ?? 0,
                'ip_address'       => $request->ip() ?? 'UNKNOWN',
                'called_on'        => now()->format('Y-m-d H:i:s'),
                'response_code'    => $status,
                'country'          => $request->header('cf-ipcountry'),
                'city'             => $request->header('cf-ipcity'),
                'state'            => $request->header('cf-region'),
                'json_data'        => json_encode($request->input()), // $request->except(['password','token'])
                'response_data'    => json_encode([
                    'exception' => $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => collect($e->getTrace())->take(5)->toArray(),
                ]),
            ];
            Log::error('Web Exception', $data);
            
            // Custom error page
            $view = view()->exists("errors.$status") ? "errors.$status" : "errors.default";
            // return response()->view($view, [
            //     'message' => $e->getMessage()
            // ], $status);
        });
    })->create();
