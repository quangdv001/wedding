<?php
namespace App\Repository;

use App\Models\Message;

class MessageRepository extends BaseRepository
{
    public function model()
    {
        return Message::class;
    }
}