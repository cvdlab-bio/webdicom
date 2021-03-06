<!DOCTYPE HTML>
<html>
<head>

    <title>3d</title>
<!--console-->
<link href="styles/myCss/bootstrap2.css" rel="stylesheet" type="text/css" media="all" />
    <link href="styles/myCss/custom2.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/console/codemirror.js"></script>
    <script src="js/console/console_script.js"></script>

    <!--Javascript and coffeescript modes-->
    <script src="js/console/javascript.js"></script>
    <script src="js/console/coffeescript.js"></script>
    <script src="js/console/loadmode.js"></script>

    <!--Hint-->
    <script src="js/console/show-hint.js"></script>
    <script src="js/console/javascript-hint.js"></script>

    <link rel="stylesheet" href="styles/console_css/codemirror.css">
    <link rel="stylesheet" href="styles/console_css/console.css">
    <link rel="stylesheet" href="styles/console_css/show-hint.css">

<!--fine console-->

<!-- script plasm -->
<script src="support/jquery.js"></script>
<script src="support/mustache.js"></script>
<script src="support/numeric.js"></script>
<script src="support/director.js"></script>
<script src="support/three.js"></script>
<script src="support/three-detector.js"></script>
<script src="support/three-frame.js"></script>
<script src="support/three-stats.js"></script>
<script src="support/three-trackball.js"></script>
<script src="node_modules/simplexn.js/lib/simplexn.js"></script>
<script src="node_modules/f.js/lib/f.js"></script> 
<script src="lib/plasm.js"></script>
<script src="lib/plasm-fun.js"></script>
<script src="lib/plasm-env.js"></script>



  <script>
    var p;
    $(function () {
      console.log('Starting PLaSM...');
      p = new Plasm('plasm', 'plasm-inspector');
      fun.PLASM(p);
    });
  </script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30496335-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = 'http://www.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

  <!-- fine plasm -->


<script>
	window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){console.log(Array.prototype.slice.call(arguments))}};

	window.log = function(){
	  log.history = log.history || [];   // store logs to an array for reference
	  log.history.push(arguments);
	  if(this.console){
		console.log( Array.prototype.slice.call(arguments) );
	  }
	};
	
	function render(){
		log(DRAW(CUBOID([1,1,1])));
	}
</script>
</head>
<body>
<!-- header web-lar -->
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a>3D Model</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li><input type="button" value="RENDER" onClick="render()"></li>
                    <li><a href="bihomed.html?#home"  title="home">Home</a></li>
                    <li><a id="weblar-link-about" href="#">About</a></li>
                    <li><a id="weblar-link-contact" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

<script language=>
function on() {
	$("body").css("overflow","hidden");
}

function out(){
	$("body").css("overflow","auto");
}

</script>

<div class="row-fluid">
<div id="wrapper">
	<div id="page-wrapper">
		<div class="span12">

				<div id="plasm" width="650" height="450" onclick="on()" onMouseOut="out()" ></div>

		</div>
	
</div>
</div>
</div>
<!-- footer -->
    <footer class="footer">
        <div style="float:left">
            <input id="showConsole" type="button" value="OpenConsole" onclick="toggleConsole();" >
        </div>
        <div id="menu">
            <ul class="nav">
                <li><a href="Web-lar">Web-Lar</a></li>
                <li><a href="Web-index">Web-Index</a></li>
                <li><a href="index.html">Back</a></li>
            </ul>
        </div>
        <div id="consl" style="display:none">  
            <form><textarea id="code" name="code" >
                //Write Here
            </textarea></form>

            <input id="exec" type="button" value="Exec" onclick="exec();"/>
            <input id="coffeeScriptButton" type="button" value="CoffeeScript" onclick="coffeeMode();"/>
            <input id="javaScriptButton" type="button" value="JavaScript" style="display:none" onclick="javascriptMode();">
            <input id="undo" type="button" value="Undo" onclick=""/>
            <input id="verify" type="button" value="Verify" onclick="test();"/>
        </div>



        <script>
        /*Testing var*/
        var csb = document.getElementById("coffeeScriptButton");
        var jsb = document.getElementById("javaScriptButton");

        /*Loading CodeMirror on existing textArea*/

        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            mode: "javascript",
            lineNumbers: true,
                extraKeys: {"Cmd-Space": "autocomplete"},   //extrakey for autocomplete
                tabMode: "indent"                           
            });

        </script>

        <div id="footer" class="container"></div>
    </footer>
</body>
</html>