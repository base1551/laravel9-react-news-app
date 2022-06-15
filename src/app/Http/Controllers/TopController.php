<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * 総合トップ画面
     * @return Application|Factory|View
     */
    public function top()
    {
        return view('top');
    }
}
