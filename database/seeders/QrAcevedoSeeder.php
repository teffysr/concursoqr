<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Qr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class QrAcevedoSeeder extends Seeder
{
    public function run()
    {
        //With prize
        for ($i=0; $i<4;$i++){
            Qr::create(
                ['sponsor' => 'Agencia Acevedo', 'amount' => (100+$i), 'is_winner' => true, 'available' => true, 'image' => '/sponsors/378.png', 'web' => ''],
            );
        }

    }
}
