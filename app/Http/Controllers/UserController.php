<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class UserController extends Controller
{
    
    public function downloadPDF()
    {
        $users = User::all();
        $data = [
            'title' => 'All User',
            'date' => Carbon::now(),
            'users' => $users
        ];

        $pdf = PDF::loadview('userspdf', $data);
        return $pdf->download('users.pdf');
    }

    
}
