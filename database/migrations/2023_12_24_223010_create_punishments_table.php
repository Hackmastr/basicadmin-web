<?php

use App\Models\Server;
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
        Schema::create('punishments', function (Blueprint $table) {
            $table->id();


            $table->foreignIdFor(Server::class);
            $table->bigInteger('admin_id'); // $table->foreignIdFor(Admin::class);
            $table->bigInteger('target');
            $table->string('target_name');
            $table->string('reason', 1024);
            $table->integer('length');
            $table->unsignedTinyInteger('type')->comment('0 = ban, 1 = mute, 2 = kick');
            $table->dateTime('expires_at');

            $table->timestamps();

            $table->index('expires_at', 'idx_punishments_ex_at');
            $table->index('target', 'idx_punishments_st');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punishments');
    }
};
