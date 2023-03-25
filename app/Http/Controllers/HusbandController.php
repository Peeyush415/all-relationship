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

    public function create()
    {

        return view('husband-wife.create');

    }

    public function store(Request $request)
    {

        $husband = Husband::create ([
            'name' => $request->input('husband_name')
        ]);

        // $wifeData=array_merge($request->all(),['husband_id' => $husband->id]);
        $wifeData=[
            'name'       => $request->input('wife_name'),
            'husband_id' => $husband->id
        ];
        $wife = Wife::create ($wifeData);

        return redirect()->route('husband-wife.index');
    }




}
