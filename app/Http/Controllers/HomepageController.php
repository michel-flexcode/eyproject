<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('homepage.blade.php', [
            'companies' => $companies,
        ]);
    }
}
