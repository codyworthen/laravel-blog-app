<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            
            // $table->foreign('post_id')->references('id')->on('posts')->cascadeOnDelete(); // for if we delete comment's post
            $table->foreignId('post_id')->constrained()->cascadeOnDelete(); // same as above
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // if we delete a user
            
            $table->text('body');
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
        Schema::dropIfExists('comments');
    }
};
