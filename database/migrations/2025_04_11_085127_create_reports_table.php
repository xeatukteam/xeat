<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('report_date');
    
            // Example fields based on your logic
            $table->decimal('rest_service', 10, 2)->default(0);
            $table->decimal('groc_service', 10, 2)->default(0);
            $table->decimal('gift_service', 10, 2)->default(0);
            
            $table->integer('total_restaurant_order')->default(0);
            $table->integer('total_grocery_order')->default(0);
            $table->integer('total_giftstore_order')->default(0);
            
            $table->decimal('rest_comm', 10, 2)->default(0);
            $table->decimal('groc_comm', 10, 2)->default(0);
            $table->decimal('gift_comm', 10, 2)->default(0);
            
            $table->decimal('rest_toadmin_comm', 10, 2)->default(0);
            $table->decimal('groc_toadmin_comm_total', 10, 2)->default(0);
            $table->decimal('gift_toadmin_comm_total', 10, 2)->default(0);
            
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
        Schema::dropIfExists('reports');
    }
}
