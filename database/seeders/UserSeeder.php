<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'name' => 'Riby',
            'alamat' => 'Jl ini 1',
            'no_hp' => '081234567',
            'role' => 'dokter',
            'email' => 'riby@gmail.com',
            'password' => '12345678'
        ],
        [
            'name' => 'Riby1',
            'alamat' => 'Jl ini 5',
            'no_hp' => '08123456745',
            'role' => 'dokter',
            'email' => 'riby1@gmail.com',
            'password' => '12345678'
        ],
        [
            'name' => 'Riby2',
            'alamat' => 'Jl ini 9',
            'no_hp' => '0812345987',
            'role' => 'dokter',
            'email' => 'riby2@gmail.com',
            'password' => '12345678'
        ],
        [
            'name' => 'Riby3',
            'alamat' => 'Jl itu 2',
            'no_hp' => '087654321',
            'role' => 'pasien',
            'email' => 'riby3@gmail.com',
            'password' => '12345678'
        ],
        [
            'name' => 'riby4',
            'alamat' => 'Jl itu 4',
            'no_hp' => '08765432123',
            'role' => 'pasien',
            'email' => 'riby4@gmail.com',
            'password' => '12345678'
        ],
        ];
        foreach($data as $d){
            User::create([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'email' => $d['email'],
                'password' => bcrypt($d['password']),
            ]);
        }
    }
}