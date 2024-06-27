<?php

namespace App\Http\Controllers;

use App\Models\Chaliht;
use Illuminate\Http\Request;

class ChalihtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.chalite.index')->with('chalits',Chaliht::orderBy('id','desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.chalite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chalte = new Chaliht();
        $chalte->title = $request->title;
        $chalte->thumb_image = $request->thumb_image->store('chalite/thumb_image');
        $images = [];
        foreach($request->images as $image){
            $im  = $image->store('chalite/images');
            array_push($images,$im);
        }
        $chalte->images = json_encode($images);
        $chalte->category = $request->category;
        $chalte->dgree = $request->dgree;
        $chalte->stars = $request->stars ;
        $chalte->have_pool = $request->have_pool;
        $chalte->price = $request->price;
        $chalte->discount = $request->discount;
        $chalte->state = $request->state;
        $chalte->map = $request->map;
        $chalte->description = $request->description;
        $chalte->phone = $request->phone;
        $chalte->whatsapp = $request->whatsapp; 
        $chalte->save();
        return redirect()->route('chalites.index')->with('success','تم الاضافة بنجاح');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chaliht  $chaliht
     * @return \Illuminate\Http\Response
     */
    public function show(Chaliht $chaliht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chaliht  $chaliht
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.chalite.edit')->with('product',Chaliht::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chaliht  $chaliht
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chalte = Chaliht::find($id);
        $chalte->title = $request->title;
        if($request->thumb_image != null){
            $chalte->thumb_image = $request->thumb_image->store('chalite/thumb_image');
        }
        $images = [];
        if($request->images != null){
            foreach($request->images as $image){
                $im  = $image->store('chalite/images');
                array_push($images,$im);
            }
            $chalte->images = json_encode($images);
        }
        
        $chalte->category = $request->category;
        $chalte->dgree = $request->dgree;
        $chalte->stars = $request->stars ;
        $chalte->have_pool = $request->have_pool;
        $chalte->price = $request->price;
        $chalte->discount = $request->discount;
        $chalte->state = $request->state;
        $chalte->map = $request->map;
        $chalte->description = $request->description;
        $chalte->phone = $request->phone;
        $chalte->whatsapp = $request->whatsapp; 
        $chalte->save();
        return redirect()->back()->with('success','تم التعديل بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chaliht  $chaliht
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chalte =Chaliht::find($id);
        $chalte->delete();
        return redirect()->back()->with('success','تم الحذف بنجاح');

    }
}
