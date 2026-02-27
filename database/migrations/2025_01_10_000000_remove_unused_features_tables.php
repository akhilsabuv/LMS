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
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('blog_categories');
        Schema::dropIfExists('blog_comments');
        Schema::dropIfExists('blog_likes');
        
        Schema::dropIfExists('bootcamps');
        Schema::dropIfExists('bootcamp_categories');
        Schema::dropIfExists('bootcamp_modules');
        Schema::dropIfExists('bootcamp_live_classes');
        Schema::dropIfExists('bootcamp_resources');
        Schema::dropIfExists('bootcamp_purchases');
        
        Schema::dropIfExists('ebooks');
        Schema::dropIfExists('ebook_categories');
        Schema::dropIfExists('ebook_purchases');
        Schema::dropIfExists('ebook_reviews');
        
        Schema::dropIfExists('knowledge_bases');
        Schema::dropIfExists('knowledge_base_topicks');
        
        Schema::dropIfExists('newsletters');
        Schema::dropIfExists('newsletter_subscribers');
        
        Schema::dropIfExists('tutor_bookings');
        Schema::dropIfExists('tutor_categories');
        Schema::dropIfExists('tutor_subjects');
        Schema::dropIfExists('tutor_schedules');
        Schema::dropIfExists('tutor_reviews');
        Schema::dropIfExists('tutor_can_teaches');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No down implementation as we are deleting features
    }
};
