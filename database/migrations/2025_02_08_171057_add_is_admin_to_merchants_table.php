<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('merchants', function (Blueprint $table) {
        $table->boolean('is_admin')->default(false); // admin ফিল্ড যুক্ত করলাম
    });
}

public function down()
{
    Schema::table('merchants', function (Blueprint $table) {
        $table->dropColumn('is_admin'); // যদি মাইগ্রেশন রিভার্ট হয়, এই ফিল্ডটি বাদ হবে
    });
}

};
