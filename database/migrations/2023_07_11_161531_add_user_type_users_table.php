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
        Schema::table('users', function (Blueprint $table) {
            $table->string('job_title')->nullable()->after ('remember_token');
            $table->text('bio')->nullable()->after('remember_token');
            $table->enum('status', ['approved', 'pending', 'rejected'])->default('pending')->after('remember_token');  
            $table->enum('user_type', ['admin', 'user'])->default('user')->after('remember_token'); 
            $table->softDeletes();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
