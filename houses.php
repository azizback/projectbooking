
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link href="css/index.css" rel="stylesheet" type="text/css" title="normal"/>
        <script src="javascript/switch.js" type="text/javascript"></script>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
		<link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

		
		
		
        <title>Project Booking</title>
    </head>
    <body>

	<?php

  require_once('config.php');

	
	?>
<style>
				body {background-color: #1B2532;}

html {
  box-sizing: border-box;
}

#myHeader {
	padding-top:0em;
	margin-top:0;
}

#houses {
  padding: 6em 0 0 0;
}
*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
	    border-radius: 8px;

	background-color:white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container_2 {
  padding: 16px;
}

.container_2::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #1B2532;
  text-align: center;
  cursor: pointer;
  width: 100%;

}

.button:hover {
  background-color: #555;
}
</style>
<style>
#form_add {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}




</style>



        <header>
            <navbar>
                <nav><a  href="index.php" >Home</a></nav>
                <nav><a href="contact.php" >Contact</a></nav>
				<nav><a class="active" href="houses.php" >Booking</a></nav>
                
				
				
				
				
				
				<nav id="switch">

                    Account
                    <a class="btn-switch" id="btn-id">
                        <span><button id="reg_button" onclick="document.getElementById('id01').style.display='block'">Log In</button></span>
                        <br>
                        <span><button id="reg_button" onclick="document.getElementById('id02').style.display='block'">Sign Up</button><span>
						<br>
						
                    </a>
                </nav>
				
				<?php
				
								if (isset($_SESSION['userid'])) { 
								 echo "<nav id='profile' ><a  href='logout.php' >Log out</a></nav>";
								 echo "<nav id='profile' ><a  href='profile.php' >Profile</a></nav>";
								 		if ($_SESSION['username']=='admin') { 
											echo "<nav id='profile' ><a  href='php/table.php' >Table</a></nav>";
								}
								 
								}

								 
			

				
				?>
				


            </navbar>
			
        </header>
		
		
						<div class="hero-image">
			  <div class="hero-div">
<div id="houses">
			  
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/home_1_normal.jpg" alt="House_1" style="width:100%">
      <div class="container_2">
        <h2>The Woods House</h2>
        <p class="title">Karakol, Kyrgyzstan</p>
        <p>The house with an outdoor pool and 2 hot tubs. All rooms have a balcony and a fully equipped kitchen. Free Wi-Fi is available.</p>
        <p>2 single beds  and 1 sofa bed  and 1 large double bed</p>
		 <p><div class="bui-spacer--medium" data-et-view="NAFLeOeJAdeOYFLFHAfEZXRRIVCHHEGO:1 NAFLeOeJAdeOYFLFHAfEZXRRIVCHHEGO:8 " data-et-click="customGoal:ZdZbaBBUVOIPBdGdfUC:1">
