<?php

namespace blog\forms\User;

use blog\entities\User;
use yii\base\Model;

class ProfileEditForm  extends Model
{
    public $email;

    public $_user;

    public function __construct(User $user, $config = [])
    {
        $this->email = $user->email;
        $this->_user = $user;
        parent::__construct($config);
    }

    public function rules(): array
    {
        return [
            [['email'], 'required'],
            ['email', 'email'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::class, 'filter' => ['<>', 'id', $this->_user->id]],
        ];
    }
}