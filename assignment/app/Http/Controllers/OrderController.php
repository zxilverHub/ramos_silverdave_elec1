<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customerView($id, $name, $address)
    {
        return view('customer', ["id" => $id, "name" => $name, "address" => $address]);
    }

    public function itemView($noitem, $name, $price)
    {
        return view('item', ["noitem" => $noitem, "name" => $name, "price" => $price]);
    }


    public function dateView($id, $name, $orderno, $date)
    {
        return view('date', ["id" => $id, "name" => $name, "orderno" => $orderno, "date" => $date]);
    }

    public function detailsView($transno, $orderno, $itemid, $name, $price, $qty)
    {
        return view('detail', [
            "transno" => $transno,
            "orderno" => $orderno,
            "itemid" => $itemid,
            "name" => $name,
            "price" => $price,
            "qty" => $qty,
        ]);
    }
}
