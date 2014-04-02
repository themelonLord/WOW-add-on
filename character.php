<!DOCTYPE html>

<html>
<head>
    <title>WOW Add on</title>
    <meta name="viewport" content="width=device-width, initial-scale=.5">
    <link type="text/css" rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.css" />    
    <link type="text/css" rel="stylesheet" href="assets/libraries/slider/css/slider.css" />
	
	<? include 'parsejson.php' ?>
	
	<script type="text/javascript">
		function getRaceByID(id)
		{
			switch(id)
			{
				case 1:
				return "Human";
				break;
				case 2:
				return "Orc";
				break;
				case 3:
				return "Dwarf";
				break;
				case 4:
				return "Night Elf";
				break;
				case 5:
				return "Undead";
				break;
				case 6:
				return "Tauren";
				break;
				case 7:
				return "Gnome";
				break;
				case 8:
				return "Troll";
				break;
				case 9:
				return "Goblin";
				break;
				case 10:
				return "Blood Elf";
				break;
				case 11:
				return "Draenei";
				break;
				case 22:
				return "Worgen";
				break;
				case 24:
				case 25:
				case 26:
				return "Pandaren";
				break;
			}
		}
		
		function getClassByID(id)
		{
			switch(id)
			{
				case 1:
				return "Warrior";
				break;
				case 2:
				return "Paladin";
				break;
				case 3:
				return "Hunter";
				break;
				case 4:
				return "Rogue";
				break;
				case 5:
				return "Priest";
				break;
				case 6:
				return "Death Knight";
				break;
				case 7:
				return "Shaman";
				break;
				case 8:
				return "Mage";
				break;
				case 9:
				return "Warlock";
				break;
				case 10:
				return "Monk";
				break;
				case 11:
				return "Druid";
				break;
			}
		}
	</script>
	
	<style type="text/css">
		img
		{
			padding-right: 5px;
		
		}
		.panel-danger
		{
			min-height:120px;
			background-color:#330000;
		}
		.panel
		{
			max-width:800px;
			background-color:#330000;
		}
	</style>
</head>

<body>
    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Wow Add-on</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Donate!</a></li>
        <li><a href="#">Download!</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">
			<div class="form-group">
				<input type="text" placeholder="email" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" placeholder="password" class="form-control">
			</div>
			</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class = "panel panel-default">
	<div class ="panel panel-danger">
	<!-- change the source to whatever value you get-->
	<br/>
	<img src="http://us.battle.net/static-render/us/<? echo $blizz_json['thumbnail']; ?>" alt="Thumbnail" align="left"/>
	<h1><? echo $blizz_json['name']; ?> - <? echo $blizz_json['realm']; ?></h1>
	<h2><? echo $blizz_json['level']; ?> <script>document.write(getRaceByID(<? echo $blizz_json['race']; ?>)+ " "); document.write(getClassByID(<? echo $blizz_json['class']; ?>));</script></h2>
	</div>
	<div class = "panel-body">
	blah blah
	</div>
</div>




    <div class = "footer">
	This skeleton was developed by Noel!
	</div>
    
    <script src="assets/libraries/jquery/jquery-2.0.3.min.js"></script>
    <script src="assets/libraries/bootstrap/js/bootstrap.min.js"></script>  
</body>

</html>