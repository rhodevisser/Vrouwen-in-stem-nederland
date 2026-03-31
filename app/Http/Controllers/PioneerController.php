<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PioneerController extends Controller
{
    public function HallOfFameIndex() {
        $pioneers = [
            [
                'name' => 'Ada Lovelace',
                'role' => 'First Computer Programmer',
                'image' => 'Ada_Lovelace_daguerreotype_by_Antoine_Claudet_1843_-_cropped.png',
                'slug' => 'ada_lovelace'
            ],
            [
                'name' => 'Pauline Vos',
                'role' => 'Software Engineer @ MongoDB and Conference Speaker',
                'image' => 'paulineVos.jpg',
                'slug' => 'pauline_vos'
            ],
            [
                'name' => 'Lindsay Walton',
                'role' => 'Front-end Developer',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'slug' => 'lindsay_walton'
            ],
            [
                'name' => 'Leslie Alexander',
                'role' => 'Co-Founder / CEO',
                'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'slug' => 'leslie_alexander'
            ],
            [
                'name' => 'Courtney Henry',
                'role' => 'Designer',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'slug' => 'leslie_alexander'
            ],
            [
                'name' => 'Grace Hopper',
                'role' => 'Computer Scientist, Mathematician, and US Navy Rear Admiral',
                'image' => 'GraceHopper.jpg',
                'slug' => 'grace_hopper'
            ]
        ];

        return view('hall-of-fame', compact('pioneers'));

    }
}
