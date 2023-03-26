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
    public function index(Request $request)
    {
        if(isset($request) && $request->input('search_husband_wife')){

            $search_husband_wife=$request->input('search_husband_wife');
            $husbands=$this->search($search_husband_wife);

            // $husbands=Husband::with('wife')->orderByDesc('id')->get();
        }
        else{
            $husbands=Husband::with('wife')->orderByDesc('id')->get();
        }

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

    public function edit ($id)
    {
        $husband = Husband::with('wife')->find($id);

        // dd($husband);
        return view('husband-wife.edit',compact('husband'));
    }

    public function update(Request $request, $id)
    {
       $husband = Husband::find($id);

       if($husband){
            $husband->update([
                'name' => $request->input('husband_name')
            ]);
       }

    //    $wife=Wife::where('husband_id',$id)->get();

       $husband->wife->update([
            'name' => $request->input('wife_name')
       ]);

       return redirect()->route('husband-wife.index');

    }

    public function search($search_husband_wife)
    {
        // $search_husband=$request->input('search_husband');
        // $search_husband=
        // dd($request->all());
        $husbands=Husband::with('wife')
                    ->where('name','like',"%$search_husband_wife%")
                    ->orWhereHas('wife', function($q) use ($search_husband_wife){
                        $q->where('name','like',"%$search_husband_wife%");
                    })
                    ->orderByDesc('id')
                    ->get();

        return $husbands;

    }

    public function destroy ($id)
    {

        $husband = Husband::with('wife')->find($id);

        if($husband){
            $husband->delete();
        }

        return redirect()->route('husband-wife.index');

    }




}
