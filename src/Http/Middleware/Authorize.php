<?php

namespace Idecardo\NovaTelescope\Http\Middleware;

use Idecardo\NovaTelescope\NovaTelescope;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaTelescope::class)->authorize($request) ? $next($request) : abort(403);
    }
}
