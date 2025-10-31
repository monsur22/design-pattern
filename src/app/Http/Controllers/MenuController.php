<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu\MenuGroup;
use App\Menu\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        $main = new MenuGroup('Main Menu');
        $main->add(new MenuItem('Home', '/'));
        $main->add(new MenuItem('About', '/about'));

        $services = new MenuGroup('Services');
        $services->add(new MenuItem('Web Development', '/services/web'));
        $services->add(new MenuItem('Mobile App', '/services/mobile'));

        $main->add($services);

        return response()->json($main->toArray());
    }
}
