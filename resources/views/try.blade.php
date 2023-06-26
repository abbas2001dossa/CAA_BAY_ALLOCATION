<!DOCTYPE html>
<html>
<head>
  <title>Grid System</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    .hour-box {
      border: 1px solid #ccc;
      height: 100px;
      position: relative;
    }
    
    .small-box {
      background-color: #f8f9fa;
      border: 1px solid #ccc;
      height: 50px;
      position: absolute;
      width: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-1 hour-box">
        <!-- 1st Hour -->
        <div class="small-box"></div>
      </div>
      <div class="col-1 hour-box">
        <!-- 2nd Hour -->
        <div class="small-box"></div>
      </div>
      <!-- Add more hour boxes here -->
    </div>
    <!-- Add more rows for additional hours -->
  </div>

  <!-- Include Bootstrap JS (Optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
