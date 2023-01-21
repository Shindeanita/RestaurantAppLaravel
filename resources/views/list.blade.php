@extends('layouts.app')

@section('content')
<div class="container-sm">
    <br>
    <h3>List all restaurant</h3>
    <br>
    <div class="">
        <div align="right"><a href="insert" class="btn btn-primary">Add Restaurant</a></div>
        @if(Session::get('status'))
        <br>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{Session::get('status')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @php
            $id=$results->firstItem();
        @endphp
        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach($results as $result)
                <tr>
                    <th scope="row">{{$id}}</th>
                    <td>{{$result->name}}</td>
                    <td>{{$result->email}}</td>
                    <td>{{$result->address}}</td>
                    <td> <a href="/edit/{{$result->id}}" class="btn btn-primary"> Edit </a>
                        <a href="/delete/{{$result->id}}" class="btn btn-danger"> Delete </a>
                    </td>

                </tr>
                @php
                    $id++;
                    
                @endphp
                @endforeach
            </tbody>

        </table>
        {{$results->links()}}
       
    </div>

    @endsection
</div>