<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Helpers;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

    /**
     * Show Admin Index
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {

        return view('admin.dashboard.index');
    }
}
