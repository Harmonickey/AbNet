<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="abnet_create.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="../MultiDatesPicker/css/prettify.css" />
<link rel="stylesheet" href="../MultiDatesPicker/css/pepper-ginder-custom.css" />
<link rel="stylesheet" href="../MultiDatesPicker/css/mdp.css" />

<!-- Latest compiled and minified JavaScript -->
<!--<script src="bootstrap-3.1.1/js/bootstrap.min.js"></script>-->
<script src="../MultiDatesPicker/js/jquery-1.7.2.js"></script>
<script src="http://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js"></script>
<script src="../MultiDatesPicker/js/jquery.ui.core.js"></script>
<script src="../MultiDatesPicker/js/jquery.ui.datepicker.js"></script>
<script src="../MultiDatesPicker/jquery-ui.multidatespicker.js"></script>

<script src="../abnet.js"></script>

<script type="text/javascript">
	$(function() {
		$('#date_select').multiDatesPicker();
	});
</script>

<title>Start New Activity</title>
</head>

<body>

<div id="top-section">
	<div id="logo">
		<a href="index.html" ><img src="../abnet.png" height="144" width="200" alt="abnet"/></a>
	</div>
	<div id="title">
		<h3><I><B> Create Activity </I></B></h3>
	</div>
	<div id="back_home">	
    	<?php
			if (isset($_POST['org']))
			{
				if ($_POST['org'] == "Organize New Activity")
				{
					echo "<a href='../index.html'><input type='button' id='back' value='Back'/></a>";	
				}
				elseif ($_POST['org'] == "Start New Activity")
				{
					echo "<a href='../activity/map.php'><input type='button' id='back' value='Back'/></a>";
				}
			}
		?>
        <a href="../index.html"><input type="button" id="home" value="Home"/></a>
    </div>

</div>


<div id="bottom-section">

	<div id="left">
    	<form name="create_activity" action="create_activity.php" method="post" enctype="multipart/form-data">
        	<div class="separator">
        	<label for="name" > Activity Name: </label>
            <input type="text" name="location" id="name" class="data" />
            </div>
            <div class="separator">
            <label for="location" > Location Name: </label>
            <input type="text" name="location" id="location" class="data"/>
            </div>
            <div class="separator">
            <label for="time" > Time of Event: </label>
            <input type="text" name="time" id="time"  class="data"/>
            </div>
            <div class="separator">
            <label for="parts" > Number of Participants: </label>
            <input type="text" name="parts" id="parts"  class="data"/>
            </div>
            <div class="separator">
            <label for="activity_type" > Activity Type: </label>
            <select class="data" style="width: 155px;">
            	<option> Tour </option>
                <option> Visit </option>
            </select>
            </div>
            <div class="separator">
            <label for="other" > Other Specifications: </label>
            <input type="text" name="other" id="other" class="data"/>
            </div>
            <div class="separator">
            <label for="send_invite" style="float: left;"> Send Invites: </label>
            	<div id="container" style="width: 155px">
                    <input type="checkbox" /> Jon Stott <br />
                    <input type="checkbox" /> Alex Ayerdi <br />
                    <input type="checkbox" /> Sherry Vernon <br />
                    <input type="checkbox" /> Shana Azria <br />
                    <input type="checkbox" /> Fan Wang <br />
                    <input type="checkbox" /> Liang Ge <br />
                    <input type="checkbox" /> Marcel Englmaier <br />
                    <input type="checkbox" /> John Smith <br />
                    <input type="checkbox" /> T.J. Jones <br />
                    <input type="checkbox" /> Mark Waters <br />
                </div>
            </div>
            <input type="submit" value="Create Activity" id="sub" />
        </form>
        
        <h2> Select Event Date(s) </h2>
        <div id="date_select">
        
        </div>
        
    </div>
    
    <div id="right">
    	<div id="friends">
        	<h2> Friends List </h2>
        	<table id="flist" border="1" bordercolor="#FFCC00" style="background-color:#FFFFCC" width="80%" cellpadding="3" cellspacing="3">
            <tr>
            	<td>Name </td>
                <td>Location</td>
            </tr>
                <tr>
                    <td>Jon Stott</td>
                    <td>London, Britain</td>
                </tr>
                <tr>
                    <td>John Smith</td>
                    <td>Ukraine</td>
                </tr>
                <tr>
                    <td>Shana Azria</td>
                    <td>Paris, France</td>
                </tr>
                <tr>
                    <td>Fan Wang</td>
                    <td>Beijing, China</td>
                </tr>
                <tr>
                    <td>Liang Ge</td>
                    <td>Tokyo, Japan</td>
                </tr>
            </table>


        </div>
    </div>

</div>

</body>
</html>
