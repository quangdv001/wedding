<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\MessageRepository;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    private $mess;
    public function __construct(MessageRepository $mess)
    {
        $this->mess = $mess;
    }

    public function index(Request $request)
    {
        $data = $this->mess->all();
        return view('admin.message.index', compact('data'));
    }
}
