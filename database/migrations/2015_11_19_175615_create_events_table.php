<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable()->unsigned();
			$table->integer('category_id')->nullable()->unsigned();

			$table->string('title', 30);
			$table->string('location', 100)->nullable();
			$table->dateTime('start_datetime');
			$table->dateTime('end_datetime');
			$table->string('guest', 500)->nullable();
			$table->string('short_desc', 100);
			$table->text('long_desc');

			$table->date('publish_date')->nullable();
			$table->boolean('is_published')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('event', function(Blueprint $table) {
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
			$table->index(['category_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event');
	}

}
