<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SaCodesWeekends;
use App\Models\Contributors;

class SaCodesWeekendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contributors = Contributors::factory()->create(
            [
                'first_name' => 'Jhon',
                'last_name' => 'Nasendi',
            ]
        );


        // SACODE'S WEEKEND FACTORY

        SaCodesWeekends::factory(3)->create([
            'contributor_id' => $contributors->id
        ]);


        SaCodesWeekends::factory()->create([
            'contributor_id' => '2',
            'topic' => 'Asperiores accusamus laborum animi quia dolorum et expedita.',
            'description' => 'Asperiores accusamus laborum animi quia dolorum et expedita.'
        ]);
        
    }
}
