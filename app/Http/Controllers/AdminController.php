<?php namespace App\Http\Controllers;

use App\BlogPost;
use App\PortfolioWork;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
		$entries = BlogPost::orderBy('created_at', 'DESC')->get();
		view()->share('entries', $entries);

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

		// Check if the published-checkbox has changed values
		$already_published = ($post->published_at ? true : false);
		$wants_to_publish = ($this->request->input('published', '0'));
		if(!$already_published && $wants_to_publish)
		{
			$post->published_at = Carbon::now();
		}
		if($already_published && !$wants_to_publish)
		{
			$post->published_at = null;
		}

		$post->save();

		return redirect()->action('AdminController@getBlog', [$post->id]);
	}


	public function getPortfolio($id = 0)
	{
		$entries = PortfolioWork::orderBy('created_at', 'DESC')->get();
		view()->share('entries', $entries);

		if(intval($id) > 0)
		{
			return $this->getWorkById($id);
		}
		return view('admin.portfolio');
	}
	private function getWorkById($id)
	{
		$work = PortfolioWork::findOrFail($id);
		return view('admin.portfolio')->withWork($work);
	}
	public function postPortfolio($id = 0)
	{
		if(intval($id) > 0)
		{
			$post = PortfolioWork::findOrFail($id);
		}
		else
		{
			$post = new PortfolioWork;
		}
		$post->fill([
			'title' => $this->request->input('title'),
			'markdown' => $this->request->input('markdown'),
			'coverphoto_url' => $this->request->input('coverphoto_url'),
			'demo_url' => $this->request->input('demo_url'),
		]);

		// Check if the published-checkbox has changed values
		$already_published = ($post->published_at ? true : false);
		$wants_to_publish = ($this->request->input('published', '0'));
		if(!$already_published && $wants_to_publish)
		{
			$post->published_at = Carbon::now();
		}
		if($already_published && !$wants_to_publish)
		{
			$post->published_at = null;
		}

		$post->save();

		return redirect()->action('AdminController@getPortfolio', [$post->id]);
	}

}
