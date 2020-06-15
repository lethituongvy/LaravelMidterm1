<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use\App\Tour;

class DashboardController extends Controller
{

    function index()
    {
        $indexP = DB::table('tours')->get();
        return view('/admin.tour.dashboard', ['display' => $indexP]);
    }
    // insert products
    function store(Request $request)
    {
        $name = $request->input('name');
        $filePath = $request->file('image')->store("public");
        $typetour = $request->input('typetour');
        $schedule = $request->input('schedule');
        $depart = $request->input('depart');
        $numberPeople = $request->input('numberPeople');
        $price = $request->input('price');
        $tour = new Tour;
        $tour->name = $name;
        $tour->image =$filePath;
        $tour->typetour =$typetour;
        $tour->schedule=$schedule;
        $tour->depart =$depart;
        $tour->numberPeople =$numberPeople;
        $tour->price =$price;
        $tour->save();
        return redirect('/admin/tour/index');
    }

    // chuyen den form insert
    function create()
    {
        return view("admin.tour.create");
    }
}
