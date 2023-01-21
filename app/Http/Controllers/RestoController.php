<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Pagination\Paginator;

class RestoController extends Controller
{
    //
    function __construct(){
    //    $this->middleware('auth');
    }

    function index(){
        return view('home');
    }

    //View all the restaurant list
    function list(){
        //$paginator = new Paginator;
        $result = Restaurant::paginate(5);
        $autoId = 1;
        
       // return $result;
        return view('list',['results'=>$result]);
    }

    //When click on Add Restaurant then below function will invoke and redirected to add.blade.php
    function add(){
        return view('list',['results'=>$result]);
    }

    //When click on the save then below code will executed.
    function store(Request $req){


        //validation for name and email

        $req->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        $restro = new Restaurant;
        $restro->name = $req->input('name');
        $restro->address= $req->input('address');
        $restro->email = $req->input('email');
        $result=$restro->save();
        if($result){
            $req->session()->flash('status','New Restaurant is added successfully!');
        }else{
            $req->session()->flash('status','Something went wroung,please try again!');
        }
       
        return redirect('list');
    }

    //Click on edit button and redirected to relavant blade.php page
    function edit(Request $req){
        $id = $req->id;
        $resto = new Restaurant;
        $result = $resto->find($id);
        //return $result;
        return view('update',['resto'=>$result]);
        
    }

    //click on update, save  the data
    function updatedata(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        $resto = Restaurant::find($req->id);
        $resto->name = $req->input('name');
        $resto->email = $req->input('email');
        $resto->address = $req->input('address');
        $result=$resto->save();
        if($result){
            $req->session()->flash('status',$resto->name .' restaurant detail is updated successfully!');
        }else{
            $req->session()->flash('status','Something went wroung,please try again!');
        }
       
        return redirect('list');
    }
       
    // delete the record
    function delete(Request $req){
        $resto = new Restaurant;
        $data = $resto->find($req->id);
        $result= $resto->where('id',$req->id)->delete();

        if($result){
            $req->session()->flash('status',$data->name .' restaurant is deleted successfully!');
        }else{
            $req->session()->flash('status','Something went wroung,please try again!');
        }
       
        return redirect('list');
    }
}
