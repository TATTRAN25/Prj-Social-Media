<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function searchUser(Request $request)
    {
        $keyword = $request['search_bar'];
        $users = DB::table('users')->where('name', 'like' , '%'.$keyword."%")->get();
        return view('client.search_user', ["users" => $users, 'keyword' => $keyword]);
    }
}
