<?php namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	private $request;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Request $request)
	{
		$this->middleware('auth');
    $this->request = $request;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('admin.home');
	}

	public function getBlog($id = 0)
	{
		if(intval($id) > 0)
		{
			return $this->getBlogById($id);
		}
		return view('admin.blog');
	}

	private function getBlogById($id)
	{
		$post = BlogPost::findOrFail($id);
		return view('admin.blog')->withPost($post);
	}

	public function postBlog($id = 0)
	{
		if(intval($id) > 0)
		{
			$post = BlogPost::findOrFail($id);
		}
		else
		{
			$post = new BlogPost;
		}
		$post->fill([
			'title' => $this->request->input('title'),
			'markdown' => $this->request->input('markdown'),
		]);
		$post->save();

		return redirect()->action('AdminController@getBlog', [$post->id]);
	}

}
