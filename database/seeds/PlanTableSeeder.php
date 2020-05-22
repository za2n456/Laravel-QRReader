<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
         * Add Permissions
         *
         */
        if (Plan::where('plan_name', '=', 'Week')->first() === null) {
            Plan::create([
                'plan_name'   => 'Week',
                'description' => '<p>Free 1 menu Everytime/hari.<br>Fast Internet 50mbps.</p>',
                'price'       => '30000',
            ]);
        }

        if (Plan::where('plan_name', '=', 'Month A')->first() === null) {
           Plan::create([
               'plan_name'   => 'Month A',
               'description' => '<p>One dedicated table.<br>Free tiket seminar apapun.<br>Fast Internet 50mbps.</p>',
               'price'       => '500000',
           ]);
        }

       if (Plan::where('plan_name', '=', 'Month B')->first() === null) {
           Plan::create([
               'plan_name'   => 'Month B',
               'description' => '<p>One dedicated table.<br>Free 1 menu Everytime/hari.<br>Free self services (kopi, teh, air mineral, snack).<br>Free tiket seminar apapun.<br>Fast Internet 50mbps.</p>',
               'price'       => '800000',
           ]);
       }
    }
}
