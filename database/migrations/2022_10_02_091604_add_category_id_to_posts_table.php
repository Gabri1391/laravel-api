<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //Definisco la colonna
            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            //definisco la foreign key
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //prima tolgo la relazione
            $table->dropForeign('posts_category_id_foreign');
            //poi droppo la colonna
            $table->dropColumn('category_id');
        });
    }
}
