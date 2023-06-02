<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use carbon\carbon;
use App\models\crud;
use Session;
use App\models\data;
use App\models\item;
use PDF;




class crudscontroller extends Controller
{
    public function relationship(){
        return item::find(1);


    }
    public function showDetails(Request $request)
    {

        $id = $request->input('id');

        $details = crud::find($id);
      // return $details;


        return view('details', ['crud' => $details]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //$cruds=crud::get();
     //   return view('create',compact('cruds'));

       $cruds=crud::all();
       return view('show',compact('cruds'));
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
         // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|regex:/^[A-Z]+$/i',
        'fathername' => 'required|regex:/^[A-Z]+$/i',
        'gender' => 'required|in:male,female',
        'date_of_birth' => 'required|date',
        'booking_date' => 'required|unique:user',
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
    ]);


     $file = $request->file('file');
     $filename = $file->getClientOriginalName();
     $file->storeAs('uploads', $filename);



   //return $request;
   $crud= new crud;
    $crud->name = $request->name;
    $crud->fathername = $request->fathername;
    $crud->gender = $request->gender;
    $crud->date_of_birth = $request->date_of_birth;
    $dob=carbon::parse($crud->date_of_birth);
    $now=carbon::now();
    $crud->age=$dob->diffInyears($now);
   $crud->booking_date = $request->booking_date;
    $crud->file_path = $filename;
    $crud->save();
    session::flash('messag','APPOINTMENT REGISTER SUCESSFULLY');
    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = crud::find($id);
        return view('index',compact('crud'));
        //
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
   {

     $validatedData = $request->validate([
        'name' => 'required|regex:/^[A-Z]+$/i',
        'fathername' => 'required|regex:/^[A-Z]+$/i',
        'gender' => 'required|in:male,female',
        'date_of_birth' => 'required|date',
        'booking_date' => 'required|unique:user,booking_date,'.$id,
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048.'
     ]);
    $crud = crud::find($id);

     //$file = $request->file('file');
      //$filename = $file->getClientOriginalName();
     //$file->storeAs('uploads', $filename);



     // $crud = crud::find($request->id);
        $crud->name = $request->name;
     $crud->fathername = $request->fathername;
     $crud->gender = $request->gender;
     $crud->date_of_birth = $request->date_of_birth;
     $dob=carbon::parse($crud->date_of_birth);
     $crud->age=$dob->diffInyears($now);
     $crud->booking_date = $request->booking_date;
     if($request->hasFile('file'))
     {
     $file = $request->file('file');
     $filename = $file->getClientOriginalName();
     $file->storeAs('uploads', $filename);
     $crud->file_path = $filename;
     }
     $crud->save();
     session::flash('messa','UPDATED SUCESSFULLY');
     return redirect('insert')->with('messa','UPDATED SUCESSFULLY');
     }


    public function pdf($id)
    {

     $crud = crud::find($id);

     $pdf = PDF::loadView('user', ['crud' => $crud]);

     $filename = 'user' . $crud->id .'.pdf';

     $pdf->save(public_path( $filename));

     return response()->download(public_path($filename), $filename);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $crud = crud::find($id);
        $crud->delete();
        session::flash('message','Record deleted successfully');
        return back();

    }
}


