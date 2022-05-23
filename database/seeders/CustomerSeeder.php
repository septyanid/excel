<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('customers')->insert([
      [
        'customer_id' => '1001',
        'name'        => 'Kevin',
        'gender_id'   => 1,
        'address'     => 'Binong Permai',
      ],
      [
        'customer_id' => '1002',
        'name'        => 'Agung',
        'gender_id'   => 1,
        'address'     => 'Binong Permai',
      ],
      [
        'customer_id' => '1003',
        'name'        => 'Ani',
        'gender_id'   => 2,
        'address'     => 'Binong Permai',
      ],
      [
        'customer_id' => '1004',
        'name'        => 'Ina',
        'gender_id'   => 2,
        'address'     => 'Binong Permai',
      ],
    ]);
  }
}
