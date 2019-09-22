<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use App\User;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;

class JwtMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        $token = $request->get('token');

        if (!$token) {
            // Unauthorized response if token not there
            return response()->json([
                'error' => 'Token não informado!'
            ], 401);
        }
        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        } catch (ExpiredException $e) {
            return response()->json([
                'error' => 'Provável que o Token expirou.'
            ], 400);
        } catch (Exception $e) {
            if (!env('JWT_SECRET')) {
                return response()->json([
                    'error' => 'Configurações de Token com problemas!'
                ], 401);
            }

            return response()->json([
                'error' => 'Ocorreu um erro ao decodificar o Token.'
            ], 400);
        }
        $user = User::find($credentials->sub);
        // Now let's put the user in the request class so that you can grab it from there
        $request->auth = $user;
        return $next($request);
    }
}
