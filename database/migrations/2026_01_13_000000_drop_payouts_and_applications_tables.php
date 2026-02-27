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
        Schema::dropIfExists('payouts');
        Schema::dropIfExists('applications');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No down implementation as we are deleting tables permanently
    }
};
