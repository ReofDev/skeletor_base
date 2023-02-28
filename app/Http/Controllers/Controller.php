<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *  title="Skeleto Base API REST", 
 *  version="0.1"
 * ),
 * @OA\PathItem(path="/api"),
 * @OA\Server(
 *  description="Skeletor base",
 *  url="http://localhost:8000/api/",
 * )
 * 
 * @author Ramon Ojeda
 * 
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
