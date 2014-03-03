<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="abnet_friend_profile.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="../fullcalendar/fullcalendar.css" />
<!-- Optional theme -->
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="../MultiDatesPicker/css/prettify.css" />
<link rel="stylesheet" href="../MultiDatesPicker/css/pepper-ginder-custom.css" />
<link rel="stylesheet" href="../MultiDatesPicker/css/mdp.css" />

<!-- Latest compiled and minified JavaScript -->
<!--<script src="bootstrap-3.1.1/js/bootstrap.min.js"></script>-->
<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src="../fullcalendar/fullcalendar.js"></script>
<script type='text/javascript' src="../fullcalendar/gcal.js"></script>



<!--<script src="../MultiDatesPicker/js/jquery-1.7.2.js"></script>-->
<script src="http://sorgalla.com/jcarousel/dist/jquery.jcarousel.min.js"></script>
<script src="../MultiDatesPicker/js/jquery.ui.core.js"></script>
<script src="../MultiDatesPicker/js/jquery.ui.datepicker.js"></script>
<script src="../MultiDatesPicker/jquery-ui.multidatespicker.js"></script>

<script src="../abnet.js"></script>


<script type='text/javascript'>

$(document).ready(function() {
    $('#calendar').fullCalendar({
        events: 'http://www.google.com/calendar/feeds/glzjuer%40gmail.com/public/basic'
    });
     $('#My_Calendar').fullCalendar({
        events: 'http://www.google.com/calendar/feeds/liangge1.2013%40u.northwestern.edu/public/basic'
    });
});

</script>


<title>Friend's Profile</title>
</head>

<body>

<div id="top">
	<div id="logo">
		<a href="../index.html" ><img src="../abnet.png" height="144" width="200" alt="abnet"/></a>
	</div>
	<div id="headline">
		<h1><I><B> Liang's Profile </B></I></h1>
	</div>
	<div id="top_buttons">	
    	<input type="button" id="AddtoFriends" value="+AddtoFriends">
        <input type="button" id="back" value="Back" onclick="getLastPage()"/>
        <a href="../index.html"><input type="button" id="home" value="Home"/></a>
    </div>

</div>


<div id="bottom">

	<div id="left">
       <div id="left_top">
            <div id="photo">
                <img src="Liang.png" height="300" width="200" alt="abnet"/>
            </div>
            <div  id = "info">
                <p>Now at England</p>
                <p>Mobile: 3126237067</p>
                <p>Email: glzjuer@gmail.com</p>
                <p>Interest: Basketball</p>
                <p>From: Zhejiang,China</p>
            </div>
        </div>
        <div id="left_middle">
            <h2>Travel Journal</h2>
            <p><a href="abnet_friend_profile.php">Joyful Trip in China</a> It is really a fantasy trip in China, I drive in Zhejiang, breathe the fresh air, have fun with the food.....</p>
            <p><a href="abnet_friend_profile.php">Welcome to America!</a> Alough freezing cold in Chicago, it is still a beautiful place to live. Chicago has wonderful trafic system, which helps vistors a lot.....</p>
            <p><a href="abnet_friend_profile.php">Small Japan!</a> Really a cute country! It is a good place to live. Japan has wonderful trafic system, which helps vistors a lot.....</p>
            <p><a href="abnet_friend_profile.php">Let's Surf!</a> I love SEA! Miami is the dream place for me. Not only the Miami Heat, LBJ, D-wade. Miami has wonderful scenery, which never.....</p>
            <p><a href="abnet_friend_profile.php">See More...</a></p>
        </div>
        <div id=left_bottom>
            <h2>Travel Photoes</h2>
            <a href="abnet_friend_profile.php"><img src="1.png" height="60" width="100" alt="1" id="a.png"/></a>
            <a href="abnet_friend_profile.php"><img src="2.png" height="60" width="100" alt="2" id="b.png"/></a>
            <a href="abnet_friend_profile.php"><img src="3.png" height="60" width="100" alt="3" id="c.png"/></a>
            <a href="abnet_friend_profile.php"><img src="4.png" height="60" width="100" alt="4" id="d.png"/></a>
            <p><a href="abnet_friend_profile.php">See More...</a></p>
        </div>
    </div>
        
    <div id="middle">
        <h2>Liang's Calendar </h2>
        <div id="calendar"></div>
        
        <div id="MCalendar">
        <h2>Compare With My Calendar </h2>
        <div id="My_Calendar"></div>
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
                <tr>
                    <td>Hash</td>
                    <td>London, Britain</td>
                </tr>
                <tr>
                    <td>Samm</td>
                    <td>Ukraine</td>
                </tr>
                <tr>
                    <td>Sheldon</td>
                    <td>Paris, France</td>
                </tr>
                <tr>
                    <td>Penny</td>
                    <td>Beijing, China</td>
                </tr>
                <tr>
                    <td>ArmStrong</td>
                    <td>Tokyo, Japan</td>
                </tr>
            </table>

           <input type="button" value="Chat With Me!" id="sub" />

        </div>
    </div>

</div>

</body>
</html>
