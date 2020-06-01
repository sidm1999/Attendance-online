<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <link rel="stylesheet" href="css/animate.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/generator.css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/logo.jpeg" alt="Online-Attendance-System" style="width:110px;height:55px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <h2 style="color: white; font-family:Helvetica, Arial, sans-serif; font-size:18px; font-weight:bold;">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="teacher.php">Faculty</a></li>
          </ul>
          </h2>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 <div class="container" style="margin-top:100px;">
 <hr style="height:2px;border-width:0;color:gray;background-color:gray"> 
  <div id="output"></>
  <form id="getAttendance">
    <div class="form-group">
      <label>Year of course</label>
      <select name="year" class="form-control">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select>
    </div>
    <div class="form-group">

      <label>Section</label>
      <select name="section" class="form-control">
      <option>1</option><option>2</option>	
    </select>
    </div>
    <div class="form-group">
      <label>Subject Code of Course</label>
      <input type="text" class="form-control" name="code" placeholder="Eg - COE-216">
      <span class="help-block">DDD-NNN where D : Department , N : Number</span>
    </div>
    <div class="form-group">
      <label>Roll Number</label>
      <input type="text" class="form-control" name="roll" placeholder="Eg - 262/CO/12">
      <span class="help-block">NNN/DD/YY where N : Number, D : Department , Y : Year</span>
    </div>
    <button class="btn btn-primary">Get Results</button>
  </form>
  <hr style="height:2px;border-width:0;color:gray;background-color:gray"> 
  </div>
  </div><!-- /.container -->
   <!-- FOOTER -->  
 </body>
</html>
