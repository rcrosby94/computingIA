<!DOCTYPE html>
<html lang="en">
<head>
  <title>ComputingIA Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/cia.css">
  <link rel="stylesheet" href="../CSS/cia.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="RGraph.common.core.js"></script>
  <script src="RGraph.common.dynamic.js"></script>
  <script src="RGraph.common.tooltips.js"></script>
  <script src="RGraph.dynamic.rect.js"></script>
  <script src="RGraph.hprogress.js"></script>
  
<script>
    window.onload = function ()
    {
        var hprogress = new RGraph.HProgress({
            id: 'cvs',
            min: 0,
            max: 100,
            value: 85,
            options: {
                margin: 12,
                textAccessible: true
            }
        }).grow();
        
        var coords = hprogress.coords[0];
        var x = hprogress.getXCoord(55);

        // Create the rect object that covers the lower part
        var rect = new RGraph.Drawing.Rect({
            id: 'cvs',
            x: hprogress.gutterLeft,
            y: hprogress.gutterTop + 5,
            width: x - hprogress.gutterLeft,
            height: hprogress.canvas.height - hprogress.gutterTop - hprogress.gutterBottom - 10,
            options: {
                fillstyle: 'Gradient(rgba(255,0,0,0.5):rgba(255,0,0,0):rgba(255,0,0,0))'
            }
        }).draw();
        
        x = hprogress.getXCoord(95);

        // Create the rect object that indicates the target
        var rect = new RGraph.Drawing.Rect({
            id: 'cvs',
            x: x - 3,
            y: hprogress.gutterTop + 5,
            width: 6,
            height: hprogress.canvas.height - hprogress.gutterTop - hprogress.gutterBottom - 10,
            options: {
                fillstyle: 'black',
                highlightStroke: 'rgba(0,0,0,0)',
                tooltips: ['The target was 95% of eveything, everywhere']
            }
        }).draw();
    };
</script>
</head>
<body>
<div id="body">
<div id="header">
<div class="jumbotron text-center">
  <h1>Results</h1>
  <p></p> 
</div>
</div>

<div id="navigationbar">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">C:IA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="content.html">Content</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quizzes.html">Quizzes</a>
      </li>    
	  <li class="nav-item">
        <a class="nav-link" href="results.html">Results</a>
      </li>  
    </ul>
  </div>  
</nav>
</div> 

<div class="graphs">
<canvas id="cvs" width="600" height="100">
    [No canvas support]
</canvas>

</div> 
</div>

</body>


</html>