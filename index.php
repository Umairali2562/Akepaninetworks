<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Aekpani-Networks</title>
</head>
<body>
<nav>
    <ul class="topnav" id="DropdownClick">
        <li><a href="#home">Home</a></li>

        <li class="topnav-right"><a href="#home">About US</a></li>
        <li class="topnav-right"><a href="#home">FAQ</a></li>
        <li class="topnav-right"><a href="#home">Contact US</a></li>

        <li class="dropdownIcon" onclick="dropdownMenu();"><a href="javascript:void(0);">&#9776;</a></li>
    </ul>
</nav>


<div class="container" id="section-1-gradient">
<div class="row">
    <div class="col-6">
        <div class="leftside-col">
             <h1 class="large">This is a heading</h1>
             <h1 class="large">but will become professional</h1>
        </div>
        <form>
            <div class="leftside-col">
                <h2>Username:</h2>
                <input class="inputbox" type="text" placeholder="Username">
                <h2>Password:</h2>
                <input class="inputbox" type="text" placeholder="Password">
            </div>
        </form>

    </div>


    <div class="col-6">
        <div class="rightside-col">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AmHEfTSBXiY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>

<script>
    function dropdownMenu(){
        var x = document.getElementById("DropdownClick");
        if(x.className==="topnav"){
            x.className += " responsive";
            /*change topnav to topnav.responsive*/
        }
        else{
            x.className="topnav";
        }
    }
</script>
</body>
</html>