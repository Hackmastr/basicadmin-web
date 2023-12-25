<?php

use App\Models\Admin;
use App\Models\Group;
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
        Schema::create('group_admins', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Group::class);
            $table->foreignIdFor(Admin::class);

            $table->timestamps();

            $table->unique(['group_id', 'admin_id'], 'group_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_admins');
    }
};
