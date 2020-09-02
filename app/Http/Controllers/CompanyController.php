<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CompanyController extends Controller
{
    /**
     * Get a company.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCompany($id)
    {
        return DB::select(DB::raw("select name from companies where id = $id"));
    }
}
