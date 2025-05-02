<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat.{id}', function ($user, $id) {
    return true; // Or add auth check
});

Broadcast::channel('user.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

