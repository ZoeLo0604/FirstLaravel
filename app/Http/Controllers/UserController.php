<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAllUser()
    {
        $users = $this->userService->getAllUsers();

        return view('pages.tables', compact('users'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createUser(Request $request)
    {
        $this->validate($request, [
            'name'                  => 'required|min:3|max:32',
            'email'                 => 'required|email',
            'password'              => 'required|min:3|max:32',
            'password_confirmation' => 'required|same:password'
        ]);

        $user = array(
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => $request->input('password')
        );
        $this->userService->addUser($user);
        return redirect('/sample/tables');
    }
}
