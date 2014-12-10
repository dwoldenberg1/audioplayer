<!-- Music Player Space for David -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="music.css">
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript">
    var master = JSON.parse('<?php echo json_encode($music_array); ?>');
</script>
<script src="music.js" type="text/javascript"></script>
</head>
<body>	
    <!--<h1>MUSIC!!!!</h1>-->
 
    <div class="container">
 
        <div class="player container gradient">
 
            <a class="button" id="p" href="" title="">
            	<img id="pimg" src="sprites.png" alt="play" class="clip pos-2" />
            </a>
            <a class="button" id="m" href="" title="">
				<img id="mimg" src="sprites.png" alt="mute" class="clip pos-3" />
			</a>
         
                <input type="range" class= "gradient" id="seek" value="0" max=""/>
     
            <a class="button" id="prev" href="" title="">
            	<img src="sprites.png" alt="prev" class="clip pos-6" />
            </a>
            <a class="button" id="next" href="" title="">
				<img src="sprites.png" alt="next" class="clip pos-5" />
			</a>
            <a class="button" id="shuffle" href="" title="">
				<img src="sprites.png" alt="shuffle" class="clip pos-7" />
			</a>
             
        </div><!-- / player -->
        <table id="track_list">
        <?php foreach ($music_array as $key=>$dset){
		echo "<tr> <td> <a href='' class='song' id='".$key."'> Song ".$dset['name']. " </a></td></tr>";
		}?>
		</table>
         
    </div><!-- / Container-->

</body>
</html>

