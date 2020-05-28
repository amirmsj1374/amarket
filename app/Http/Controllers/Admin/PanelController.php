<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PanelController extends Controller
{
     public function index()
    {
        return view('admin.index');
    }

    public function UploadImageSubject() {

        $year = Carbon::now()->year;

    }
}
