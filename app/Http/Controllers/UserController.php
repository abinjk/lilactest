<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $searchParam = $request->searchparam;
            $users = User::with(['department', 'designation'])
                ->where('name', 'LIKE', '%' . $searchParam . '%')
                ->orWhereHas('department', function ($query) use ($searchParam) {
                    $query->where('name', 'LIKE', '%' . $searchParam . '%');
                })
                ->orWhereHas('designation', function ($query) use ($searchParam) {
                    $query->where('name', 'LIKE', '%' . $searchParam . '%');
                })
                ->get();
            echo view('search_sub', compact('users'));
        } else {
            $users = User::with(['department', 'designation'])->get();
            return view('search', compact('users'));
        }
    }
}
