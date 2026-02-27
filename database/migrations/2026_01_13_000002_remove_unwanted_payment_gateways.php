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
        if (Schema::hasColumn('payment_gateways', 'identifier')) {
            DB::table('payment_gateways')
                ->whereIn('identifier', ['aamarpay', 'doku', 'flutterwave', 'maxicash', 'sslcommerz', 'paystack'])
                ->delete();
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Re-insertion logic is complex due to JSON fields, skipping for cleanup task.
    }
};
