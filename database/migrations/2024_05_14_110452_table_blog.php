<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_blog', function (Blueprint $blog) {
            $blog->id();
            $blog->string('name');
            $blog->string('post');
            $blog->timestamps();
        });
    }
    // php artisan make:migration add_image_to_table_blog

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
