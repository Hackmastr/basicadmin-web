<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flags = [
            "@css/reservation" => "@css/reservation",
            "@css/generic" => "@css/generic",
            "@css/kick" => "@css/kick",
            "@css/ban" => "@css/ban",
            "@css/unban" => "@css/unban",
            "@css/slay" => "@css/slay",
            "@css/changemap" => "@css/changemap",
            "@css/cvar" => "@css/cvar",
            "@css/config" => "@css/config",
            "@css/chat" => "@css/chat",
            "@css/vote" => "@css/vote",
            "@css/password" => "@css/password",
            "@css/rcon" => "@css/rcon",
            "@css/cheats" => "@css/cheats",
            "@css/root" => "@css/root"
        ];

        $data = [];
        $now = now()->format('Y-m-d H:i:s');

        foreach ($flags as $name => $value) {
            $data[] = [
                'name' => $name,
                'value' => $value,
                'created_at' => $now,
                'updated_at' => $now
            ];
        }

//        dd($data);
        Flag::query()->insert($data);
    }
}
