<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageViews extends Model
{
    use HasFactory;

    public static function createViewLog() {
        $postsViews= new PageViews();
        $postsViews->id_post = 1;
        $postsViews->titleslug = 'auto-insurance';
        $postsViews->url = \Request::url();
        $postsViews->session_id = \Request::getSession()->getId();
        $postsViews->user_id = '11';
        $postsViews->ip = \Request::getClientIp();
        $postsViews->agent = \Request::header('User-Agent');
        $postsViews->save();
    }
}