<div class="hprt-facilities-facility" data-name-en="room size" data-facility-id="0" data-facility-type="0"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-room_size" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M3.75 23.25V7.5a.75.75 0 0 0-1.5 0v15.75a.75.75 0 0 0 1.5 0zM.22 21.53l2.25 2.25a.75.75 0 0 0 1.06 0l2.25-2.25a.75.75 0 1 0-1.06-1.06l-2.25 2.25h1.06l-2.25-2.25a.75.75 0 0 0-1.06 1.06zM5.78 9.22L3.53 6.97a.75.75 0 0 0-1.06 0L.22 9.22a.75.75 0 1 0 1.06 1.06l2.25-2.25H2.47l2.25 2.25a.75.75 0 1 0 1.06-1.06zM7.5 3.75h15.75a.75.75 0 0 0 0-1.5H7.5a.75.75 0 0 0 0 1.5zM9.22.22L6.97 2.47a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.03 2.47v1.06l2.25-2.25A.75.75 0 1 0 9.22.22zm12.31 5.56l2.25-2.25a.75.75 0 0 0 0-1.06L21.53.22a.75.75 0 1 0-1.06 1.06l2.25 2.25V2.47l-2.25 2.25a.75.75 0 0 0 1.06 1.06zM10.5 13.05v7.2a2.25 2.25 0 0 0 2.25 2.25h6A2.25 2.25 0 0 0 21 20.25v-7.2a.75.75 0 0 0-1.5 0v7.2a.75.75 0 0 1-.75.75h-6a.75.75 0 0 1-.75-.75v-7.2a.75.75 0 0 0-1.5 0zm13.252 2.143l-6.497-5.85a2.25 2.25 0 0 0-3.01 0l-6.497 5.85a.75.75 0 0 0 1.004 1.114l6.497-5.85a.75.75 0 0 1 1.002 0l6.497 5.85a.75.75 0 0 0 1.004-1.114z"></path></svg> 84 m²</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="45" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders" data-et-mouseenter="customGoal:NAFLeOeJAdeOYFLFHAfEZXRRIVCHHEGO:1"><svg class="bk-icon -streamline-oven" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M2.25 2.25h19.5L21 1.5v21l.75-.75H2.25l.75.75v-21l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v21c0 .414.336.75.75.75h19.5a.75.75 0 0 0 .75-.75v-21a.75.75 0 0 0-.75-.75H2.25zm-1.5 1.5h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zm0 21h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM18 15v3.539a.211.211 0 0 1-.211.211H6.211A.211.211 0 0 1 6 18.539v-7.078c0-.117.094-.211.211-.211h11.578c.116 0 .211.095.211.211V15zm1.5 0v-3.539a1.71 1.71 0 0 0-1.711-1.711H6.211c-.945 0-1.711.766-1.711 1.711v7.078c0 .945.766 1.711 1.711 1.711h11.578a1.71 1.71 0 0 0 1.711-1.711V15zM9 14.25h6a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5zM5.25 4.875a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5 1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5zm3 0a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5 1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5zm-6 3.375h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm11.25-3h5.25a.75.75 0 0 0 0-1.5H13.5a.75.75 0 0 0 0 1.5z"></path></svg> Big kitchen</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="38" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-shower" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M15.375 10.875a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.5 0a3.375 3.375 0 1 0-6.75 0 3.375 3.375 0 0 0 6.75 0zm.375 12.375V18.7l-.667.745C20.748 18.98 24 15.925 24 10.5a2.25 2.25 0 0 0-4.5 0c0 1.945-.609 3.154-1.64 3.848a3.973 3.973 0 0 1-2.132.652H9a3.75 3.75 0 1 0 0 7.5h3a2.25 2.25 0 0 0 0-4.5H9a.75.75 0 0 0 0 1.5h3a.75.75 0 0 1 0 1.5H9a2.25 2.25 0 0 1 0-4.5h6.74a5.426 5.426 0 0 0 2.957-.908C20.154 14.613 21 12.932 21 10.5a.75.75 0 0 1 1.5 0c0 4.6-2.628 7.069-6.083 7.455a.75.75 0 0 0-.667.745v4.55a.75.75 0 0 0 1.5 0zm-7.5-1.5v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM.75 1.5h1.5l-.53-.22 1.402 1.402a.75.75 0 0 0 1.06-1.06L2.78.22A.75.75 0 0 0 2.25 0H.75a.75.75 0 1 0 0 1.5zm2.983 3.754a.01.01 0 0 1 .016.002c-.542-1.072-.1-2.426 1.008-2.988a2.25 2.25 0 0 1 2.037 0c-.041-.022-.043-.029-.04-.034l.002-.002-3.013 3.012zm1.07 1.05l3.002-3A1.489 1.489 0 0 0 7.51.951 3.766 3.766 0 0 0 4.079.929 3.75 3.75 0 0 0 2.43 5.971a1.49 1.49 0 0 0 2.382.323zm3.408-.968l1.116.62a.75.75 0 1 0 .728-1.312l-1.116-.62a.75.75 0 1 0-.728 1.312zm1.964-2.233l1.615.44a.75.75 0 1 0 .394-1.448l-1.615-.44a.75.75 0 1 0-.394 1.448zm4.217 1.15l1.615.44a.75.75 0 0 0 .396-1.447l-1.615-.44a.75.75 0 0 0-.396 1.447zM5.697 7.388l.577 1.038a.75.75 0 1 0 1.312-.728L7.009 6.66a.75.75 0 1 0-1.312.728zM3.284 8.94l.44 1.615a.75.75 0 1 0 1.448-.394l-.44-1.615a.75.75 0 1 0-1.448.394zm1.15 4.219l.246.896a.75.75 0 1 0 1.446-.396l-.245-.896a.75.75 0 1 0-1.446.396z"></path></svg> Bathroom</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="17" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-resort" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M.768 11.413l1.5 6.75a.75.75 0 0 0 1.464-.326l-1.5-6.75a.75.75 0 0 0-1.464.326zM2.22 23.456l1.5-5.25L3 18.75h3a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 0 1.5 0V19.5A2.25 2.25 0 0 0 6 17.25H3a.75.75 0 0 0-.721.544l-1.5 5.25a.75.75 0 1 0 1.442.412zm19.547-12.369l-1.5 6.75a.75.75 0 1 0 1.464.326l1.5-6.75a.75.75 0 1 0-1.464-.326zm1.453 11.957l-1.5-5.25A.75.75 0 0 0 21 17.25h-3a2.25 2.25 0 0 0-2.25 2.25v3.75a.75.75 0 0 0 1.5 0V19.5a.75.75 0 0 1 .75-.75h3l-.721-.544 1.5 5.25a.75.75 0 1 0 1.442-.412zM11.25 6.75v16.5a.75.75 0 0 0 1.5 0V6.75a.75.75 0 0 0-1.5 0zm-4.5 7.5h10.5a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5zM1.5 6l10.064-4.37c.297-.161.575-.161.803-.033l10.178 4.425L22.5 6H1.5zm0 1.5h21a1.5 1.5 0 0 0 .689-2.832L13.034.255c-.616-.35-1.452-.35-2.136.034L.858 4.646c-.544.28-.856.792-.857 1.352A1.5 1.5 0 0 0 1.499 7.5z"></path></svg> Balcony</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="33" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-dishwasher" height="16" width="14" viewBox="0 0 112 128" role="presentation" aria-hidden="true" focusable="false"><path d="M100 0H12C5.373 0 0 5.373 0 12v104c0 6.627 5.373 12 12 12h88c6.627 0 12-5.373 12-12V12c0-6.627-5.373-12-12-12zM12 8h88a4 4 0 0 1 4 4v20H8V12a4 4 0 0 1 4-4zm88 112H12a4 4 0 0 1-4-4V40h96v76a4 4 0 0 1-4 4zM20 24h16a4 4 0 0 0 0-8H20a4 4 0 0 0 0 8zm25.78 34.33H23.56a6.12 6.12 0 0 0-6.23 6v4c0 7.55 5.7 13.88 13.34 15.56v4.44h-.5a4 4 0 0 0 0 8h8.89a4 4 0 0 0 0-8h-.39v-4.44C46.3 82.21 52 75.88 52 68.33v-4a6.12 6.12 0 0 0-6.22-6zm-1.78 10c0 4.41-4.19 8-9.33 8s-9.34-3.59-9.34-8v-2H44zm30.67-11c-11.046 0-20 8.954-20 20s8.954 20 20 20 20-8.954 20-20-8.954-20-20-20zm0 32c-6.627 0-12-5.373-12-12s5.373-12 12-12 12 5.373 12 12-5.373 12-12 12zM88 26a6 6 0 1 0-6-6 6 6 0 0 0 6 6zm-24 0a6 6 0 1 0-6-6 6 6 0 0 0 6 6z"></path></svg> Dishwasher</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="75" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-tv_flat_screen" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M22.5 10.375v6.5a.25.25 0 0 1-.25.25H1.75a.25.25 0 0 1-.25-.25v-13a.25.25 0 0 1 .25-.25h20.5a.25.25 0 0 1 .25.25v6.5zm1.5 0v-6.5a1.75 1.75 0 0 0-1.75-1.75H1.75A1.75 1.75 0 0 0 0 3.875v13c0 .966.784 1.75 1.75 1.75h20.5a1.75 1.75 0 0 0 1.75-1.75v-6.5zm-16.5 12h9a.75.75 0 0 0 0-1.5h-9a.75.75 0 0 0 0 1.5zm3.75-4.5v3.75a.75.75 0 0 0 1.5 0v-3.75a.75.75 0 0 0-1.5 0z"></path></svg> Flat-screen TV</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="120" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-tea_maker" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M.75 24h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM24 2.25A2.25 2.25 0 0 0 21.75 0H4.5a2.25 2.25 0 0 0-2.25 2.25v6A2.25 2.25 0 0 0 4.5 10.5H12a.75.75 0 0 1 .75.75v12c0 .414.336.75.75.75h9.75a.75.75 0 0 0 .75-.75v-21zm-1.5 0v21l.75-.75H13.5l.75.75v-12A2.25 2.25 0 0 0 12 9H4.5a.75.75 0 0 1-.75-.75v-6a.75.75 0 0 1 .75-.75h17.25a.75.75 0 0 1 .75.75zM18.75 24h4.5a.75.75 0 0 0 .75-.75v-10.5a.75.75 0 0 0-.75-.75h-3A2.25 2.25 0 0 0 18 14.25v9c0 .414.336.75.75.75zm0-1.5l.75.75v-9a.75.75 0 0 1 .75-.75h3l-.75-.75v10.5l.75-.75h-4.5zM6 9.75v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0zm2.25-4.5a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.5 0a2.25 2.25 0 1 0-4.5 0 2.25 2.25 0 0 0 4.5 0zm13.5-.75h-4.5a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zm0 3h-4.5a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zM2.344 18c0 .866.012 1.295.069 1.833C2.69 22.437 4.003 24 6.844 24c2.234 0 3.38-1.189 3.977-3.297.057-.203.11-.411.168-.66l.136-.599c.029-.126.054-.228.077-.32a1.5 1.5 0 0 0-1.454-1.874H3.094a.75.75 0 0 0-.75.75zm1.5 0l-.75.75h6.655c-.027.107-.054.22-.086.357l-.135.595c-.053.229-.1.415-.15.592-.434 1.53-1.085 2.206-2.534 2.206-1.97 0-2.736-.912-2.94-2.825-.05-.47-.06-.861-.06-1.675zm-.75-.75a3 3 0 0 0-3 3 .75.75 0 0 0 1.5 0 1.5 1.5 0 0 1 1.5-1.5.75.75 0 0 0 0-1.5z"></path></svg> Coffee machine</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="wifi" data-facility-type="2"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-wifi" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.25 18.75a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zm2.08-5.833a8.25 8.25 0 0 0-11.666 0 .75.75 0 0 0 1.06 1.06 6.75 6.75 0 0 1 9.546 0 .75.75 0 0 0 1.06-1.06zm3.185-3.182c-4.979-4.98-13.051-4.98-18.03 0a.75.75 0 1 0 1.06 1.06c4.394-4.393 11.516-4.393 15.91 0a.75.75 0 1 0 1.06-1.06zm2.746-3.603C17.136-.043 6.864-.043.24 6.132A.75.75 0 1 0 1.26 7.23c6.05-5.638 15.429-5.638 21.478 0a.75.75 0 0 0 1.022-1.098z"></path></svg> Free WiFi</span></div>
</div></p>
        <a href="book_1.php"><p><button class="button" onclick="document.getElementById('id03').style.display='block'">Book</button></p></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/home_2_normal.jpg" alt="House_2" style="width:100%">
      <div class="container_2">
        <h2>The House with View</h2>
        <p class="title">Karakol, Kyrgyzstan</p>
        <p>The house is located 5 km from the park . It offers a fitness center, a wellness spa and air-conditioned apartments with a patio and free Wi-Fi. Private parking is available on site.</p>
        <p>1 extra-large double bed  and 1 sofa bed </p>
		<p><div class="bui-spacer--medium" data-et-view="NAFLeOeJAdeOYFLFHAfEZXRRIVCHHEGO:1 NAFLeOeJAdeOYFLFHAfEZXRRIVCHHEGO:8 " data-et-click="customGoal:ZdZbaBBUVOIPBdGdfUC:1">
