<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Partner;
use File;
class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('pages.admin.angajati',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create_part');
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
            'title'=> 'required',
            'description'=>'required',
            'img'=>'required',
            ]);

       // Partner::create($request->all());
       $image = $request->file('img');
        $extenstion = $image->getClientOriginalExtension();
        $filename= time().'.'.$extenstion;
        $image->move('uploads', $filename);

       Partner::create([
           'title'=>$request->title,
           'description'=>$request->description,
           'img'=>$filename
       ]);


        return redirect()->route('crud.create')->with('message','Data was stored!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Partner::find($id);
        return view('pages.admin.edit_part',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request, [
            'title'=> 'required',
            'description'=>'required',
            ]);
            $partner=Partner::find($id);

            if($request->hasfile('img')) {
                $path='uploads/'.$partner->img;
                if(File::exists($path))
                {
                    File::delete($path);
                }
                $image = $request->file('img');
                $extenstion = $image->getClientOriginalExtension();
                $filename= time().'.'.$extenstion;
                $image->move('uploads/', $filename);
                Partner::where('id',$id)->update(['title'=>$request->title,
                'description'=>$request->description,
                'img'=>$filename]);


            }
            else{
                Partner::where('id',$id)->update(['title'=>$request->title,
                'description'=>$request->description]);
            }

        return redirect()->route('crud.index')->with('message','Item was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::find($id)->delete();
        return redirect()->back()->with('message','Item was deleted!');
    }
}
