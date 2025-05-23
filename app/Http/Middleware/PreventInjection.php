<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventInjection
{

    protected $suspicious = [
        "'", '"', '--', ';', '#', '/*', '*/',
        'select', 'insert', 'update', 'delete',
        'drop', 'alter', 'truncate', 'exec', 'union'
    ];

    public function handle(Request $request, Closure $next)
    {
        foreach ($request->all() as $key => $value) {
            if (is_string($value)) {
                $lower = strtolower($value);
                foreach ($this->suspicious as $bad) {
                    if (str_contains($lower, $bad)) {
                        return response()->json([
                            'message' => 'Input tidak valid atau mencurigakan.',
                        ], 400);
                    }
                }
            }
        }

        return $next($request);
    }
}
