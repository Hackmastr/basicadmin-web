<?php

namespace App\Console\Commands;

use App\Models\Punishment;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExpireBansCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ba:expire-puns {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire punishments. If --force is passed, it will expire all punishments by setting length to -1. Otherwise it will only expire punishments that haven\'t expired (expire_at < now).';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $prefix = DB::getTablePrefix();

        if ($this->option('force')) {
            DB::statement("
                UPDATE {$prefix}punishments
                SET length = -1
                WHERE length > 0
            ");

            return self::SUCCESS;
        }

        DB::statement("
            UPDATE {$prefix}punishments
            SET length = IF(length - 1 = 0, -1, length - 1)
            WHERE expires_at >= NOW()
        ");

        return self::SUCCESS;
    }
}
