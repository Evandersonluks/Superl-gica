<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Services\InfoService;
use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a test page.
     *
     * @return View
     *
     */
    public function index(): View
    {
        $users = User::all();
        $infos = Info::all();

        $results = (new UserService())->getUsersInfo();

        return view('test_three.index')
            ->with('users', $users)
            ->with('infos', $infos)
            ->with('results', $results);
    }

    public function insertUsersAndInfos()
    {
        (new UserService())->insertBaseUsers();
        (new InfoService())->insertBaseInfos();

        $users = User::all();
        $infos = Info::all();

        $results = (new UserService())->getUsersInfo();

        return view('test_three.index')
            ->with('users', $users)
            ->with('infos', $infos)
            ->with('results', $results);
    }
}
