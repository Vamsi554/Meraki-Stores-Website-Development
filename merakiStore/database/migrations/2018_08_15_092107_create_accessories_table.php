<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessory_products', function (Blueprint $table) {

          // Primary Key
          $table->string('accessory_id')->primary();
          // Electronics Type: Key Chains / Wallets / Sun glasses etc.
          $table->string('accessory_type');
          $table->string('description');
          // Rs 350 | Combo Pack
          $table->string('price_per_unit_descr');
          // Also in Ladies
          $table->string('additional_descr');
          // Main View
          $table->string('img_main_view_loc');
          // Alternate Side Views
          $table->string('img_alt_view1_loc');
          $table->string('img_alt_view2_loc');
          $table->string('img_alt_view3_loc');
          // Product Details
          $table->string('additional_info_1');
          $table->string('additional_info_2');
          $table->string('additional_info_3');
          $table->string('additional_info_4');
          $table->string('additional_info_5');

          // Product Description
          $table->string('product_main_descr');
          // Product Information
          $table->string('product_main_info');
          // Product Additional Details
          $table->string('product_addtional_details');
          // Product Customer Reviews
          $table->string('product_cust_reviews1');
          $table->string('product_cust_reviews2');
          $table->string('product_cust_reviews3');

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
        Schema::dropIfExists('accessory_products');
    }
}
