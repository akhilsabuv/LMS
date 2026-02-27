<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('settings')->where('type', 'purchase_code')->delete();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // We cannot restore the purchase code value as it was deleted.
        // But we can re-insert a placeholder if needed.
        DB::table('settings')->insert([
            'type' => 'purchase_code',
            'description' => 'restored_placeholder',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
};
