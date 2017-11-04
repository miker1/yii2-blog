<?php

namespace blog\useCases\cabinet;

use blog\forms\User\ProfileEditForm;
use blog\repositories\UserRepository;

class ProfileService
{
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function edit($id, ProfileEditForm $form): void
    {
        $user = $this->users->get($id);
        $user->editProfile($form->email);
        $this->users->save($user);
    }
}