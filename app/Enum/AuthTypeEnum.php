<?php

namespace App\Enum;

enum AuthTypeEnum: string
{
    case LOGIN = 'login';
    case REGISTER = 'register';
}
