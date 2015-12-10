<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable()->unsigned();
			$table->integer('category_id')->nullable()->unsigned();
			
			$table->string('title', 30);
			$table->string('short_desc', 100);
			$table->text('long_desc');
			$table->date('publish_date')->nullable();
			$table->boolean('is_published')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('post', function(Blueprint $table) {
			$table	->foreign('user_id')
					->references('id')->on('users')
					->onDelete('SET NULL')
					->onUpdate('CASCADE');
			// null berarti "Anonymous"

			$table	->foreign('category_id')
					->references('id')->on('category')
					->onDelete('SET NULL')
					->onUpdate('CASCADE');
			// null berarti "Uncategorized"

			$table->index(['title', 'is_published']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post');
	}

}
