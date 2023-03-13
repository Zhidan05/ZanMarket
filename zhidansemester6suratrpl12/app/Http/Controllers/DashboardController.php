<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Disposition;
use App\Models\Inbox;
use App\Models\Send;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $inbox=Inbox::count();
        $send=Send::count();
        $disposition=Disposition::count();
        $user=User::count();
        return view('dashboard.index', compact('inbox','send','disposition','user'));
    }

    public function inbox()
    {
        $inbox=Inbox::all();
        $pdf=PDF::loadView('dashboard.inbox', compact('inbox'))->setPaper('a4', 'landscape');
        return $pdf->stream('DataInbox.pdf');
    }
    public function send()
    {
        $send=Send::all();
        $pdf=PDF::loadView('dashboard.send', compact('send'))->setPaper('a4', 'landscape');
        return $pdf->stream('DataSend.pdf');
    }
    public function disposition()
    {
        $disposition=Disposition::all();
        $pdf=PDF::loadView('dashboard.disposition', compact('disposition'))->setPaper('a4', 'landscape');
        return $pdf->stream('DataDisposition.pdf');
    }
    public function user()
    {
        $user=User::all();
        $pdf=PDF::loadView('dashboard.user', compact('user'))->setPaper('a4', 'landscape');
        return $pdf->stream('DataUser.pdf');
    }
}