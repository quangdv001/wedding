<?php
namespace App\Repository;

use App\Models\GameResult;

class GameResultRepository extends BaseRepository
{
    public function model()
    {
        return GameResult::class;
    }
}