<div class="hprt-facilities-facility" data-name-en="room size" data-facility-id="0" data-facility-type="0"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-room_size" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M3.75 23.25V7.5a.75.75 0 0 0-1.5 0v15.75a.75.75 0 0 0 1.5 0zM.22 21.53l2.25 2.25a.75.75 0 0 0 1.06 0l2.25-2.25a.75.75 0 1 0-1.06-1.06l-2.25 2.25h1.06l-2.25-2.25a.75.75 0 0 0-1.06 1.06zM5.78 9.22L3.53 6.97a.75.75 0 0 0-1.06 0L.22 9.22a.75.75 0 1 0 1.06 1.06l2.25-2.25H2.47l2.25 2.25a.75.75 0 1 0 1.06-1.06zM7.5 3.75h15.75a.75.75 0 0 0 0-1.5H7.5a.75.75 0 0 0 0 1.5zM9.22.22L6.97 2.47a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.03 2.47v1.06l2.25-2.25A.75.75 0 1 0 9.22.22zm12.31 5.56l2.25-2.25a.75.75 0 0 0 0-1.06L21.53.22a.75.75 0 1 0-1.06 1.06l2.25 2.25V2.47l-2.25 2.25a.75.75 0 0 0 1.06 1.06zM10.5 13.05v7.2a2.25 2.25 0 0 0 2.25 2.25h6A2.25 2.25 0 0 0 21 20.25v-7.2a.75.75 0 0 0-1.5 0v7.2a.75.75 0 0 1-.75.75h-6a.75.75 0 0 1-.75-.75v-7.2a.75.75 0 0 0-1.5 0zm13.252 2.143l-6.497-5.85a2.25 2.25 0 0 0-3.01 0l-6.497 5.85a.75.75 0 0 0 1.004 1.114l6.497-5.85a.75.75 0 0 1 1.002 0l6.497 5.85a.75.75 0 0 0 1.004-1.114z"></path></svg> 62 m²</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="45" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders" data-et-mouseenter="customGoal:NAFLeOeJAdeOYFLFHAfEZXRRIVCHHEGO:1"><svg class="bk-icon -streamline-oven" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M2.25 2.25h19.5L21 1.5v21l.75-.75H2.25l.75.75v-21l-.75.75zm0-1.5a.75.75 0 0 0-.75.75v21c0 .414.336.75.75.75h19.5a.75.75 0 0 0 .75-.75v-21a.75.75 0 0 0-.75-.75H2.25zm-1.5 1.5h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zm0 21h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM18 15v3.539a.211.211 0 0 1-.211.211H6.211A.211.211 0 0 1 6 18.539v-7.078c0-.117.094-.211.211-.211h11.578c.116 0 .211.095.211.211V15zm1.5 0v-3.539a1.71 1.71 0 0 0-1.711-1.711H6.211c-.945 0-1.711.766-1.711 1.711v7.078c0 .945.766 1.711 1.711 1.711h11.578a1.71 1.71 0 0 0 1.711-1.711V15zM9 14.25h6a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5zM5.25 4.875a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5 1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5zm3 0a.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5 1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5zm-6 3.375h19.5a.75.75 0 0 0 0-1.5H2.25a.75.75 0 0 0 0 1.5zm11.25-3h5.25a.75.75 0 0 0 0-1.5H13.5a.75.75 0 0 0 0 1.5z"></path></svg> Kitchen</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="38" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-shower" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M15.375 10.875a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.5 0a3.375 3.375 0 1 0-6.75 0 3.375 3.375 0 0 0 6.75 0zm.375 12.375V18.7l-.667.745C20.748 18.98 24 15.925 24 10.5a2.25 2.25 0 0 0-4.5 0c0 1.945-.609 3.154-1.64 3.848a3.973 3.973 0 0 1-2.132.652H9a3.75 3.75 0 1 0 0 7.5h3a2.25 2.25 0 0 0 0-4.5H9a.75.75 0 0 0 0 1.5h3a.75.75 0 0 1 0 1.5H9a2.25 2.25 0 0 1 0-4.5h6.74a5.426 5.426 0 0 0 2.957-.908C20.154 14.613 21 12.932 21 10.5a.75.75 0 0 1 1.5 0c0 4.6-2.628 7.069-6.083 7.455a.75.75 0 0 0-.667.745v4.55a.75.75 0 0 0 1.5 0zm-7.5-1.5v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM.75 1.5h1.5l-.53-.22 1.402 1.402a.75.75 0 0 0 1.06-1.06L2.78.22A.75.75 0 0 0 2.25 0H.75a.75.75 0 1 0 0 1.5zm2.983 3.754a.01.01 0 0 1 .016.002c-.542-1.072-.1-2.426 1.008-2.988a2.25 2.25 0 0 1 2.037 0c-.041-.022-.043-.029-.04-.034l.002-.002-3.013 3.012zm1.07 1.05l3.002-3A1.489 1.489 0 0 0 7.51.951 3.766 3.766 0 0 0 4.079.929 3.75 3.75 0 0 0 2.43 5.971a1.49 1.49 0 0 0 2.382.323zm3.408-.968l1.116.62a.75.75 0 1 0 .728-1.312l-1.116-.62a.75.75 0 1 0-.728 1.312zm1.964-2.233l1.615.44a.75.75 0 1 0 .394-1.448l-1.615-.44a.75.75 0 1 0-.394 1.448zm4.217 1.15l1.615.44a.75.75 0 0 0 .396-1.447l-1.615-.44a.75.75 0 0 0-.396 1.447zM5.697 7.388l.577 1.038a.75.75 0 1 0 1.312-.728L7.009 6.66a.75.75 0 1 0-1.312.728zM3.284 8.94l.44 1.615a.75.75 0 1 0 1.448-.394l-.44-1.615a.75.75 0 1 0-1.448.394zm1.15 4.219l.246.896a.75.75 0 1 0 1.446-.396l-.245-.896a.75.75 0 1 0-1.446.396z"></path></svg> Bathroom</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="17" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-resort" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M.768 11.413l1.5 6.75a.75.75 0 0 0 1.464-.326l-1.5-6.75a.75.75 0 0 0-1.464.326zM2.22 23.456l1.5-5.25L3 18.75h3a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 0 1.5 0V19.5A2.25 2.25 0 0 0 6 17.25H3a.75.75 0 0 0-.721.544l-1.5 5.25a.75.75 0 1 0 1.442.412zm19.547-12.369l-1.5 6.75a.75.75 0 1 0 1.464.326l1.5-6.75a.75.75 0 1 0-1.464-.326zm1.453 11.957l-1.5-5.25A.75.75 0 0 0 21 17.25h-3a2.25 2.25 0 0 0-2.25 2.25v3.75a.75.75 0 0 0 1.5 0V19.5a.75.75 0 0 1 .75-.75h3l-.721-.544 1.5 5.25a.75.75 0 1 0 1.442-.412zM11.25 6.75v16.5a.75.75 0 0 0 1.5 0V6.75a.75.75 0 0 0-1.5 0zm-4.5 7.5h10.5a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5zM1.5 6l10.064-4.37c.297-.161.575-.161.803-.033l10.178 4.425L22.5 6H1.5zm0 1.5h21a1.5 1.5 0 0 0 .689-2.832L13.034.255c-.616-.35-1.452-.35-2.136.034L.858 4.646c-.544.28-.856.792-.857 1.352A1.5 1.5 0 0 0 1.499 7.5z"></path></svg> Balcony</span></div>

