<!DOCTYPE html>
<html lang="en">
<head>
  <title>Civil Aviation Authority </title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">  
  <link rel="icon" type="image/jpeg" href="https://tse4.mm.bing.net/th?id=OIP.8YDJbw-yUiKak4h5_WneRwHaEo&pid=Api&P=0&h=180">
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

      
        #draggableDiv {
          
          background-color: #ccc;
          cursor: move;
        }

      
    
    </style>
</head>
<body >
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Civil Aviation Authority </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
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

  <form method="post" >
    <select name="date" id="date" class="widthDropDown ml-5 mr-5 ">
        <option id="2023-06-09" value="2023-06-09"> 2023-06-09 </option>
        <option id="2023-06-10" value="2023-06-10"> 2023-06-10 </option>
        <option id="2023-06-11" value="2023-06-11"> 2023-06-11 </option>
        <option id="2023-06-12" value="2023-06-12"> 2023-06-12 </option>
    </select>

    <input type="submit" class="btn btn-primary" value="submit">
  </form>

  

  <button class="widthDropDown bg-primary" style="width:100px;">
    <b><code> AUTO </code></b>
  </button>

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


    <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#date').change(function() {
          console.log('Date changed');
          var selectedValue = $(this).val();

          
          console.log(selectedValue); 
        });

        

        
      });
    </script>   
    
    <?php
      $selectedDate= '2023-06-09';
      if ($_SERVER['REQUEST_METHOD'] === 'POST') 
      {
        $selectedDate = $_POST['date'] ;
        // Process the selected date here
        echo "Selected date: " . $selectedDate;
       
      }
      
    ?>
    <div class="row">
    
      <div class="col">
        
        @foreach($flightsData as $flightData)
         
            @if ($flightData['request_date'] == $selectedDate)
              <div class="row shake-div" draggable="true" ondragstart="drag(event)" id="draggableDiv" style="overflow: hidden; font-size:10px;" > 
                <p> Arrival :  {{$flightData['request_date']}}</p>
                <p> Airlines :  {{ $flightData['op_name'] }}</p>
                <p> FLight Number : {{ $flightData['flight_no']}}</p>  
              </div>
            @endif
          
        @endforeach
      </div>


      <!-- timeline  -->
      <div class="col" >
        
      </div>
      <div class="col" ondrop="drop(event)" ondragover="allowDrop(event)">
        
      </div>
      <div class="col" ondrop="drop(event)" ondragover="allowDrop(event)">
       
      </div>
      <div class="col" ondrop="drop(event)" ondragover="allowDrop(event)">
        
      </div>
      <div class="col" ondrop="drop(event)" ondragover="allowDrop(event)">
        
      </div>
      <div class="col" ondrop="drop(event)" ondragover="allowDrop(event)">
        
      </div>
      <div class="col" ondrop="drop(event)" ondragover="allowDrop(event)">
       
      </div>
      
    </div>


</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
