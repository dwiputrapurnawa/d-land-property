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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('project_name')->nullable();
            $table->string('property_type')->nullable();
            $table->string('location')->nullable();
            $table->string('slug')->nullable();
            $table->string('price_from')->nullable();
            $table->float('capital_gain')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('rental_cash_flow')->nullable();
            $table->float('occupancy_rate')->nullable();
            $table->string('project_showcase_title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['draft', 'publish'])->default('draft');
            $table->float('area')->nullable();
            $table->float('building_area')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->boolean('private_pool')->nullable();
            $table->boolean('carport')->nullable();
            $table->float('roads_time')->nullable();
            $table->string('roads_to')->nullable();
            $table->float('religion_time')->nullable();
            $table->string('religion_to')->nullable();
            $table->float('hotels_time')->nullable();
            $table->string('hotels_to')->nullable();
            $table->float('airports_time')->nullable();
            $table->string('airports_to')->nullable();
            $table->json('amenities')->nullable();
            $table->string('dp_from')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