<div class="hprt-facilities-facility" data-name-en="" data-facility-id="75" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-tv_flat_screen" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M22.5 10.375v6.5a.25.25 0 0 1-.25.25H1.75a.25.25 0 0 1-.25-.25v-13a.25.25 0 0 1 .25-.25h20.5a.25.25 0 0 1 .25.25v6.5zm1.5 0v-6.5a1.75 1.75 0 0 0-1.75-1.75H1.75A1.75 1.75 0 0 0 0 3.875v13c0 .966.784 1.75 1.75 1.75h20.5a1.75 1.75 0 0 0 1.75-1.75v-6.5zm-16.5 12h9a.75.75 0 0 0 0-1.5h-9a.75.75 0 0 0 0 1.5zm3.75-4.5v3.75a.75.75 0 0 0 1.5 0v-3.75a.75.75 0 0 0-1.5 0z"></path></svg> Flat-screen TV</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="120" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-tea_maker" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M.75 24h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM24 2.25A2.25 2.25 0 0 0 21.75 0H4.5a2.25 2.25 0 0 0-2.25 2.25v6A2.25 2.25 0 0 0 4.5 10.5H12a.75.75 0 0 1 .75.75v12c0 .414.336.75.75.75h9.75a.75.75 0 0 0 .75-.75v-21zm-1.5 0v21l.75-.75H13.5l.75.75v-12A2.25 2.25 0 0 0 12 9H4.5a.75.75 0 0 1-.75-.75v-6a.75.75 0 0 1 .75-.75h17.25a.75.75 0 0 1 .75.75zM18.75 24h4.5a.75.75 0 0 0 .75-.75v-10.5a.75.75 0 0 0-.75-.75h-3A2.25 2.25 0 0 0 18 14.25v9c0 .414.336.75.75.75zm0-1.5l.75.75v-9a.75.75 0 0 1 .75-.75h3l-.75-.75v10.5l.75-.75h-4.5zM6 9.75v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0zm2.25-4.5a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.5 0a2.25 2.25 0 1 0-4.5 0 2.25 2.25 0 0 0 4.5 0zm13.5-.75h-4.5a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zm0 3h-4.5a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zM2.344 18c0 .866.012 1.295.069 1.833C2.69 22.437 4.003 24 6.844 24c2.234 0 3.38-1.189 3.977-3.297.057-.203.11-.411.168-.66l.136-.599c.029-.126.054-.228.077-.32a1.5 1.5 0 0 0-1.454-1.874H3.094a.75.75 0 0 0-.75.75zm1.5 0l-.75.75h6.655c-.027.107-.054.22-.086.357l-.135.595c-.053.229-.1.415-.15.592-.434 1.53-1.085 2.206-2.534 2.206-1.97 0-2.736-.912-2.94-2.825-.05-.47-.06-.861-.06-1.675zm-.75-.75a3 3 0 0 0-3 3 .75.75 0 0 0 1.5 0 1.5 1.5 0 0 1 1.5-1.5.75.75 0 0 0 0-1.5z"></path></svg> Coffee machine</span></div>
<div class="hprt-facilities-facility" data-name-en="" data-facility-id="wifi" data-facility-type="2"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-wifi" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.25 18.75a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zm2.08-5.833a8.25 8.25 0 0 0-11.666 0 .75.75 0 0 0 1.06 1.06 6.75 6.75 0 0 1 9.546 0 .75.75 0 0 0 1.06-1.06zm3.185-3.182c-4.979-4.98-13.051-4.98-18.03 0a.75.75 0 1 0 1.06 1.06c4.394-4.393 11.516-4.393 15.91 0a.75.75 0 1 0 1.06-1.06zm2.746-3.603C17.136-.043 6.864-.043.24 6.132A.75.75 0 1 0 1.26 7.23c6.05-5.638 15.429-5.638 21.478 0a.75.75 0 0 0 1.022-1.098z"></path></svg> Free WiFi</span></div>
</div></p>

        <a href="book_2.php"><p><button class="button" onclick="document.getElementById('id03').style.display='block'">Book</button></p></a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/home_3_normal.jpg" alt="House_3" style="width:100%">
      <div class="container_2">
        <h2>The Winter House</h2>
        <p class="title">Karakol, Kyrgyzstan</p>
        <p>It offers a secluded outdoor hot tub, a fully equipped kitchen, and a dining area. Free Wi-Fi is also available. Hiking Center. Each bedroom is equipped with a 42-inch flat-screen TV and an iPod docking station. </p>
        <p>Bedroom 1: 1 extra-large double bed </br>

		Bedroom 3: 1 double bed</p>
		<p><div class="bui-spacer--medium" data-et-view="" data-et-click="customGoal:ZdZbaBBUVOIPBdGdfUC:1">
