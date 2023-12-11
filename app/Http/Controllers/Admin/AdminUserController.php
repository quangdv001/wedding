<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private $user;
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $data = $this->user->all();
        return view('admin.user.index', compact('data'));
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        
    }
}
