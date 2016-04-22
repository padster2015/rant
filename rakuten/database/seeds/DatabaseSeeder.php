<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Patrick Henry',
            'email' => 'patrick.henry@rakuten.com',
            'password' => Hash::make('TaylorSwiftE>'),
        ]);
    }
}
