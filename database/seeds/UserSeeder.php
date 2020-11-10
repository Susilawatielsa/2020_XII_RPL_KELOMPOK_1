<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'usr_email' => 'admin@example.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('admin123123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');

        $siswa = User::create([
            'usr_name' => 'Ahmad Suherman',
            'usr_email' => 'ahmad@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('ahmad123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Rendy Josua Hutagaol',
            'usr_email' => 'rendy@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('rendy123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Dede Suminar',
            'usr_email' => 'dede@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('dede123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Elsa Susilawati',
            'usr_email' => 'elsa@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('elsa123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa = User::create([
            'usr_name' => 'Sumiartini Sri Rahayu',
            'usr_email' => 'Sumi@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('sumi123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $siswa->assignRole('student');

        $guru = User::create([
            'usr_name' => 'Siti Robiah',
            'usr_email' => 'siti@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('siti1234'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru = User::create([
            'usr_name' => 'Agus Sofian',
            'usr_email' => 'agus@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('agus1234'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru = User::create([
            'usr_name' => 'Dewi Astri Indriani',
            'usr_email' => 'dewi@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('dewi1234'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $guru->assignRole('teacher');

        

        $staff_TU = User::create([
            'usr_name' => 'Hamdan Firmansyah,S.Pd',
            'usr_email' => 'hamdan@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('hamdan123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $staff_TU = User::create([
            'usr_name' => 'Enjang Suryana',
            'usr_email' => 'Enjang@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('enjang123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $staff_TU = User::create([
            'usr_name' => 'Rifka Nur F',
            'usr_email' => 'rifka@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('rifka123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);


        $staff_TU->assignRole('staff');
    }
}
