<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use DB;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware([Authenticate::class, EnsureEmailIsVerified::class]);
    }

    public function index()
    {
        $notifications = DB::table('notifications')->get();
        return view('dashboard.notifications.index')
        ->with('notifications',$notifications);
        
    }
}
