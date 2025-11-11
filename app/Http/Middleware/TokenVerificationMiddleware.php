<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $bearerToken = $request->cookie('token');
        $result = JWTToken::VerifyToken($bearerToken);
        if ($result->original['status'] === 'failed') {
            return response()->json([
                'status' => $result->original['status'],
                'message' => $result->original['message']
            ], $result->getStatusCode());
        }
        // Set decoded token data to request headers
        $userEmail = $result->original['data']->userEmail;
        $userId = $result->original['data']->userId;
        $request->headers->set('id', $userId ?? null);
        $request->headers->set('email', $userEmail ?? null);
        return $next($request);
    }

}
