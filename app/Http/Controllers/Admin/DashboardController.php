<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
    public function cotizador()
    {

        return view('cotizaciones.cotizador');
    }
}
