<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bayu;

class BayuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bayus = Bayu::all();
         return view('grace.index', compact('bayus'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grace.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required',
        ]);
        $bayus = Bayu::create($request->all());
          return redirect('bayu')->with('success', 'Data Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayu $id)
    {
        $data = Bayu::find($id);;
        return view('grace.edit', compact('data'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bayu::find($id);
        $rules = [
            'title' => 'required',
            'body' => 'required'
        ];
        if($request->author != $data->author) {
            $rules['author'] = 'required|unique:bayu';
        }
        $validatedData = $request->validate($rules);
        $data->update($request->all());
        return redirect(url('data.bayu'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayu $id)
    {
        $id->delete();
        return redirect('bayu')->with('success', 'Data Berhasil dihapus!');
    }
}
