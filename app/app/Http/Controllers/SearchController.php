<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searcher(Request $request)
    {
        $query = $request->input('query');

        if ($query == '') {
            $res = null;
        } else {
            $res = Sekolah::where('nama', 'like', '%' . $query . '%')
                ->get();
        }
        return response()->json($res);
    }
}
