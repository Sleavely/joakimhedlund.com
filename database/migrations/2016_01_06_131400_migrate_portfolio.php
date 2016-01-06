<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
use App\PortfolioWork;

class MigratePortfolio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create posts, starting with the oldest/least interesting first
		$post = new PortfolioWork;
		$post->title = 'vBulletin';
		$post->markdown = 'I built account management, highscores, character statistics, guild administration and much more to integrate an OpenTibia server with vBulletin.';
		$post->coverphoto_url = '/images/world7-thumb.png';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Barcode scanner web app';
		$post->markdown = 'With a bit of JS and backend APIs the warehouse staff is now able to quickly look up shipment labels and product storage locations.';
		$post->coverphoto_url = '/images/2683653952_c9064f0899_z.jpg';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Returns portal';
		$post->markdown = 'We needed a tailormade system for RMA to handle all of our edge cases, I ended up building a (mostly) single page app in a blended combo of Laravel and Handlebars.';
		$post->coverphoto_url = '';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'ElasticSearch';
		$post->markdown = 'Managing an e-store is tricky. I built a blazing fast search engine that indexes orders and shows additional information from various integrated services such as the payment provider, the shipping company and our customer support tool HelpScout.';
		$post->coverphoto_url = '';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Drupal';
		$post->markdown = 'I have extensive Drupal experience from my time at Klarna. Their needs for a scalable and multilingual platform led us to migrate their main website from Joomla and rebuild it entirely in Drupal.';
		$post->coverphoto_url = '/images/klarna.png';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Infrastructure';
		$post->markdown = 'I\'ve dabbled with enough servers to feel comfortable around setting up production-grade firewalls, Redis, NFS, HAProxy, CDNs and all those other tidbits you\'d expect a kickass website to use.';
		$post->coverphoto_url = '/images/8437956869_66d8b38f1b_z.jpg';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Social feed aggregation';
		$post->markdown = 'We were tasked with showing the company\'s activity on social networks. I ended up writing a library in PHP for fetching, processing, and caching data from Twitter, Instagram and Spotify.'.PHP_EOL.PHP_EOL.'On top of the cached data we refreshed it with Javascript in the client\'s browser, in realtime, for a smooth experience.';
		$post->coverphoto_url = '/images/social-feed.png';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Laravel';
		$post->markdown = 'Svensk Båtutbildning needed a new booking system and wanted it to eliminate the manual chores of handling payments.';
		$post->coverphoto_url = '/images/batutb.png';
		$post->demo_url = 'http://www.svenskbatutbildning.se/';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Phonegap';
		$post->markdown = 'I wrote an app to search the Stockholm apartment rental queue. It was built with Phonegap Build so that I could use the frameworks I know and love.'.PHP_EOL.PHP_EOL.'The app featured a localStorage cache, a serverside API, and realtime filtering of search results.';
		$post->coverphoto_url = '/images/bostadroid.png';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Performance optimization';
		$post->markdown = 'I\'m a big fan of New Relic and the flame charts in Chrome\'s Developer Tools. Few things make me feel as bad-ass as cutting load times in half by implementing caches in just the right places and refactoring heavy bits of business logic.';
		$post->coverphoto_url = '/images/4665905531_3c54137c0d_z.jpg';
		$post->demo_url = '';
		$post->published_at = Carbon::now();
		$post->save();
		sleep(1);

		$post = new PortfolioWork;
		$post->title = 'Single page app';
		$post->markdown = 'I built a level editor for a game to explore the fundamentals of single-page apps as well as push my frontend performance optimization skills to the limit.'.PHP_EOL.PHP_EOL.'It\'s now [on Github](https://github.com/Sleavely/OTWorlds).';
		$post->coverphoto_url = '/images/otworlds-doodads.png';
		$post->demo_url = 'https://otworlds.com/';
		$post->published_at = Carbon::now();
		$post->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		PortfolioWork::all()->delete();
	}

}
