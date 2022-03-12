<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    public $departments =
    [
        [
            'name' => "Human Resource",
            'responsibility' => "The primary responsibilities associated with human resource management include: job analysis and staffing, organization and utilization of work force, measurement and appraisal of work force performance, implementation of reward systems for employees, professional development of workers, and maintenance of work force.",
        ],
        [
            'name' => "Front Desk",
            'responsibility' => "Keeping front desk tidy and presentable with all necessary material. Greeting and welcoming desks as they approach the front desk. Answering questions and addressing complaints.",
        ],
        [
            'name' => "Marketing",
            'responsibility' => "The marketing department is responsible for identifying, anticipating, and satisfying customer needs and wants profitably. The end goal is to make more profit.",
        ],
        [
            'name' => "Instructor",
            'responsibility' => "A fitness instructor, also known as a personal trainer, provides training and instruction of fitness programs to individuals and groups. The fitness instructor engages clients in exercise routines and weight loss programs, and helps them to reach their individual goals.",
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        foreach ($this->departments as $department) {
            Department::create($department);
        }
    }
}
