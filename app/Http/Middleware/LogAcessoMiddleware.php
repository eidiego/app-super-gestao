<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        LogAcesso::create(['log' => "Ip: $ip requisitou acesso a URL $route!"]);

        // return $next($request);

        $resposta = $next($request);

        $resposta->setStatusCode(201, 'O status e o texto foram modificados');
        return $resposta;


    }
}
