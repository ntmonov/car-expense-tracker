<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all()->toArray();
        return view('home.index', ['cars'=>$cars]);
    }

    public function create() {
        return view('cars.create.index');
    }

    public function store(Request $request) {
        $request->validate([
            'brand'=>'required',
            'model'=>'required',
            'description'=>'required|max:300',
            'price'=>'required|numeric',
            'dateOfPurchase'=>'required|date'
        ]);

        // $file = $request->file('image');

        // if ($file) {
        //     $fileName = time() . $file->getClientOriginalName();

        //     Storage::putFileAs('', $file, $fileName);
        // }

        // $fields = $request->except('_token');

        // if ($file) {
        //    $fields['photo'] = $fileName;
        // }

        Car::create($request->except('_token'));

        return redirect()->route('home.index');
    }

    public function edit(Request $request) {
        dd($request);
    }
}
