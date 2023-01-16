@extends('layouts.app')

@section('content')
<div class="container-sm">
    <br>
    <br>
    <div class="col-sm-6"> 
    <h4>Update Restaurant Details</h4>
    <br><br>
    <form action="/update" method="post">
        @csrf

        <div class="row mb-3">
            <label for="inputname3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="inputname3" value="{{$resto->name}}">
                <input type="hidden" class="form-control" name="id" value="{{$resto->id}}">
            </div><br>
            <span style="color:red">
                    @error('name') {{$message}} @enderror
            </span>

        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" value="{{$resto->email}}">
            </div><br>
            <span style="color:red">
                    @error('email') {{$message}} @enderror
            </span>
        </div>
        <div class="row mb-3">
            <label for="inputaddress3" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputaddress3"  name="address" placeholder="Enter your address">{{$resto->address}} </textarea> 
            </div>
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        <a href="/list" name="close" class="btn btn-danger">Close</a>
    </form>
    </div>
</div>
@endsection