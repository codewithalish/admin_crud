<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->enum('size',['small','medium','large','Xlarge','XXlarge'])->nullable();
            $table->string('color')->nullable();
            $table->decimal('price')->nullable();
            $table->string('made_in')->nullable();
            $table->string('material')->nullable();
            $table->string('details')->nullable();
            $table->integer('user_id')->nullable();


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
        Schema::dropIfExists('products');
    }
}
