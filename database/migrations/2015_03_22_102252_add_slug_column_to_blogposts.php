<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\BlogPost;

class AddSlugColumnToBlogposts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('blog_posts', function($table)
		{
	    $table->string('slug');
		});

		// Now go through all the existing models and apply slugs.
		$posts = BlogPost::all();
		foreach($posts as $post)
		{
			$post->save();
		}

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('blog_posts', function($table)
		{
		  $table->dropColumn('slug');
		});
	}

}
