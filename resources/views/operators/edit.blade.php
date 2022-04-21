@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Operators</title>
</head>
<body>
    
</body>
</html>

     <div class="container">
         <div class="row">
             <div class="col-md-12">

                @if (session('status'))
                <h6 class="alert alert-success" style="position: relative; margin-top:4%;">
                  {{session('status')}}
                </h6>
                    
                @endif

                 <div class="card">
                     <div class="card-header">
                         <h4 style="position: absolute; left:38%; color:dimgray;">Edit Bus Operator Informations</h4>
                         <a href="{{url('operators.index ')}}" class="btn btn-danger float-start" >Back</a>
                     </div>
                     <div class="card-body">

                        <form action="{{url('update-operator/'.$operator->id)}}" method="POST" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         
                            <div class="form-group mb-3">
                                <label for="">Operator Profile Image</label>
                                <input type="file" name="profile_image" class="form-control">
                                <img src="{{asset('images/operatorsavatar/'.$operator->profile_image)}}" width="50px" height="50px" alt="Image" style="border-radius: 50%">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Operator Name</label>
                                <input type="text" name="operator_name" value="{{$operator->operator_name}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" value="{{$operator->address}}" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Contact Number</label>
                                <input type="number" name="contact_no" value="{{$operator->contact_no}}" class="form-control">
                            </div>

                             <div class="form-group mb-3">
                                 <button type="submit" class="btn btn-info" style="position: relative; left:90%;">Update</button>

                             </div>

                        </form>
                         
                        
                     </div>
                 </div>
             </div>
         </div>
     </div>








@endsection