<div class="hprt-facilities-facility" data-name-en="privacy" data-facility-id="0" data-facility-type="0"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-house-chimney-alt" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M3.004 13.923v8.25c0 .414.336.75.75.75h6a.75.75 0 0 0 .75-.75v-6a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 .75.75v6c0 .414.336.75.75.75h6a.75.75 0 0 0 .75-.75v-8.25a.75.75 0 0 0-1.5 0v8.25l.75-.75h-6l.75.75v-6a2.25 2.25 0 0 0-2.25-2.25h-1.5a2.25 2.25 0 0 0-2.25 2.25v6l.75-.75h-6l.75.75v-8.25a.75.75 0 0 0-1.5 0zm-1.72-.97l10.19-10.189a.75.75 0 0 1 1.06 0l10.19 10.19a.75.75 0 1 0 1.06-1.061L13.595 1.703a2.25 2.25 0 0 0-3.181 0L.224 11.894a.75.75 0 0 0 1.06 1.06zm15.97-7.28v-1.5l-.75.75h3.75l-.75-.75v5.25a.75.75 0 0 0 1.5 0v-5.25a.75.75 0 0 0-.75-.75h-3.75a.75.75 0 0 0-.75.75v1.5a.75.75 0 0 0 1.5 0z"></path></svg> Entire chalet</span></div><div class="hprt-facilities-facility" data-name-en="room size" data-facility-id="0" data-facility-type="0"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-room_size" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M3.75 23.25V7.5a.75.75 0 0 0-1.5 0v15.75a.75.75 0 0 0 1.5 0zM.22 21.53l2.25 2.25a.75.75 0 0 0 1.06 0l2.25-2.25a.75.75 0 1 0-1.06-1.06l-2.25 2.25h1.06l-2.25-2.25a.75.75 0 0 0-1.06 1.06zM5.78 9.22L3.53 6.97a.75.75 0 0 0-1.06 0L.22 9.22a.75.75 0 1 0 1.06 1.06l2.25-2.25H2.47l2.25 2.25a.75.75 0 1 0 1.06-1.06zM7.5 3.75h15.75a.75.75 0 0 0 0-1.5H7.5a.75.75 0 0 0 0 1.5zM9.22.22L6.97 2.47a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.03 2.47v1.06l2.25-2.25A.75.75 0 1 0 9.22.22zm12.31 5.56l2.25-2.25a.75.75 0 0 0 0-1.06L21.53.22a.75.75 0 1 0-1.06 1.06l2.25 2.25V2.47l-2.25 2.25a.75.75 0 0 0 1.06 1.06zM10.5 13.05v7.2a2.25 2.25 0 0 0 2.25 2.25h6A2.25 2.25 0 0 0 21 20.25v-7.2a.75.75 0 0 0-1.5 0v7.2a.75.75 0 0 1-.75.75h-6a.75.75 0 0 1-.75-.75v-7.2a.75.75 0 0 0-1.5 0zm13.252 2.143l-6.497-5.85a2.25 2.25 0 0 0-3.01 0l-6.497 5.85a.75.75 0 0 0 1.004 1.114l6.497-5.85a.75.75 0 0 1 1.002 0l6.497 5.85a.75.75 0 0 0 1.004-1.114z"></path></svg> 491 m²</span></div><div class="hprt-facilities-facility" data-name-en="" data-facility-id="17" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-resort" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M.768 11.413l1.5 6.75a.75.75 0 0 0 1.464-.326l-1.5-6.75a.75.75 0 0 0-1.464.326zM2.22 23.456l1.5-5.25L3 18.75h3a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 0 1.5 0V19.5A2.25 2.25 0 0 0 6 17.25H3a.75.75 0 0 0-.721.544l-1.5 5.25a.75.75 0 1 0 1.442.412zm19.547-12.369l-1.5 6.75a.75.75 0 1 0 1.464.326l1.5-6.75a.75.75 0 1 0-1.464-.326zm1.453 11.957l-1.5-5.25A.75.75 0 0 0 21 17.25h-3a2.25 2.25 0 0 0-2.25 2.25v3.75a.75.75 0 0 0 1.5 0V19.5a.75.75 0 0 1 .75-.75h3l-.721-.544 1.5 5.25a.75.75 0 1 0 1.442-.412zM11.25 6.75v16.5a.75.75 0 0 0 1.5 0V6.75a.75.75 0 0 0-1.5 0zm-4.5 7.5h10.5a.75.75 0 0 0 0-1.5H6.75a.75.75 0 0 0 0 1.5zM1.5 6l10.064-4.37c.297-.161.575-.161.803-.033l10.178 4.425L22.5 6H1.5zm0 1.5h21a1.5 1.5 0 0 0 .689-2.832L13.034.255c-.616-.35-1.452-.35-2.136.034L.858 4.646c-.544.28-.856.792-.857 1.352A1.5 1.5 0 0 0 1.499 7.5z"></path></svg> Balcony</span></div><div class="hprt-facilities-facility" data-name-en="" data-facility-id="11" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-weather_snowflake" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M11.25.75v7.5a.75.75 0 0 0 1.5 0V.75a.75.75 0 0 0-1.5 0zm4.031.914l-3.75 3h.938l-3.75-3a.75.75 0 1 0-.938 1.172l3.75 3a.75.75 0 0 0 .938 0l3.75-3a.75.75 0 1 0-.938-1.172zM1.883 7.024l6.495 3.75a.75.75 0 0 0 .75-1.299l-6.495-3.75a.75.75 0 1 0-.75 1.3zM4.69 3.99l.723 4.748.468-.812-4.473 1.748a.75.75 0 0 0 .546 1.398l4.473-1.748a.75.75 0 0 0 .468-.812l-.723-4.748a.75.75 0 1 0-1.482.226zM2.632 18.274l6.495-3.75a.75.75 0 1 0-.75-1.298l-6.495 3.75a.75.75 0 1 0 .75 1.299zm-1.224-3.948l4.473 1.748-.468-.812-.723 4.748a.75.75 0 0 0 1.482.226l.723-4.748a.75.75 0 0 0-.468-.812l-4.473-1.748a.75.75 0 0 0-.546 1.398zM12.75 23.25v-7.5a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zm-4.031-.914l3.75-3h-.938l3.75 3a.75.75 0 0 0 .937-1.172l-3.75-3a.75.75 0 0 0-.937 0l-3.75 3a.75.75 0 0 0 .938 1.172zm13.399-5.36l-6.495-3.75a.75.75 0 0 0-.75 1.298l6.495 3.75a.75.75 0 0 0 .75-1.299zm-2.807 3.034l-.724-4.748-.468.812 4.473-1.748a.75.75 0 0 0-.546-1.398l-4.473 1.748a.75.75 0 0 0-.468.812l.723 4.748a.75.75 0 0 0 1.483-.226zm2.057-14.285l-6.495 3.75a.75.75 0 0 0 .75 1.3l6.495-3.75a.75.75 0 0 0-.75-1.3zm1.224 3.95l-4.473-1.749.468.812.724-4.748a.75.75 0 0 0-1.483-.226l-.723 4.748a.75.75 0 0 0 .468.812l4.473 1.748a.75.75 0 0 0 .546-1.398zM11.625 7.6L8.377 9.475a.75.75 0 0 0-.375.65v3.75a.75.75 0 0 0 .375.65l3.248 1.874a.75.75 0 0 0 .75 0l3.248-1.875a.75.75 0 0 0 .375-.649v-3.75a.75.75 0 0 0-.375-.65L12.375 7.6a.75.75 0 0 0-.75 0zm.75 1.3h-.75l3.248 1.874-.375-.649v3.75l.375-.65-3.248 1.876h.75l-3.248-1.876.375.65v-3.75l-.375.65L12.375 8.9z"></path></svg> Air conditioning</span></div><div class="hprt-facilities-facility" data-name-en="" data-facility-id="38" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-shower" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M15.375 10.875a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0zm1.5 0a3.375 3.375 0 1 0-6.75 0 3.375 3.375 0 0 0 6.75 0zm.375 12.375V18.7l-.667.745C20.748 18.98 24 15.925 24 10.5a2.25 2.25 0 0 0-4.5 0c0 1.945-.609 3.154-1.64 3.848a3.973 3.973 0 0 1-2.132.652H9a3.75 3.75 0 1 0 0 7.5h3a2.25 2.25 0 0 0 0-4.5H9a.75.75 0 0 0 0 1.5h3a.75.75 0 0 1 0 1.5H9a2.25 2.25 0 0 1 0-4.5h6.74a5.426 5.426 0 0 0 2.957-.908C20.154 14.613 21 12.932 21 10.5a.75.75 0 0 1 1.5 0c0 4.6-2.628 7.069-6.083 7.455a.75.75 0 0 0-.667.745v4.55a.75.75 0 0 0 1.5 0zm-7.5-1.5v1.5a.75.75 0 0 0 1.5 0v-1.5a.75.75 0 0 0-1.5 0zM.75 1.5h1.5l-.53-.22 1.402 1.402a.75.75 0 0 0 1.06-1.06L2.78.22A.75.75 0 0 0 2.25 0H.75a.75.75 0 1 0 0 1.5zm2.983 3.754a.01.01 0 0 1 .016.002c-.542-1.072-.1-2.426 1.008-2.988a2.25 2.25 0 0 1 2.037 0c-.041-.022-.043-.029-.04-.034l.002-.002-3.013 3.012zm1.07 1.05l3.002-3A1.489 1.489 0 0 0 7.51.951 3.766 3.766 0 0 0 4.079.929 3.75 3.75 0 0 0 2.43 5.971a1.49 1.49 0 0 0 2.382.323zm3.408-.968l1.116.62a.75.75 0 1 0 .728-1.312l-1.116-.62a.75.75 0 1 0-.728 1.312zm1.964-2.233l1.615.44a.75.75 0 1 0 .394-1.448l-1.615-.44a.75.75 0 1 0-.394 1.448zm4.217 1.15l1.615.44a.75.75 0 0 0 .396-1.447l-1.615-.44a.75.75 0 0 0-.396 1.447zM5.697 7.388l.577 1.038a.75.75 0 1 0 1.312-.728L7.009 6.66a.75.75 0 1 0-1.312.728zM3.284 8.94l.44 1.615a.75.75 0 1 0 1.448-.394l-.44-1.615a.75.75 0 1 0-1.448.394zm1.15 4.219l.246.896a.75.75 0 1 0 1.446-.396l-.245-.896a.75.75 0 1 0-1.446.396z"></path></svg> Private bathroom</span></div><div class="hprt-facilities-facility" data-name-en="" data-facility-id="75" data-facility-type="1"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-tv_flat_screen" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M22.5 10.375v6.5a.25.25 0 0 1-.25.25H1.75a.25.25 0 0 1-.25-.25v-13a.25.25 0 0 1 .25-.25h20.5a.25.25 0 0 1 .25.25v6.5zm1.5 0v-6.5a1.75 1.75 0 0 0-1.75-1.75H1.75A1.75 1.75 0 0 0 0 3.875v13c0 .966.784 1.75 1.75 1.75h20.5a1.75 1.75 0 0 0 1.75-1.75v-6.5zm-16.5 12h9a.75.75 0 0 0 0-1.5h-9a.75.75 0 0 0 0 1.5zm3.75-4.5v3.75a.75.75 0 0 0 1.5 0v-3.75a.75.75 0 0 0-1.5 0z"></path></svg> Flat-screen TV</span></div><div class="hprt-facilities-facility" data-name-en="" data-facility-id="wifi" data-facility-type="2"><span class=" bui-badge bui-badge--outline room_highlight_badge--without_borders"><svg class="bk-icon -streamline-wifi" height="16" width="16" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.25 18.75a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0zm1.5 0a3.75 3.75 0 1 0-7.5 0 3.75 3.75 0 0 0 7.5 0zm2.08-5.833a8.25 8.25 0 0 0-11.666 0 .75.75 0 0 0 1.06 1.06 6.75 6.75 0 0 1 9.546 0 .75.75 0 0 0 1.06-1.06zm3.185-3.182c-4.979-4.98-13.051-4.98-18.03 0a.75.75 0 1 0 1.06 1.06c4.394-4.393 11.516-4.393 15.91 0a.75.75 0 1 0 1.06-1.06zm2.746-3.603C17.136-.043 6.864-.043.24 6.132A.75.75 0 1 0 1.26 7.23c6.05-5.638 15.429-5.638 21.478 0a.75.75 0 0 0 1.022-1.098z"></path></svg> Free WiFi</span></div>
</div></p>
        <a href="book_3.php"><p><button class="button" onclick="document.getElementById('id03').style.display='block'">Book</button></p></a>
      </div>
    </div>
  </div>
