<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    //

    public function GetPermission(){
        return Permissions::join(
            'permissions',
            'permissions.acceso',
            '=',
            'permissions.id'
        )->get();
    }
}
