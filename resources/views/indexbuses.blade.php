@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
</head>
<body>

    <div> 
       <div class="search">
                <div class="mx-auto pull-left">
                <form action="{{ route('indexbuses') }}" method="GET" role="search">

                    <div class="input-group">
                        <span class="input-group-btn mr-2 mt-0">
                            <button class="btn btn-info" type="submit" title="Search Bus Name">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search Bus Name" id="term">
                        <a href="{{ route('indexbuses') }}" class=" mt-0">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="fgf">
        <a href="{{url('/home')}}"><b>
           <i class="fas fa-bars fa-border fa-2x"  style="background-color:#292b2c; border-radius:10px; color:white;"></i><b></a>
        </div>  

    <div class="fgd">
        <a href="{{url('#')}}"><b>
           <i class="fas fa-bus fa-border fa-2x" style="background-color:#292b2c; border-radius:10px; color:white;"></i><b></a>
        </div>  

    <div class="fgs">
        <a href="{{url('/indexbookings')}}"><b>
           <i class="fas fa-book fa-border fa-2x" style="background-color:#292b2c; border-radius:10px; color:white;"></i><b></a>
        </div>  
    </div>
</div>

        <div class="pp">
            <div class="card card-outline card-dark">
             <table class="table table-hover text-center text-dark">
               
              <tr>
              
               <th class="bg-info">Bus Name</th>
               <th class="bg-info">Maximum Seats</th>
               <th class="bg-info">Plate No</th>
               <th class="bg-info">Fanchise No</th>
             
              </tr>
              @foreach ($buses as $item)

              <tr>
                <td class="text-sm font-weight-normal">{{ $item->bus_name }}</td>
                <td class="text-sm font-weight-normal">{{ $item->maximum_seats }}</td>
                <td class="text-sm font-weight-normal">{{ $item->plate_no }}</td>
                <td class="text-sm font-weight-normal">{{ $item->franchise_no }}</td> 
                
              </tr>

        
            @endforeach
        </div>
      </div>
    </div>
    <h1>All Buses</h1>
    <div class="logo bg-dark">
        <img src="{{ asset('images/g39.png') }}" alt="myimage">
    </div>
   </body>
</html>



<style>
  
   .logo img{
      position: relative;
      height: 50px;
      
   }

    h1{
        position: absolute;
        color: white;
        top: 1%;
        left: 40%;
        font-size:30px;

    }

      .fgd{
       position: absolute;
       left: 86.7%;
      
    
     
    }
    .fgs{
       position: absolute;
       left: 91%;
     
    }
   
    .fgf{
        position: absolute;
        left: 95%;
    }

    .pp{
        position: absolute;
        top: 27%;
        left: 22%;
        width: 75%;
       
    }

    .search{
        position: absolute;
        top:14%;
        left: 22%;
    }

  
 


</style>

@endsection
