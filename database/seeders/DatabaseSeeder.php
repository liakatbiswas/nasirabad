<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder {
 /**
  * Seed the application's database.
  */
 public function run(): void {
  // \App\Models\User::factory(10)->create();

  Student::factory( 5 )->create();

  $user           = new User();
  $user->name     = "Liakat";
  $user->email    = "liakat@gmail.com";
  $user->password = bcrypt( 12345 );
  $user->save();
 }
}
