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
        Schema::create('f_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');                                                                        // ✅ Menu Name
            $table->string('img')->nullable();                                                             // ✅ Image (optional)
            $table->text('description')->nullable();                                                       // ✅ Description (optional)
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');              // ✅ Category
            $table->foreignId('allergies_id')->nullable()->constrained('allergies')->onDelete('set null'); // ✅ Allergies (optional)
            $table->boolean('is_active')->default(true);                                                   // ✅ Active Status
            $table->decimal('price', 10, 2);                                                               // ✅ Price (e.g., 9999.99)
            $table->boolean('is_promotion')->default(false);                                               // ✅ Is Promotion?
            $table->boolean('is_special')->default(false);                                                 // ✅ Is Special?
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_menus');
    }
};