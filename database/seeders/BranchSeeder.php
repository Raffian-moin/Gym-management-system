<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Branch;

class BranchSeeder extends Seeder
{
    public $data = 
    [
        [
            'name' => "Branch 1",
            'mobile_number' => "01951851116",
            'Email' => "branch1@gmail.com",
            'Address' => "221B Baker Street,London",
        ],
        [
            'name' => "Branch 2",
            'mobile_number' => "01951851116",
            'Email' => "branch2@gmail.com",
            'Address' => "1007 Mountain Drive, Gotham.",
        ],
        [
            'name' => "Branch 3",
            'mobile_number' => "01951851116",
            'Email' => "branch3@gmail.com",
            'Address' => "Hogwarts School of Witchcraft and Wizardry",
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Branch::truncate();
        foreach ($this->data as $branch) {
            Branch::create($branch);
        }
    }
}
