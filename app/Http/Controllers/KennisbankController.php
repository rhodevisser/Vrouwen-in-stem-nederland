<?php

namespace App\Http\Controllers;

class KennisbankController extends Controller
{
    /**
     * Show a list of all items of the kennisbank
     */
    public function index(): View
    {
        $Kennisbank_items = KennisbankItem::select('select * from users where active = ?', [1]);

        return view('kennisbank.index', ['kennisbankItems' => $Kennisbank_items]);
    }
}
