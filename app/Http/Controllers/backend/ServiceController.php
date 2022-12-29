<?php

namespace App\Http\Controllers\backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $services = Service::get();
        return view('backend.partials.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'name'=>'required',
        'price'=>'required',
        'description'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
       ]);
       if ($request->file('image')) {
        $file = $request->file('image');
        $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('backend/images/service/'), $filename);
        }
        $service = Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return back()->with('message', 'New service added successfully');
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
    public function edit($id)
    {
        $service = Service::find($id);
        return view('backend.partials.service.edit',compact('service'));
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
        $request->validate([
            'name' =>'required',
            'price' =>'required',
            'description' =>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $service = Service::findOrFail($id);
        if($request->file('image')){
            $file=$request->file('image');
            $filename= date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('backend/images/service/'),$filename);
            @unlink(public_path('backend/images/service/'.$service->image));
        }
        $service->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect()->route('services.index')->with('message','service updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getData = Service::findOrFail($id);
        if ($getData) {
            @unlink(public_path('backend/images/service/'.$getData->image));
            $getData->delete();
            return back()->with('error','service deleted successfully!');
        }
    }
}
