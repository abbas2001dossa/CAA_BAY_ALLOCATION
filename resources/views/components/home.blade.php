<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  
    <style>
        body{
            background-color:grey;
        }

        .container{
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
            border: 2px solid black ;
            
        }
        
        .row {
            border: 1px solid black;
            /* margin-bottom: 5px; */
            height:100px;
        }

        .col {
            border: 2px solid black;
            /* padding: 5px; */
        }

        .widthDropDown{
          width:200px;
          margin-right:30px;
          
        }

        .h50{
          height:50px;
          
        }

        .shake-div {
        /* display: inline-block; */
        
        cursor: pointer;
        transition: transform 0.3s;
      }

      .shake-div:hover {
        animation: shake 0.5s;
        cursor: pointer;
      }
        
      @keyframes shake {
        0% { transform: translate(0, 0); }
        25% { transform: translate(-5px, 0); }
        50% { transform: translate(5px, 0); }
        75% { transform: translate(-5px, 0); }
        100% { transform: translate(0, 0); }
      }

    
    </style>
</head>
<body >

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link</a></li>
            <li><a class="dropdown-item" href="#">Another link</a></li>
            <li><a class="dropdown-item" href="#">A third link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  

<div class="" style="margin-top:50px; margin-left:50px;">
<div class="d-flex flex-row" style="height:30px;">
  
  <select name="route" id="route" class="widthDropDown ml-5 mr-5 ">
      <option value="domestic"> Domestic </option>
      <option value="international"> International </option>
  </select>

  <select name="bodyType" id="bodyType" class="widthDropDown ml-5 mr-5 ">
      <option value="wide"> Wide </option>
      <option value="intermediate"> Intermediate </option>
      <option value="narrow"> Narrow </option>
  </select>

  <select name="time" id="time" class="widthDropDown ml-5 mr-5 ">
      <option value="option1"> AM </option>
      <option value="option2">PM </option>
  </select>

</div>  
</div>

<div class="container m-5 mb-5">
    <div class="row" style="height:50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-size:19px; font-weight:bolder;">
      <div class="col"> Flights </div>
      <div class="col"style="width:50px;" ></div>
      <div class="col"> BAY 1 </div>
      <div class="col"> BAY 2</div>
      <div class="col"> BAY 3</div>
      <div class="col"> BAY 4</div>
      <div class="col"> BAY 5</div>
      <div class="col"> BAY 6</div>
    </div>

    <div class="row">
      <div class="col">
        @foreach($flightsData as $flightsData)
          <div class="row shake-div" style=" overflow: hidden; font-size:10px;"> 
            <p> Arrival :  {{$flightsData['request_date']}}</p>
            <p> Airlines :  {{ $flightsData['op_name'] }}</p>
            <p> FLight NUmber : {{ $flightsData['flight_no']}}</p>  
          </div>
        @endforeach;
      </div>
      <div class="col">
        dsd
      </div>
      <div class="col">
        dsd
      </div>
      <div class="col">
        dsd
      </div>
      <div class="col">
        dsd
      </div>
      <div class="col">
        dsd
      </div>
      <div class="col">
        dsd
      </div>
      <div class="col">
        dsd
      </div>
      
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
