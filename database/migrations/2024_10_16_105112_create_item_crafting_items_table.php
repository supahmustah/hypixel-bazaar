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
        Schema::create('item_crafting_items', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id'); // Reference to the main item
            $table->unsignedBigInteger('crafting_item_id'); // Reference to the crafting item
            $table->integer('quantity');

            // Setting foreign keys with cascading on delete (optional)
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('crafting_item_id')->references('id')->on('items')->onDelete('cascade');

            $table->primary(['item_id', 'crafting_item_id']); // Composite primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_crafting_items');
    }
};
