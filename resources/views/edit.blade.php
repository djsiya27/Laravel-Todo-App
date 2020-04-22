@extends('layouts.master')

@section('content')
@foreach ($datafor as $items)
<div class="container my-3">
    <div class="input-group mb-3">
        
    <form action="{{url('/up/'.$items -> id_todo)}}" method="post">
        {{ csrf_field() }}

            <input type="hidden" name="_method" value="PUT">
            <input value="{{$items -> body}}" type="text" class="form-control" placeholder="Add a new Todo" aria-label="Recipient's username" aria-describedby="button-addon2" name="uptodo">
            <div class="input-group-append">
            <button class="btn btn-outline-secondary mt-3" type="submit" id="button-addon2">Update</button>
            </div>
        </form>
       
        </div>
</div>
   
  @endforeach 
@endsection