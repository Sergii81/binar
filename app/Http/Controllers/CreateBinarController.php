<?php

namespace App\Http\Controllers;

use App\Binar;
use Illuminate\Http\Request;
use App\Traits\FindTrait;

class CreateBinarController extends Controller
{
    use FindTrait;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCondition1()
    {
        return view('condition1');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createBinar(Request $request)
    {

        Binar::where('id', '>', 1)->delete();

        $parent_id = $request->parent_id;
        $position = $request->position;

        if($position == 1) {
            $end_leaf = $parent_id*2;
        } else {
            $end_leaf = $parent_id * 2 + 1;
        }

        $this->create($end_leaf);
        $binars = Binar::all();

        return view('created_binar', ['binars' => $binars]);
    }



}
