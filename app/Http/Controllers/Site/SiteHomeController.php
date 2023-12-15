<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repository\MessageRepository;
use App\Repository\UserRepository;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class SiteHomeController extends Controller
{
    private $user, $mess;
    public function __construct(UserRepository $user, MessageRepository $mess)
    {
        $this->user = $user;
        $this->mess = $mess;
    }

    public function index()
    {
        $agent = new Agent();
        if ($agent->isMobile()) {
            return view('site.home.index_mb');
        } else {
            return view('site.home.index');
        }
    }

    public function account($code)
    {
        $user = $this->user->first(['code' => $code]);
        if ($user) {
            auth()->login($user);
        }
        return redirect()->route('site.home.index');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('site.home.index');
    }

    public function join(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();
            $params['is_join'] = (int) $request->input('is_join', 0);
            $resU = $this->user->update($user, $params);
            $res['success'] = 1;
            return response()->json($res);
        } else {
            $res['success'] = 1;
            return response()->json($res);
        }
    }

    public function submit(Request $request)
    {
        $params = $request->only('name', 'message');
        $resC = $this->mess->create($params);
        if ($resC) {
            $res['success'] = 1;
            return response()->json($res);
        }
        $res['success'] = 0;
        return response()->json($res);
    }
}
