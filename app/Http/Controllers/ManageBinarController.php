<?php

namespace App\Http\Controllers;

use App\Binar;
use Illuminate\Http\Request;
use App\Traits\CreateTrait;

class ManageBinarController extends Controller
{
    use CreateTrait;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCondition2()
    {
        Binar::where('id', '>', 1)->delete();

        $end_leaf = 2**5-1;

        $this->create($end_leaf);

        $binars = Binar::all();

        return view('condition2', [
            'binars' => $binars
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manageBinar(Request $request)
    {
        $cell = Binar::where('id', $request->id)->first();

        $under_cell = Binar::where('level', '>', $cell->level)->get(); // нижестоящие ячейки

        $upper_cell = Binar::where('level', '<', $cell->level)->get(); // вышестоящие ячейки

        return view('upper_under_cell', [
            'cell' => $cell,
            'upper_cell' => $upper_cell,
            'under_cell'    => $under_cell,
        ]);

    }


}
