<html>
<head>
  <title>
      Appscript  Task
   </title>
   <style>

   body {
      background-image: url('banner.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
   }
</style>
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">  
  </script>
<script>


var data = 0;
var options = 0;

function next() {
  if(data<=2)
  {
	var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "nextQ.php?no=" + data, true);
    xmlhttp.send();
    data = data + 1;
    if(data>0)
    {
      updateCookie(data, options);
      options=0;
    }

  }
  else
  {
    document.getElementById("demo").innerHTML = "Completed";
  }
}

function clickedval(str) {
       options = str;
}

function updateCookie(data, options) {
  document.cookie = "Q"+data+" = "+options;
}

</script>
</head>
<body>
<form style="padding-left: 15%; padding-top: 13%;" method = "post" action="pg1.php">
  <h3>
  <div id="demo">
  Enter Your Name: <input type="text" name="name">
  </div>
  <input type="button" id = 'n1' onclick="next()" value="Next">
  <input type="Submit" name="Submit">
</form >
<p id="Complete">
  
</p>
</h3>
</body>
</html>