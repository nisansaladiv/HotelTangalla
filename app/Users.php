<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Users extends Model implements AuthenticatableContract {
    use\Illuminate\Auth\Authenticatable;

}
