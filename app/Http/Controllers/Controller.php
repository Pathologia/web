<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
    * @OA\Info(
    *      version="1.0.0",
    *      title="PathologIA",
    *      description="Documentation technique  de la plateforme PathologIA",
    *      @OA\Contact(
    *          email="contact@pathologia.org"
    *      ),
    *      @OA\License(
    *          name="Propriétaire",
    *      )
    * )
    *
    * @OA\Server(
    *      url=L5_SWAGGER_CONST_HOST,
    *      description="Serveur de production 01"
    * )

    *
    *
    */
}
