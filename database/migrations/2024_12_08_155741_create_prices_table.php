<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('batch_no', 10);
            $table->string('product_code', 7);
            $table->string('product_price', 100);
            $table->timestamps();
            $table->softDeletes();

            // Add the foreign key constraint
            $table->foreign('product_code') // column in this table
                  ->references('product_code') // column in the referenced table
                  ->on('products') // referenced table
                  ->onDelete('cascade') // action on delete
                  ->onUpdate('cascade'); // action on update
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
