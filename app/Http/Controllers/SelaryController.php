<?php

namespace App\Http\Controllers;

use App\Selary;
use Illuminate\Http\Request;

class SelaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('add_selary');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_selary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $salary = new Selary;
        // $salary->name = $request->name;

        // $salary->save();



      $validateddata = request()->validate([
          'ename'=>'required',
          'selary'=>'required',
      ]);

    //  $data=$request->all();
     Selary::create($validateddata);
     return redirect('/home');
     
    //  return back()->with('success','Item created successfully!');

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Selary  $selary
     * @return \Illuminate\Http\Response
     */
    public function show(Selary $selary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Selary  $selary
     * @return \Illuminate\Http\Response
     */
    public function edit(Selary $selary)
    {

       


       $selary = Selary::find($selary->id);
        // dd($id);

        return view('edit',[
            'selary'=>$selary,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Selary  $selary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selary $selary)
    {

        $selary = Selary::find($selary->id);

        $selary->update($request->all());

       return redirect('/home');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Selary  $selary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selary $selary)
    {
        $selary = Selary::find($selary->id);
        $selary->delete();
       return redirect('/home');




    }
}
