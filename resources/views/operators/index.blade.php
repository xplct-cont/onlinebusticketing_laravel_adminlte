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

     <div class="container" style="position: relative; margin-top:3%;">
         <div class="row">
             <div class="col-md-9">
                 <div class="card">
                     <div class="card-header">
                         <h4 style="position: absolute; left:38%;">Bus Operators</h4>
                         <a href="{{url('add-operator')}}" class="btn btn-info float-start" >Add Bus Operator</a>
                     </div>
                     <div class="card-body">

                        <table class="table table-hovered bg-light">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Profile Image</th>
                                    <th>Operator Name</th>
                                    <th>Address</th>
                                    <th>Contact No</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($operator as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td><img src="{{asset('images/operatorsavatar/'.$item->profile_image)}}" width="50px" height="50px" alt="Image" style="border-radius: 50%"></td>
                                    <td>{{$item->operator_name}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->contact_no}}</td>
                                    <td><a href="{{url('edit-operator/' .$item->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                                    <td><a href="{{url('delete-operator/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                     </div>
                 </div>
             </div>
         </div>
     </div>








@endsection