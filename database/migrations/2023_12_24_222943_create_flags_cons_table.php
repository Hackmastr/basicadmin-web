<?php

use App\Models\{
    Admin,
    Flag,
    Group,
};
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
        Schema::create('flags_cons', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Flag::class);
            $table->foreignIdFor(Group::class)->nullable();
            $table->foreignIdFor(Admin::class)->nullable();

            $table->timestamps();

            $table->unique(['flag_id', 'admin_id'], 'flag_admin');
            $table->unique(['flag_id', 'group_id'], 'flag_group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flags_cons');
    }
};
