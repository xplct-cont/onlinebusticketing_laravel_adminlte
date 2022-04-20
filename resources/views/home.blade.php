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

    <title>Dashboard</title>
</head>

<script>
  window.onload = function () {
  
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
      text: "Bus Maximum Sitting Capacity"
    },
    axisX: {
      title: "BUS NAMES"
    },
    data: [{        
      type: "bar",  
      showInLegend: true, 
      legendMarkerColor: "grey",
      yValueFormatString: "#,##0.\"\"",
      indexLabel: "{label} ({y})",
      dataPoints: <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>

    }]
  });
  chart.render();
  }

  </script>
<body>

  <div class="heading">
     <h1>Dashboard</h1>    
</div>

  <div class="cardzero">
     <div class="card elevation-3" style="width: 14rem;  background-color:#0275d8;">
          <div class="card-block">
              <h6>&nbsp;Total Bookings</h6>
              <h2 class="text-right"> <i class=""></i><span>{{$booking}} &nbsp;</span></h2>
            <div class="ss">
              <i class="fa fa-book f-left"></i>
            </div>
          </div>
          <a href="{{url('/indexbookings')}}" class="btn btn-light" style="font-size: 13px; color: gray;">Show Details</a>
        </div>
    </div>
     </div>

     <div class="cardone">
     <div class="card elevation-3" style="width: 14rem; background-color:#5cb85c;">
        <div class="card-block">
            <h6>&nbsp;Total Buses</h6>
            <h2 class="text-right"> <i class=""></i><span>{{$bus}} &nbsp;</span></h2>
          <div class="sf">
            <i class="fa fa-bus f-left"></i>
          </div>
        </div>
        <a href="{{url('/indexbuses')}}" class="btn btn-light" style="font-size: 13px; color: gray;">Show Details</a>
      </div>
   </div>

   <div class="cardthree">
     <div class="card elevation-3" style="width: 14rem; background-color: #d9534f;">
        <div class="card-block">
            <h6>&nbsp;Total Operators</h6>
            <h2 class="text-right"> <i class=""></i><span>{{$operator}} &nbsp;</span></h2>
          <div class="sf">
            <i class="fa fa-circle f-left"></i>
          </div>
        </div>
        <a href="{{url('/operators.index')}}" class="btn btn-light" style="font-size: 13px; color: gray;">Show Details</a>
      </div>
   </div>

   <div class="cardfour">
     <div class="card elevation-3" style="width: 14rem; background-color: #f0ad4e;">
        <div class="card-block">
            <h6>&nbsp;Testing Shits</h6>
            <h2 class="text-right"> <i class=""></i><span>{{$bus}} &nbsp;</span></h2>
          <div class="sf">
            <i class="fa fa-bus f-left"></i>
          </div>
        </div>
        <a href="{{url('/buses')}}" class="btn btn-light" style="font-size: 13px; color: gray;">Show Details</a>
      </div>
   </div>
</div>

  <div class="chartCont">
  <div id="chartContainer" style="height: 360%; width: 80%; position:relative; left:20%;"></div>
  </div>
   <div class="row">
    <div class="cardlast">
      <div class="card elevation-0 card-outline card-dark scroll" style="width: 18rem; height:23rem; background-color: white;">
        <h4>Administrators</h4>
         <table class="table table-hover text-dark">
            @foreach($admins as $item)
            <tr>
              <td><img src="/images/avatars/{{$item->avatar}}"></td>
              <td>{{$item->name}}</td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
  <script src="{{asset('js/canvasjs.min.js')}}"></script>
   </body>
</html>
<style>

    h1{
       position: relative;
       top: 5%;
       left: 5px;
       font-weight: normal;
       color: dimgray;
       font-size: 30px;
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

    i{
        color: #292b2c;
    }

 
     .cardzero{
       position: absolute;
       top: 18%;
       left: 22%;
     
      
     }

     .card h6{
         position: relative;
         font-size: 20px;
         color: white;
     }

     .ss i{
         color: white;
     }


     .cardone{
        position: absolute;
        top: 18%;
        left: 41%;
     }

     .cardthree{
        position: absolute;
        top: 18%;
        left: 60%;
     }

     .cardfour{
        position: absolute;
        top: 18%;
        left: 79%;
     }

     .sf i{
         color: white;
     }

     .chartCont{
       position: absolute;
       top: 44%;
       left: 10%;
       width: 62%;
     }

     .cardlast{
       position: absolute;
       left: 74.5%;
       top: 44%;
     }

     h4{
       position: inherit;
       left: 5%;
       color: dimgray;
       font-size: 20px;
     }

    .scroll {
    overflow-y: scroll;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    height: 100px;

    }
   .scroll::-webkit-scrollbar { /* WebKit */
    width: 0;
    height: 0;

   }

     td img{
     position: inherit;
     height: 40px;
     border-radius: 50%;

    }

</style>
@endsection
