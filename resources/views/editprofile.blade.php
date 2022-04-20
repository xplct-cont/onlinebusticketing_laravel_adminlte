@extends('layouts.app')

@section('content')
<div class="card elevation-4" style="width: 45rem; height: 20rem;">
<div class="card-body">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/images/avatars/{{$user->avatar}}" style="width: 150px; height:150px; border-radius: 50%; float:left; margin-right:25px;">
             <h2>{{$user->name}}'s Profile</h2>
             <form enctype="multipart/form-data" action="/editprofile" method="POST">   
                <label>Update Profile Image</label><br>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br><br>
                <div class="btv">
                <input type="submit" class="pull-right btn btn-sm btn-info">
            
            </form>
        </div>
      
        </div>
    </div>
 </div>
</div>
</div>


<style>

    .card{
        position: fixed;
        top: 20%;
        left: 31%;
        background-color:#f7f7f7;
    }

     
    .container{
        position: inherit;
        top: 30%;
        left: 40%;

    }

    .btv {
        position: relative;
        left: 50%;
    }

   
</style>
@endsection