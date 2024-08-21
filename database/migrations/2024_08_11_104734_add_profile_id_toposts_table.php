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
        Schema::table('posts', function (Blueprint $table) {
            // Check if the column already exists
            if (!Schema::hasColumn('posts', 'profile_id')) {
                $table->unsignedInteger('profile_id')->nullable(); // You might want to make this nullable initially
                $table->foreign('profile_id')->references('id')->on('profs')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Check if the column exists before attempting to drop it
            if (Schema::hasColumn('posts', 'profile_id')) {
                $table->dropForeign(['profile_id']);
                $table->dropColumn('profile_id');
            }
        });
    }
};
