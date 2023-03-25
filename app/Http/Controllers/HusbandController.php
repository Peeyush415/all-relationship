<?php

namespace App\Http\Controllers;

use App\Models\Husband;
use Faker\Factory as Faker;
use App\Models\Wife;
use Illuminate\Http\Request;

class HusbandController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $husbands=Husband::with('wife')->get();

        return view('husband-wife.index',compact('husbands'));
    }

    public function seed()
    {
        $faker = Faker::create();

        for($i = 0; $i < 10; $i++){

            $husband=Husband::create([
                'name' => $faker->name,
            ]);

            $wife=Wife::create([
                'name' => $faker->name,
                'husband_id' => $husband->id,
            ]);
        }

        return redirect()->back();
    }




}
