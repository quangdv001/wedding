<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Imports\UsersImport;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
        Excel::import(new UsersImport, $file);
        $res['success'] = 1;
        return response()->json($res);
    }

    public function editName(Request $request)
    {
        $id = $request->input('pk', 0);
        $params['name'] = $request->input('value', '');

        $resU = $this->user->update(['id' => $id], $params);
        if ($resU) {
            return response()->json([], 200);
        }
        return response()->json([], 500);
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
