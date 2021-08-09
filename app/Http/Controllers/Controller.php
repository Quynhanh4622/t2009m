<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function search(Request $request){
        $title =  $request->get('search');
        $library = new Library();
        $library = DB::table('libraries')->where('title', $title)->first();

        return $library;
    }
}
