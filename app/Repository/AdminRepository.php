<?php
namespace App\Repository;

use App\Models\Admin;

class AdminRepository extends BaseRepository
{
    public function model()
    {
        return Admin::class;
    }
}