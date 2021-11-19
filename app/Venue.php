<?php

namespace App;
use Illuminate\Foundation\Auth\Venue as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Venue extends Authenticatable
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
        $venue = User::orderByRaw('lname, fname')->get();
        $list = [];
        foreach($venue as $u) {
            $list[$u->id] = $u->lname . ". " . $u->fname;
        }
        return $list;
    }
}