</div>

</div >
</div>
					<!-- The Modal -->
		<div id="id01" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'"
		class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" method ="post" action="index.php">
			<div class="imgcontainer">
			  <img src="images/img_avatar2.png"  alt="Avatar" class="avatar">
			</div>

			<div class="container_2">
			  <label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>

			  <label for="password"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>

			  <button id="button_login" type="submit"  name="loging-in" ">Login</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			</div>

			<div class="container_2" style="background-color:#f1f1f1">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="contact.php">password?</a></span>
			</div>
		  </form>
		</div>
		
		
		
		<!-- The Modal (contains the Sign Up form) -->
		<div id="id02" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>
		  <form class="modal-content" method="post" action="houses.php">
			<div class="container_2">
			  <h1>Sign Up</h1>
			  <hr>
			  <p>Please fill in this form to create an account.</p>
			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Enter Email" name="email" required>
			  
				<label for="username"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>
			  
			  <label for="password1"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password1" required>

			  <label for="password2"><b>Repeat Password</b></label>
			  <input type="password" placeholder="Repeat Password" name="password2" required>
			  
			  <label for="phone"><b>Phone number</b></label>
			  <input type="text" placeholder="Enter Phone number" name="phone" required>

			  <label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			  </label>

			  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			  <div class="clearfix">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn_2">Cancel</button>
				<button type="submit"  name='signing-up' class="signupbtn_2">Sign Up</button>
			  </div>
			  </br>
			  			  </br>
			  </br>

			</div>
		  </form>
		</div>
		
		
				<div id="id03" class="modal">
		  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">times;</span>
		  <form class="modal-content" method="post" action="houses.php">
			<div class="container_2">
			  <div id="form_add">
  <div class="elem-group">
	<p style="color:tomato;">To register you have to log in first!</p>
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" readonly placeholder=<?php echo $_SESSION['username'];?>>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="text" id="email" name="visitor_email" readonly placeholder=<?php echo $_SESSION['email']; ?> >
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="text" id="phone" name="visitor_phone" readonly placeholder=<?php echo $_SESSION['phone']; ?> >
  </div>
  <hr>

  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>

  </div>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select the House</label>
    <select id="room-selection" name="house_number" required>
        <option value="">Choose a House from the List</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important."></textarea>
  </div>
  <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn_2">Cancel</button>
  <button type="submit"   name="booking_button" class="signupbtn_2">Book The Rooms</button>
</form>

</br></br>
</div>
			  </div>


			</div>
		
		

		</script>
		
		
		
		<div class="heading" id="myHeader">
  <h1>House gallery	</h1>
  
</div>


<div class="container_images">

  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/home_1_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/home_2_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/home_3_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/home_4_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/home_5_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/home_6_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/home_1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods House">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_2.jpg" style="width:100%" onclick="currentSlide(2)" alt="The House with View">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_3.jpg" style="width:100%" onclick="currentSlide(3)" alt="The Winter House">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/home_5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Night Winter House">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/home_6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Tech House">
    </div>
  </div>


</div>
		
		
		
		
		<script>
		



		
		var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}




		
				// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}


		</script>
		
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

