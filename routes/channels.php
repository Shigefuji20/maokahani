<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated venue$venue can listen to the channel.
|
*/

Broadcast::channel('App.Venue.{id}', function ($venue, $id) {
    return (int) $venue->id === (int) $id;
});
