<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $aboutUs=Aboutus::first();
        // return $aboutUs;
        return view('backend.partials.aboutus.index',compact('aboutUs'));
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
        //
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
        $request->validate([
            'heading'=>'required',
            'title'=>'required',
            'detail'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $aboutus=Aboutus::findorFail($id);
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/images/aboutus/'), $filename);
            @unlink(public_path('backend/images/aboutus/'.$aboutus->image));
            }
            $aboutus->update([
                'heading' => $request->heading,
                'title' => $request->title,
                'detail' => $request->detail,
                'image' => $filename,
            ]);
            return back()->with('message', 'AboutUs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // -	Advertisement 

    public function advertise(){
        $allAdds = Advertisement::orderBy('id', 'desc')->get();
        return view('backend.partials.advertisement.index',compact('allAdds'));
    }

    public function CreateAdvertise(Request $request){
       $request->validate([
        'heading'=>'required',
        'title'=>'required',
        'detail'=>'required'
       ]);

       $data = $request->all();
       Advertisement::create($data);
       return back()->with('message', 'Advertisement created successfully');
    }

    public function editAdvertise($id){
        $data = Advertisement::find($id);
        return view('backend.partials.advertisement.edit',compact('data'));
    }

    public function UpdateAdvertise(Request $request,$id ){
            $request->validate([
                'heading'=>'required',
                'title'=>'required',
                'detail'=>'required'
            ]);
            $data = $request->all();
            $getData = Advertisement::findOrFail($id);
            $getData->fill($data)->save();
            return redirect()->route('advertise')->with('message', 'Advertisement updated successfully');

    }

    public function deleteAdvertise($id){
        $getData = Advertisement::where('id', $id)->first();
        $getData->delete();
        return redirect()->route('advertise')->with('error', 'Advertisement deleted successfully');
    }
}
