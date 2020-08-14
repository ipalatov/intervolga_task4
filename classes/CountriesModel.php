<?php

namespace classes;

class CountriesModel
{
    public function getIndex()
    {
        $data[] = [
            'id' => 1,
            'name' => 'Russian Federation',
            'abb_name' => 'RUS',
            'population' => 146745098
        ];
        $data[] = [
            'id' => 2,
            'name' => 'United States of America',
            'abb_name' => 'USA',
            'population' => 329210630
        ];
        $data[] = [
            'id' => 3,
            'name' => 'Federal Republic of Germany',
            'abb_name' => 'GER',
            'population' => 83149300
        ];
        $data[] = [
            'id' => 4,
            'name' => 'United Kingdom',
            'abb_name' => 'UK',
            'population' => 60800000
        ];

        return $data;
    }
}
