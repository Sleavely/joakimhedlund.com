<?php namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

use Carbon\Carbon;
use \Suin\RSSWriter\Feed;
use \Suin\RSSWriter\Channel;
use \Suin\RSSWriter\Item;

class BlogController extends Controller {

	/**
	 * Helper for fetching a collection of published posts
	 * @return BlogPost collection
   */
	private function posts()
	{
		$posts = BlogPost::whereNotNull('published_at')
			->orderBy('created_at', 'desc')
			->get();
		return $posts;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->posts();
		return view('blog.archive')->withPosts($posts);
	}

	/**
	 * Print archive as RSS
	 *
	 * @return Response
	 */
	public function rss()
	{
		$feed = new Feed();
		$channel = new Channel();
		$channel
			->title("Joakim Hedlund")
			->description("Building things for the web.")
			->url(url('blog'))
			->language('en-US')
			->pubDate(Carbon::now()->timestamp)
			->lastBuildDate(Carbon::now()->timestamp)
			->ttl(60)
			->appendTo($feed);

		$posts = $this->posts();
		foreach($posts as $post)
		{
			$item = new Item();
			$item
				->title($post->title)
				->description($post->html)
				->url(url('blog/'.$post->slug))
				->pubDate($post->published_at->timestamp)
				->guid(url('blog/'.$post->slug), true)
				->appendTo($channel);
		}

		return $feed;
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
