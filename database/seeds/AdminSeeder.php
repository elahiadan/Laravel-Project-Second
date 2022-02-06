<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\profile;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Inserting role into role table by seeder
        $role = Role::create([
            'name' => 'customer',
            'description' =>'Customer Role'
        ]);
 
         //Inserting role into role table by seeder
        $role =Role::create([
         'name' => 'admin',
         'description' =>'Admin Role'
         ]);
 
 
          //Inserting User(Admin) into role table by seeder also joining table 
         $user = User::create([
             'email' => 'elahiadan7@gmail.com',
             'password' => bcrypt('12345678'),
             'role_id' => $role->id   // role_id is comming from role table
         ]);
 
          //Inserting Profile into role table by seeder also joining table 
         $role = profile::create([
             'user_id' => $user->id  // user_id is comming from User table
         ]);
    }
}
