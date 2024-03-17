@extends('layouts.master')
@section('content')

<br><br><br>
   <div class="container">
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
         <h2 class="" style="color: #2487c0">Add / Edit Form:</h2>
        <form action="{{ $contacts->id !=null ? route('contact.update',['id'=>$contacts->id]): route('contact.store') }}" method="post" enctype="multipart/form-data">
       
         @csrf

        <label>Name:</label>
        <input class="form-control" type="text" placeholder="Enter Name" value="{{  $contacts->name }}" name="name" required>
       
        <label>Email:</label>
        <input class="form-control" type="email" placeholder="Enter Email" value="{{  $contacts->email }}" name="email" required>
       
        <label>Phone No:</label>
        <input class="form-control" type="number" placeholder="Enter Phone No" value="{{  $contacts->phone }}" name="phone" required>

        <label>Address:</label>
        <textarea class="form-control" placeholder="Enter Address" name="address" required>{{ $contacts->address }}</textarea>
        <br>
        <input class="btn btn-danger" type="submit" value="Save">
        </form>
        </div>
         <div class="col-md-1"></div>
      </div>
</div>

<br>
@endsection
