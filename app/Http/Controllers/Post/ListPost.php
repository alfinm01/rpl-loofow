<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class ListPost extends Controller {
    public function listAllItems() {
        //ambil data
        $post = DB::table('posts')->get();

        //pass to view -- Asumsi readpost dilakuin di bagian home
        return view('home', ['posts' => $post]);
    }

    public function listAllItemsAscending() {
        //ambil data
        $post = DB::table('posts')->orderBy('year', 'asc')->orderBy('month', 'asc')->orderBy('date', 'asc')->get();

        //pass to view -- Asumsi readpost dilakuin di bagian home
        return view('home', ['posts' => $post]);
    }

    public function listAllItemsDescending() {
        //ambil data
        $post = DB::table('posts')->orderBy('year', 'desc')->orderBy('month', 'desc')->orderBy('date', 'desc')->get();

        //pass to view -- Asumsi readpost dilakuin di bagian home
        return view('home', ['posts' => $post]);
    }


    public function listByKeywords(Request $request) {
        //ambil data dengan keyword tertentu
        $post = DB::table('posts')->where('name', 'like', '%' . $request->keyword . '%')->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('pages/search',['posts' => $post, 'keyword' => $request->keyword]);
    }

    public function listByUser() {
        //ambil data berdasarkan user_id
        $post = DB::table('posts')->where('user_id', Auth::id())->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('dashboard',['posts' => $post]);
    }

    public function listByUserFound() {
        //ambil data berdasarkan user_id
        $post = DB::table('posts')->where('user_id', Auth::id())->where('type', '=', 'Found')->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('pages/dashboard',['posts' => $post]);
    }

    public function listByUserLost() {
        //ambil data berdasarkan user_id
        $post = DB::table('posts')->where('user_id', Auth::id())->where('type', '=', 'Lost')->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('dashboard',['posts' => $post]);
    }
}