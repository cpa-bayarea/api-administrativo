<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ModeloController;

class UserController extends ModeloController
{
    protected $fieldsValidate = [
        'password'  => 'required|string|min:6|max:30',
        'email'     => 'required|string|max:100',
        'name'      => 'required|string|max:100',
        'is_admin'  => 'required|string|max:1',
        'matricula' => 'required|string|max:100',
        'aluno_id'  => '',
    ];
}
