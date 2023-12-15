<?php

namespace App\Imports;

use App\Models\User;
use App\Repository\UserRepository;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $params = [
            'code' => random_int(100000, 199999),
            'name' => $row[1],
            'group' => $row[2],
            'from' => $row[3]
        ];

        return app(UserRepository::class)->create($params);

        // return new User([
        //     'code' => Str::random(6),
        //     'name' => $row[1],
        //     'group' => $row[2],
        //     'from' => $row[3]
        // ]);
    }
}
