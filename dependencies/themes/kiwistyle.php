<?php
//v 4.2
//IMNOT GOING TO COMMENT THIS WHOLE THING!!! LOL! =) css is self explained. Anyhow I bet your wondering what lies directly below me in php, just in-case your not familiar. Down there asks the settings.ini what color it's set to, if it's empty the default is right......
	
	if(empty($settings['color']))
	{
		$color = 'black'; //......here
	}
	else
	{
		$color = $settings['color'];
	}


	if(empty($settings['patternurl']))
		{
			$pattern = 'dependencies/congruent_pentagon.png';
		}
		else
		{
			$pattern = $settings['patternurl'];
		}
	
	
	
	if(empty($settings['headsize']))
	{
	 $settings['headsize'] = '150';
	}
	if(empty($settings['headfontsize']))
	{
	 $settings['headfontsize'] = '16';
	}
	
	if($settings['shownameonhover'] == 'true')
	{
	 $opacitynorm = 1;
	 $opacityhover = 0.3;
	}
	else
	{
	 $opacitynorm = 0.3;
	 $opacityhover = 1;
	}
	
echo '
<style>
*{
transition:.5s;
-webkit-transition:.5s;
font-family: "Ubu", sans-serif;
text-shadow:1px 1px 5px black;
}
@font-face {
font-family: "Ubu";
font-style: normal;
font-weight: 300;
src: url(\'dependencies/ubu.woff\') format("woff");
}
body {
background-color:black;
background-image:url(\''.$pattern.'\');
background-attachment: fixed;
}
#player {
display:inline-block;
width:'.$settings['headsize'].'px;
height:'.$settings['headsize']/1.6666666666666666666666666666 .'px;
position:relative;
padding-top:'.$settings['headsize']/2.5 .'px;
text-align:center;
border-radius:100%;
color:black;
font-size:'.$settings['headfontsize'].'px;
border:3px solid '.$color.';
margin:30px;
cursor:pointer
}
#player:hover {
background-color:rgba(0, 0, 0, 0.2);
border:3px solid white;
}
#head {
border-radius:100%;
position:absolute;
top:0px;
left:0px;
opacity:'.$opacitynorm.';
}
#head:hover {
opacity:'.$opacityhover.';
}
#cover {
position:fixed;
top:0px;
left:0px;
width:100%;
height:100%;
background-color:rgba(0, 0, 0, 0.0);
animation: ani 0.5s;
-webkit-animation: ani 0.5s; /* Safari and Chrome */
}
@keyframes ani
{
from {opacity:0;}
to {opacity:1;}
}
@-webkit-keyframes ani /* Safari and Chrome */
{
from {opacity:0;}
to {opacity:1;}
}
#frown {
font-size:200px;
color:white;
}
#float {
position:absolute;
left:50%;
padding:10px;
margin-left:-30%;
top:20px;
width:60%;
animation: ani 0.5s;
-webkit-animation: ani 0.5s; /* Safari and Chrome */
border-radius:30px;
border:3px solid '.$color.';
background-color:rgba(0, 0, 0, .50);
}
#title {
color:white;
font-size:80px;
text-align:center;
}
hr { 
height: 1px;
border: 0;
background: '.$color.';
background: -webkit-gradient(linear, 0 0, 100% 0, from(transparent), to(transparent), color-stop(50%, '.$color.'));
}
#floatttl {
font-size:50px;
color:white;
padding-bottom:10px;
text-align:center;
}
#hide {
display:none;
}
#floatitm {
font-size:30px;
text-align:left;
}
#link,a {
color:black;
text-decoration:none;
}
#ex {
border-radius:100%;
border:2px solid gray;
font-size:25px;
color:gray;
position:absolute;
right:10px;
top:8px;
padding-right:8px;
padding-left:8px;
text-decoration:none;
}
#ex:hover {
color:'.$color.';
border:2px solid '.$color.';
}
#skin {
width:223px;
height:446px;
margin-left:auto;
margin-right:auto;
background-position:0 0;
}
#footer {
box-shadow:inset 0px 5px 5px rgba(0, 0, 0, 0.3);	
bottom:0px;
left:0px;
height:25px;
border-top:0px solid rgba(0, 0, 0, 0.2);
width:100%;
background-image:url(\''.$pattern.'\');
position:fixed;
background-color:black;
}
#footer2 {
background-color: rgba(0, 0, 0, 0.2);
position: absolute;
color:black;
top: 0;
padding-top:3px;
left: 0;
width: 100%;
height: 100%;
}
#skin:hover {
background-position:224px 0;
}
</style>';

?>