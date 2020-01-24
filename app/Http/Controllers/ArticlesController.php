<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\Facades\Image;

class ArticlesController extends Controller {

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		$articles = Article::all();
		return view('article.index', [
			'articles' => $articles,
		]);
	}

	public function create() {
		if (auth()->user()) {
			$this->middleware('auth');
			return view('article/create');
		} else {
			return redirect('/login');
		}
	}

	public function store() {
		$user = auth()->user();
		if ($user) {
			$data = request()->validate([
				'title' => 'required',
				'content' => 'required',
				'image' => ['required', 'image']
			]);

			$imagePath = request('image')->store('uploads', 'public');

			$image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
			$image->save();

			$user->articles()->create([
				'title' => $data['title'],
				'content' => $data['content'],
				'image' => $imagePath,
			]);
			return redirect('/');
		} else {
			return redirect('/login');
		}
	}

	public function show($id) {
		$article = Article::find($id);
		return view('article/show', [
			'article' => $article,
		]);
	}

}
