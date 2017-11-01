<?php

namespace App\Http\ViewComposer;

use Auth;
use App\User;
use Illuminate\View\View;

class UserComposer
{
    private $user;

    public function compose(View $view)
    {
        if (! $this->user) {
            if (Auth::check()) {
                $this->user = Auth::user();
                $this->user->load('role');
            } else {
                $this->user = new User;
            }
        }

        return $view->with('user', $this->user);
    }
}
