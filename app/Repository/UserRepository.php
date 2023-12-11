<?php
namespace App\Repository;

use App\Models\User;

class CustomerRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }
}