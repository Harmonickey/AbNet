<!DOCTYPE html>
<html>
  <head>
    <title>Abnet | Map Page</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap.min.css" />
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="map.css">

    <!--
    Include the maps javascript with sensor=true because this code is using a
    sensor (a GPS locator) to determine the user's location.
    See: https://developers.google.com/maps/documentation/javascript/tutorial#Loading_the_Maps_API
    Author: Fan Wang (AbNet)
    -->
    <script type="text/javascript">
		var loadedShowFriends = false;
		var loadedShowMarkers = false;
		<?php
			if (isset($_POST['map']))
			{
				if ($_POST['map'] == "Find More Friends")
				{
					echo "\n";
					echo "loadedShowFriends = true;";	
					echo "\n";
				}
				else if ($_POST['map'] == "Find More Activities")
				{
					echo "\n";
					echo "loadedShowMarkers = true;";
					echo "\n";	
				}
			}
		?>
	</script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="map.js"></script>
    
    
  </head>
  <body>
    <div id="top-section">
        <div id="logo">
            <a href="index.html" ><img src="../abnet.png" height="144" width="200" alt="abnet"/></a>
        </div>
        <div id="title">
            <h3><I><B> Search Friends/Activities </I></B></h3>
        </div>
        <div id="back_home">	
            <input type="button" id="back" value="Back" onclick="getLastPage()"/>
            <a href="../index.html"><input type="button" id="home" value="Home"/></a>
        </div>
	</div>

    <div id="bottom-section">
		<div id="left">
            <div>
                <input type="button" id="btn1" class="button" onclick="showMarkers();" value="Show activities" />
            </div>
            <div>
                <input type="button" id="btn2" class="button" onclick="showFriends();" value="Show friends" />
            </div>
            <div>
            	<form name="org_activity" action="create/create.php" method="post" enctype="mulitpart/form-data">
                	<input name="org" type="submit" id="startnew" value="Start new activity" />
                </form>
            </div>
        </div>
        <div id="map-canvas"></div>
        <div id="searchBox">
            <input type="text" id="search" value="Search activity or friend"/>
            <button id="searchButton">Search</button>
        </div>
    </div>
  </body>
</html>
