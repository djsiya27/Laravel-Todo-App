@extends('layouts.master')

@section('content')
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{session()->get('success')}}
  </div>
    
@endif
    <div style="width:50%" class="container my-3">
    <form action="{{url('/done')}}" method="post">
        {{ csrf_field() }}
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Add a new Todo" aria-label="Recipient's username" aria-describedby="button-addon2" name="todobody">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add</button>
                </div>
              </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                <th>Todo</th>
                <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                    <td>{{$item->body}}</td>
                    <td>
                    <form action="{{url('/del/'. $item->id_todo)}}" method="post">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}
                    <a href="{{url('/display/'.$item->id_todo)}}" class="btn btn-warning">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                        
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection