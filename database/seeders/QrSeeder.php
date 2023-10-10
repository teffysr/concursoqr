<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Qr;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class QrSeeder extends Seeder
{
    public function run()
    {
        //With prize
        for ($i=0; $i<15;$i++){
            Qr::create(
                ['sponsor' => 'Merope', 'amount' => (100+$i), 'is_winner' => true, 'available' => true, 'image' => '/sponsors/Merope.png', 'web' => ''],
            );
        }

        for ($i=0; $i<15;$i++){
            Qr::create(
                ['sponsor' => 'Baru', 'amount' => (100+$i), 'is_winner' => true, 'available' => true, 'image' => '/sponsors/Baru.png', 'web' => ''],
            );
        }

        for ($i=0; $i<8;$i++){
            Qr::create(
                ['sponsor' => 'Market', 'amount' => (100+$i), 'is_winner' => true, 'available' => true, 'image' => '/sponsors/Market.png', 'web' => ''],
            );
        }

        for ($i=0; $i<4;$i++){
            Qr::create(
                ['sponsor' => 'Bitconf', 'amount' => (100+$i), 'is_winner' => true, 'available' => true, 'image' => '/sponsors/Labitconf.png', 'web' => ''],
            );
        }

        for ($i=0; $i<8;$i++){
            Qr::create(
                ['sponsor' => 'La Puntita', 'amount' => (100+$i), 'is_winner' => true, 'available' => true, 'image' => '/sponsors/LaPuntita.png', 'web' => ''],
            );
        }

        //Only Trafic
            Qr::create(
                ['sponsor' => 'Pago Linea', 'amount' => 0, 'is_winner' => false, 'available' => true, 'image' => '/sponsors/Market.png', 'web' => 'https://www.instagram.com/pago_linea/?igshid=MzRlODBiNWFlZA%3D%3Dhttps://pagolinea.com/'],
            );


            Qr::create(
                ['sponsor' => 'Merope', 'amount' => 0, 'is_winner' => false, 'available' => true, 'image' => '/sponsors/Merope.png', 'web' => 'https://www.instagram.com/merope.ba/'],
            );


            Qr::create(
                ['sponsor' => 'Baru', 'amount' => 0, 'is_winner' => false, 'available' => true, 'image' => '/sponsors/Baru.png', 'web' => 'https://www.instagram.com/barugastropub/'],
            );


            Qr::create(
                ['sponsor' => 'Market', 'amount' => 0, 'is_winner' => false, 'available' => true, 'image' => '/sponsors/Market.png', 'web' => 'https://www.instagram.com/pagotienda.market/'],
            );


            Qr::create(
                ['sponsor' => 'Bitconf', 'amount' => 0, 'is_winner' => false, 'available' => true, 'image' => '/sponsors/Labitconf.png', 'web' => 'https://www.instagram.com/labitconf/'],
            );


            Qr::create(
                ['sponsor' => 'La Puntita', 'amount' => 0, 'is_winner' => false, 'available' => true, 'image' => '/sponsors/LaPuntita.png', 'web' => 'https://www.instagram.com/lapuntita_baires/'],
            );

    }
}
