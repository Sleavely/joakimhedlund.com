<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PortfolioWork extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portfolio_work', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
		   $table->timestamp('published_at')->nullable();
			$table->softDeletes();
			$table->string('slug');
			$table->string('title');
			$table->text('markdown');
			$table->string('coverphoto_url');
			$table->string('demo_url');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('portfolio_work');
	}

}
