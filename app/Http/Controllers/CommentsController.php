<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create($article_id) {
//		$this->middleware('auth');
		return view('comment/create',[
			'article_id' => $article_id,
		]);
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store() {
		
//		$this->middleware('auth');
		$data = request()->validate([
			'article_id' => 'required',
			'content' => 'required',
		]);
		auth()->user()->comments()->create([
			'article_id' => $data['article_id'],
			'content' => $data['content'],
		]);
		return redirect("/article/{$data['article_id']}");
	}

}
