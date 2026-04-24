<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            $authHeader = $request->header('Authorization');

            if (!$authHeader) {
                return response()->json(['message' => 'Missing Authorization header'], 401);
            }

            if (!preg_match('/Bearer\s(\S+)/', $authHeader, $matches)) {
                return response()->json(['message' => 'Invalid token format'], 401);
            }

            $token = $matches[1];

            $publicKey = str_replace('\\n', "\n", env('JWT_PUBLIC_KEY_PEM'));

            $decoded = JWT::decode($token, new Key($publicKey, 'RS256'));

            if (
                $decoded->iss !== env('JWT_ISSUER') ||
                $decoded->aud !== env('JWT_AUDIENCE') ||
                empty($decoded->sub)
            ) {
                return response()->json(['message' => 'Invalid token'], 401);
            }

            $request->attributes->set('auth', [
                'id' => $decoded->sub,
                'token' => $token
            ]);

            return $next($request);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Invalid or expired token'], 401);
        }
    }
}