<?php
namespace App\Repository;

use App\Models\Gift;

class GiftRepository extends BaseRepository
{
    public function model()
    {
        return Gift::class;
    }
}