<?php

namespace App\Http\Middleware;
use Symfony\Component\Security\Core\Util\StringUtils;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];
	
	

}

