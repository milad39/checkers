<?php

<html>
<body style="line-height: 10px;">
<?php

for ($i=0;$i<50;$i++){
	for ($j=0;$j<20;$j++)
	{
		$color=random_color();
		$i%2==0?$m=2:$m=3;

		?>
		<div style="border-radius:2px;padding:2;margin:0;display: inline-block;height:50px;width:50px;background-color:<?php echo $color; ?>">&nbsp;</div>
		<?php
	}
	echo "<hr>";
}

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}


?>
</body>
</html>


?>
