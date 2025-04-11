<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reports', function (Blueprint $table) {
            // Discount amounts
            $table->decimal('rest_dis', 10, 2)->nullable();
            $table->decimal('groc_dis', 10, 2)->nullable();
            $table->decimal('gift_dis', 10, 2)->nullable();
    
            // Distance covered
            $table->decimal('rest_distance_cover', 10, 2)->nullable();
            $table->decimal('groc_distance_cover', 10, 2)->nullable();
            $table->decimal('gift_distance_cover', 10, 2)->nullable();
    
            // Delivery charges
            $table->decimal('rest_delivery_charge', 10, 2)->nullable();
            $table->decimal('groc_delivery_charge', 10, 2)->nullable();
            $table->decimal('gift_delivery_charge', 10, 2)->nullable();
    
            // Order types
            $table->integer('total_rest_pickup_order')->nullable();
            $table->integer('total_rest_delivery_order')->nullable();
            $table->integer('total_grocery_pickup_order')->nullable();
            $table->integer('total_grocery_delivery_order')->nullable();
            $table->integer('total_giftstore_pickup_order')->nullable();
            $table->integer('total_giftstore_delivery_order')->nullable();
    
            // Payment modes
            $table->integer('rest_cash_order')->nullable();
            $table->integer('rest_card_order')->nullable();
            $table->integer('groc_cash_order')->nullable();
            $table->integer('groc_card_order')->nullable();
            $table->integer('gift_cash_order')->nullable();
            $table->integer('gift_card_order')->nullable();
    
            // Statuses
            $table->integer('rest_cancel_order')->nullable();
            $table->integer('rest_complete_order')->nullable();
            $table->integer('groc_cancel_order')->nullable();
            $table->integer('groc_complete_order')->nullable();
            $table->integer('gift_cancel_order')->nullable();
            $table->integer('gift_complete_order')->nullable();
    
            // Total Sales
            $table->decimal('rest_total_sales', 10, 2)->nullable();
            $table->decimal('groc_total_sales', 10, 2)->nullable();
            $table->decimal('gift_total_sales', 10, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn([
                'rest_dis', 'groc_dis', 'gift_dis',
                'rest_distance_cover', 'groc_distance_cover', 'gift_distance_cover',
                'rest_delivery_charge', 'groc_delivery_charge', 'gift_delivery_charge',
                'total_rest_pickup_order', 'total_rest_delivery_order',
                'total_grocery_pickup_order', 'total_grocery_delivery_order',
                'total_giftstore_pickup_order', 'total_giftstore_delivery_order',
                'rest_cash_order', 'rest_card_order',
                'groc_cash_order', 'groc_card_order',
                'gift_cash_order', 'gift_card_order',
                'rest_cancel_order', 'rest_complete_order',
                'groc_cancel_order', 'groc_complete_order',
                'gift_cancel_order', 'gift_complete_order',
                'rest_total_sales', 'groc_total_sales', 'gift_total_sales',
            ]);
        });
    }
    
}
