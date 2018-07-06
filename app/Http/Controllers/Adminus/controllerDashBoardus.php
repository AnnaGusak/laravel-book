<?php

namespace App\Http\Controllers\Adminus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class controllerDashBoardus extends Controller
{
    //


    /**
     * Главная страница админки
     * @return [type] [description]
     */
    public function index()
    {
        return view('adminus.index');
    }


    /**
     * Страница статистки блога
     * @return [type] [description]
     */
    public function statisticus()
    {
        return view('adminus.statisticus');
    }

}
