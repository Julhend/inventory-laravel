<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
    [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'role' => 'admin',
        'password' => bcrypt('123456')
    ],
    [
        'name' => 'staff',
        'email' => 'user@user.com',
        'role' => 'staff',
        'password' => bcrypt('123456')
    ],
    [
        'name' => 'kepala bagian',
        'email' => 'kepalabagian@lead.com',
        'role' => 'staff',
        'password' => bcrypt('123456')
    ]
];
    foreach($records as $record) {
    App\User::firstOrCreate($record);
}
    }
}