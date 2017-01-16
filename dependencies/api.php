<?php
$version = '4.3';
//If player is needed 
if(isset($_GET['player']))
{
	require('3duser.php');
	exit;
}
//
//merge these arrays becuz i sed so
	if(isset($settings))
	{
		$settings = array_merge($settings, $_GET);
	}
	else
	{
		$settings = $_GET;
	}
//
//Below Average Minecraft User list - Based off of xPaw's (Pavel's) Minecraft server status	
		if(empty($settings['theme']))
		{
			include('themes/style.php');
		}
		else
		{
		if($settings['theme'] == 'cobble')
		{
			include('themes/cobblestyle.php');
		}
		if($settings['theme'] == 'obsidian')
		{
			include('themes/obsidianstyle.php');
		}
		if($settings['theme'] == 'light')
		{
			include('themes/lightstyle.php');
		}
		if($settings['theme'] == 'kiwi')
		{
			include('themes/kiwistyle.php');
		}
		if($settings['theme'] == 'mobi')
		{
			echo '<meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />';
			include('themes/mobistyle.php');
		}
		}
//
//echo doctype and headers
$doesiblur = '';
echo '
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dependencies/magnific-popup.css"> 
	<script src="dependencies/jquery.magnific-popup.js"></script>
	<script>
	$(document).ready(function() {
	
	$(\'.iframe\').magnificPopup({
		type: \'iframe\',
		closeBtnInside: false,
		mainClass: \'mfp-fade\',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: true
	});

	});
	</script>
</head>
<body>
<div '.$doesiblur.' id="wrapper">
';
//Background setup goes here yo
	if(!empty($settings['backgroundurl']))
		{
			echo '<img style="position: fixed; z-index: -10; width: 100%; height: 100%; top: 0px; left: 0px;" src="'.$settings['backgroundurl'].'"/>';
		}
//
// Set the player get as $usr if the get is specified
	if(isset($settings['player']))
	{
		$usr = $settings['player'];
	}
//
//Settings.ini title is empty, echo defaults, otherwise, echo the setting.
	if(empty($settings['title']))
	{
		echo '
		<title>Who\'s Online?</title>';
		if(empty($settings['titletext']) or $settings['titletext'] !== 'false')
		{
			echo '
			<div id="title">Who\'s Online?</div>
			<hr>';
		}
	}
	else
	{
		echo '
		<title>'.$settings['title'].'</title>';
		if(empty($settings['titletext']) or $settings['titletext'] !== 'false')
		{
			echo '
			<div id="title">'.$settings['title'].'</div>
			<hr>';
		}
	}
//
//echo the center element and the player wrapper map span. For the "player circles"
	echo '
	<center>
	<span id="wrappermap">
	';
//
//Include the xPaws mine query php and start echoing everyone on-line the specified server in the settings.ini
	include ('MinecraftQuery.class.php');
	$Query = new MinecraftQuery( );
	try
	{
		if(isset($settings['ip']))
		{
			if(isset($settings['port']))
			{
				$port = $settings['port'];
			}
			else
			{
				$port = '25565';
			}
			$Query->Connect( $settings['ip'], $port );
		}
		$players = $Query->GetPlayers( );
		//if nobody is online it shall display this
		if(empty($players))
		{
			echo '<div id="floatttl">Nobody is online.</div><div id="frown">:(</div>';
		}
		//
		//otherwise
		else
		{
		//it will display this
			foreach($players as $player)
			{
				echo '
				<a class="iframe" href="?player='.$player.'" id="link">
				<div id="player">';
				
				if(empty($settings['headfont']) or $settings['headfont'] == 'true')
				{
					echo $player;
				}
				
				if(empty($settings['heads']) or $settings['heads'] !== 'false')
				{
					
					if(!empty($settings['headsource']) and $settings['headsource'] == 'belowaverage')
					{
						echo'
						<img id="head" src="//belowaverage.ga/API/SKINHEAD/?player='.$player.'&size='.$settings['headsize'].'"/>
						';
					}
					elseif(!empty($settings['headsource']) and $settings['headsource'] == 'localhost')
					{
						echo'
						<img id="head" src="dependencies/skinheadapi.php?player='.$player.'&size='.$settings['headsize'].'"/>
						';
					}
					elseif(!empty($settings['headsource']) and $settings['headsource'] == 'minotar')
					{
						echo'
						<img id="head" src="//minotar.net/avatar/'.$player.'/'.$settings['headsize'].'"/>
						';
					}
					else
					{
						echo'
						<img id="head" src="//belowaverage.org/API/SKINHEAD/?player='.$player.'&size='.$settings['headsize'].'"/>
						';
					}
				
				}				
				echo '
				</div>
				</a>
				';
			}
		//
		}

	}

	catch( MinecraftQueryException $e )
	{
		echo $e->getMessage( );
	}
//
//echo the closing brackets/elements to the span(wrappermmap) and center
	echo '
	</span>
	</center>';
//
//If the footer setting is set display what the setting is, otherwise there shall be no footer. =(
	if(isset($settings['footer']) and isset($players) and $settings['footer'] !== '')
	{	
		$count = count($players);
		if(empty($players)) { $count = 0; }
		echo '
		<div id="footer">
		<div id="footer2">
		<center>'.$settings['footer'].'Online: '.$count.'</center>
		</div>
		</div>
		';
	}
//

echo '
</div>
</html>
';
?>
