<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Report::where('employee',auth()->user()->id)->get();
       // return $data;

        return view('pages.employee.history',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date=Carbon::now()->format('Y-n');
        $dates=Report::get('created_at');
        $validation=0;
        foreach ($dates as $d)
        {
            (Carbon::parse($d->created_at)->format('Y-n') == $date ? $validation=1: '');

        }

        return view('pages.employee.report',compact('date','validation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'matches'=>'required',
           'corners'=>'required',
       ]);

        Report::create($request->all());
        return redirect()->route('reports.create')->with('message','Data was added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $date=Carbon::parse($report->created_at)->format('Y-n');
        return view('pages.employee.update',compact('report','date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
       // Report::where('id',$report->id)->update($request->all());

        $input = $request->all();
        $report->fill($input)->save();
        return redirect()->route('reports.index')->with('message','Item was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            Report::find($request->id)->delete();
            $message = 'Item was successfully deleted!';
            return response()->json(['success' => true, 'results' => $message]);
        } catch (\Exception $e) {
            return json_encode(['error' => true, 'results' => print_r($e, true)]);
        }
    }
    public function check(Request $request)
    {
        $date=$request->date;
        $dates=Report::get('created_at');
        $validation=0;
        foreach ($dates as $d)
        {
            (Carbon::parse($d->created_at)->format('Y-n') == $date ? $validation=1: '');

        }
        return response()->json($validation);
    }
}
