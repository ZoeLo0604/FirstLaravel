<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\User;

class UserRepository
{
    protected $user;

    /**
     * UserRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return Collection|static[]
     */
    public function getAllUsers()
    {
        return $this->user->all();
    }

    /**
     * @param array $data
     */
    public function store(array $data)
    {
        $user = New User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];

        $user->save();
    }
}