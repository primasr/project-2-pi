<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountCommitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_commits', function (Blueprint $table) {
            $table->id();
            $table->text('node_id');
            $table->text('name');
            $table->text('full_name');
            $table->boolean('private');
            $table->json('owner');
            $table->text('html_url');
            $table->text('description')->nullable();
            $table->text('url');
            $table->text('language')->nullable();
            $table->text('total_commit')->nullable();
            $table->dateTime('repo_created_at');
            $table->dateTime('repo_updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('count_commits');
    }
}
