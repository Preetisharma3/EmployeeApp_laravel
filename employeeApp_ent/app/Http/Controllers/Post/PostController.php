<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
  
    // dd("zxcvbn");
      
//  if($staff->save()){
//     return "Data uploaded successfully";
// }

}
// $data = Post::all();
// return response()->json(['message'=>'success','data'=>$data],200);


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
        $validator =Validator::make($request->all(),[
            'title' =>'required|string|min:2|max:1000',
            'description' =>'required|string|between:10,500',

    //   $staff1 = New staffs;
    //   $staff1->first_name =$req->first_name;
    //   $staff1->last_name =$req->last_name;
    //   $staff1->email =$req->email;
    //   $staff1->password =$req->password;
    //   $staff1->address=$req->address;
    //   $staff1->roles =$req->roles;
    //   $staff1->contact =$req->contact;
    //   $staff1->Qualification =$req->Qualification;
     
    //   $staff1->save();
        ]);
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }

        $input = $request->all();
        $data = Post::create($input);
        return $data;
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
        //
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
}
