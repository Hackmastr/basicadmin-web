<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    public function index()
    {
        return view('admin.servers.index', [
            'servers' => Server::withTrashed()->get()
        ]);
    }

    public function create()
    {
        return view('admin.servers.create');
    }
}
