<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

      DB::table('users')->insert([
        [
        'name' => '岩崎蓮',
        'age' => 34,
        'sex' => '男',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '町田里奈',
        'age' => 20,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '横田拓也',
        'age' => 25,
        'sex' => '男',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '矢野萌',
        'age' => 25,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => '沼田舞',
        'age' => 31,
        'sex' => '女',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],

    ]);
    }


    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
