<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->insert([
            'code' => '123455',
            'value' => '50',

        ]);
    }
}
