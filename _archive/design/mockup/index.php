<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<title>UM-Dearborn</title>
	
	<style type="text/css">
		body {background-color:#0b0542;}
		#dearborn { position: relative; background: url(bg-pic.jpg) no-repeat center top; z-index:1; height:1500px; }
		#overlay, #overlay2 { position: absolute; left: 50%; margin-left: -600px; min-width: 980px; opacity:.9; } 
		#overlay img, #overlay2 img { position: absolute; top: 0; left: 0; z-index: 3; }
		#overlay2  { z-index: 90; opacity:1; }
		#image { min-width: 980px;  z-index:1; }
			#image img { position:absolute; left:50%; margin-left:-600px; }
	</style>
	
</head>
<body>
<div id="overlay2">
    <img src="DEARBORN.png" />
</div>

<div id="dearborn">
    <div id="overlay">
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.js"></script>

<script>

$(document).ready(function() {
    var interval = 1000, 
        images = ['01.png', '02.png', '03.png', '04.png', '05.png', '06.png', 
                  '07.png', '08.png', '09.png', '10.png', '11.png'],
        path = 'overlay/',
        len = images.length,
        pos = 0,
        $container = $('#overlay');

    var intervalId = setInterval(function() {
        if (pos === len) {
            clearInterval(intervalId);
            //$container.empty('.lw_overlay');
            //pos = 0;
        } else {
            var $curr_img = $container.children('.lw_overlay');

            console.log(images[pos] + ' ' + pos);

            $('<img src="' + path + images[pos] + '"/>').load(function() { 
                $(this).addClass('lw_overlay').hide().appendTo($container).fadeIn('slow', function() {
                    $curr_img.remove();
                })
            });
            pos++;
        }
    }, interval); 
});

</script>

</body>
</html>
