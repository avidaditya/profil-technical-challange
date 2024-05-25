<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // For developer
        $developer = User::create([
            'email' => 'luthfi.akbar@gojek.com',
            'password' => bcrypt('oic123!'),
            'name' => 'Super Admin',
        ]);

        $developer->assignRole('superadmin');

        // For client
        $superadmin = User::create([
            'email' => 'varyan.griyandi@gojek.com',
            'password' => bcrypt('oic123!'),
            'name' => 'Varyan',
        ]);
        $superadmin->assignRole('superadmin');
        $superadmin = User::create([
            'email' => 'natasya.putri@gojek.com',
            'password' => bcrypt('oic123!'),
            'name' => 'Natasya',
        ]);
        $superadmin->assignRole('superadmin');
        $superadmin = User::create([
            'email' => 'distiyanda.s.interns@aux.gojek.com',
            'password' => bcrypt('oic123!'),
            'name' => 'Distiya',
        ]);
        $superadmin->assignRole('superadmin');
        $superadmin = User::create([
            'email' => 'gabriella.susilo@gmail.com',
            'password' => bcrypt('oic123!'),
            'name' => 'Gaby',
        ]);
        $superadmin->assignRole('superadmin');

        // // Member Test Only
        // $member = User::create([
        //     'email' => 'test@member.com',
        //     'password' => bcrypt('12345678'),
        //     'name' => 'Test Member',
        // ]);
        // $member->assignRole('member');

        // $member = User::create([
        //     'email' => 'motion.dee@gmail.com',
        //     'password' => bcrypt('12345678'),
        //     'name' => 'Test Member 2',
        //     'email_verified_at' => Carbon::now(),
        //     'consent_date' => Carbon::now(),
        // ]);
        // $member->assignRole('member');
        // $member = User::create([
        //     'email' => 'test3@member.com',
        //     'password' => bcrypt('12345678'),
        //     'name' => 'Test Member 3',
        //     'email_verified_at' => Carbon::now(),
        //     'consent_date' => Carbon::now(),
        // ]);
        // $member->assignRole('member');
        // $member = User::create([
        //     'email' => 'test4@member.com',
        //     'password' => bcrypt('12345678'),
        //     'name' => 'Test Member 4',
        //     'email_verified_at' => Carbon::now(),
        //     'consent_date' => Carbon::now(),
        //     'is_blocked' => true,
        // ]);
        // $member->assignRole('member');
        // $member = User::create([
        //     'email' => 'test5@member.com',
        //     'password' => bcrypt('12345678'),
        //     'name' => 'Test Member 5',
        //     'email_verified_at' => Carbon::now(),
        //     'consent_date' => Carbon::now(),
        //     'is_blocked' => true,
        // ]);
        // $member->assignRole('member');
    }
}
