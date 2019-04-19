<?php

namespace App\Http\Controllers;

use App\BreakingNews;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function breakingNews()
    {
        $bnews = BreakingNews::orderBy('created_at', 'desc')->get();
        $bnews = json_decode(json_encode($bnews));
        return $bnews;
    }

    public static function footerNews()
    {
        
    }
}
