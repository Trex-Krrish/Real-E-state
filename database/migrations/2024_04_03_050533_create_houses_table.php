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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('year_built');
            $table->text('description');
            $table->string('location');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->decimal('listing_price', 10, 2); // Decimal with 10 digits and 2 decimal places
            $table->string('seller_name');
            $table->string('seller_email');
            $table->string('seller_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
