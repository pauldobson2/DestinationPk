<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('trip_title');
            $table->string('title_slug');
            $table->unsignedBigInteger('trip_location'); // Use unsignedBigInteger for foreign keys
          //  $table->foreign('trip_location')->references('id')->on('locations');
            $table->string('trip_destinations')->nullable();
            $table->string('trip_category');
            $table->string('trip_image');
            $table->string('trip_duration');
            $table->text('trip_description');
            $table->text('trip_overview')->nullable();
            $table->text('trip_includes');
            $table->text('trip_excludes');
            $table->text('trip_itinerary');
            $table->decimal('trip_price', 10, 2);
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('trips');
    }
};
