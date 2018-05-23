<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('products', function (Blueprint $table) {
            $table->string('img-1')->nullable();
            $table->string('img-2')->nullable();
            $table->string('img-3')->nullable();
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
 Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('img-1');
            $table->dropColumn('img-2');
            $table->dropColumn('img-3');
            
        });

    }
}
