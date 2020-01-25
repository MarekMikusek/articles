<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
		$user = auth()->user();
		if ($user) {
			return view('comment/create', [
				'article_id' => $article_id,
			]);
		} else {
			return redirect('/login');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store() {

		$user = auth()->user();

		if (!$user) {
			return redirect('/login');
		}
		$article = Article::findOrFail(request('article_id'));
		if ($user->id == $article->user_id) {
			return redirect("/article/{$article->id}");
		}
		$data = request()->validate([
			'article_id' => 'required',
			'content' => 'required',
		]);
		$user->comments()->create([
			'article_id' => $data['article_id'],
			'content' => $data['content'],
		]);
		return redirect("/article/{$data['article_id']}");
	}

}
