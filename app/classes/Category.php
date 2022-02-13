<?php


namespace App\classes;


class Category
{
    public function index(){
        return[
            0=>[
                "id"=>1,
                "name"=>"abc"
            ],
            1=>[
                "id"=>2,
                "name"=>"ac2"
            ],
            2=>[
                "id"=>3,
                "name"=>"abc3"
            ]
        ];
    }

}