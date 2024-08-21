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
        Schema::create('profs', function (Blueprint $table) {
            $table->id();
            $table->String('name',40); 
            $table->String('email',30)->unique();
            $table->String('password',200);
            $table->text('bio'); 
            $table->timestamps();
            if (!Schema::hasColumn('profs', 'remember_token')) {
                $table->string('remember_token', 100)->nullable()->after('password');
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
        Schema::dropIfExists('profs');
        Schema::table('profs', function (Blueprint $table) {
            if (Schema::hasColumn('profs', 'remember_token')) {
                $table->dropColumn('remember_token');
            }
        });
    }
};
