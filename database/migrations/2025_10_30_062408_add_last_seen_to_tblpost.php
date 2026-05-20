<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tblpost', function (Blueprint $table) {
            $table->string('last_seen')->nullable()->after('media');
        });
    }

    public function down(): void
    {
        Schema::table('tblpost', function (Blueprint $table) {
            $table->dropColumn('last_seen');
        });
    }
};
