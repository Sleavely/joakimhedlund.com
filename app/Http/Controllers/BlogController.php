<?php namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = BlogPost::all();
		return view('blog.archive')->withPosts($posts);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$post = BlogPost::findBySlug($slug);
		return view('blog.post')->withPost($post);
	}

}
