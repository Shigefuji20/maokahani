<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname', 'fname', 'address', 'capacity', 'price',
    ];

    public static function list() {
        $users = User::orderByRaw('lname, fname')->get();
        $list = [];
        foreach($users as $u) {
            $list[$u->id] = $u->lname . ". " . $u->fname;
        }
        return $list;
    }
}
