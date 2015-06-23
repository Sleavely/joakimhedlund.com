<?php namespace App\Http\Controllers;

use App\PortfolioWork;
use Illuminate\Http\Request;

use Carbon\Carbon;
use \Suin\RSSWriter\Feed;
use \Suin\RSSWriter\Channel;
use \Suin\RSSWriter\Item;

class PortfolioController extends Controller {

	/**
	 * Helper for fetching a collection of published work
	 * @return PortfolioWork collection
   */
	private function entries()
	{
		$entries = PortfolioWork::whereNotNull('published_at')->get();
		return $entries;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entries = $this->entries();
		return view('portfolio.archive')->withEntries($entries);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$entry = PortfolioWork::findBySlug($slug);
		return view('portfolio.entry')->withEntry($entry);
	}

}
