<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = User::all();
        return ResponseFormatter::success($item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Login(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return ResponseFormatter::success($request);
        }else{
            
            return ResponseFormatter::error($request);
        }
        
       
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inputdataAdmin(Request $request)
    {
      

        $data= new User();
        $data->name = $request->name;
        $data->level = 'admin';
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->remember_token = Str::random(60);
       
        $data->save();

        

        return ResponseFormatter::success($data);
    }

    public function inputdataUser(Request $request)
    {
      

        $data= new User();
        $data->name = $request->name;
        $data->level = 'user';
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->remember_token = Str::random(60);
       
        $data->save();

        

        return ResponseFormatter::success($data);
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
