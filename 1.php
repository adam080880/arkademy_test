<?php    
    function data(string $nama, int $umur) {
        $data = [
            'name' => $nama,
            'age' => $umur,
            'address' => 'perum bandara ilhami b29, kec kosambi, kab tangerang, banten, 15215, Indonesia',
            'hobbies' => [
                'Coding',
                'Playing Game',
                'Eating Snack'
            ],
            'is_married' => false,
            'list_school' => [
                [
                    'name' => 'SDN 4 Desa Rawa Rengas',
                    'year_in' => 2011,
                    'year_out' => 2016,
                    'major' => '-'
                ],
                [
                    'name' => 'SMPN 1 Teluknaga',
                    'year_in' => 2016,
                    'year_out' => 2018,
                    'major' => '-'
                ],
                [
                    'name' => 'SMKN 4 Kota Tangerang',
                    'year_in' => 2018,
                    'year_out' => 2020,
                    'major' => 'Software Engineering / Rekayasa Perangkat Lunak'
                ]
            ],
            'skills' => [
                [
                    'skill_name' => 'Laravel',
                    'level' => 'Beginner'
                ],
                [
                    'skill_name' => 'Node Js (Express)',
                    'level' => 'Beginner'
                ],
                [
                    'skill_name' => 'React JS',
                    'level' => 'Beginner'
                ],
                [
                    'skill_name' => 'Web Design',
                    'level' => 'Beginner'
                ]
            ],
            'interest_in_coding' => true
        ];

        return json_encode($data);
    }
    header('Content-Type:application/json');
    echo data("Muhamad Adam", 17);
?>