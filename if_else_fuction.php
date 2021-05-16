<?php 
function tukar ($teman)
{
	if ($teman == 'rasyid') {
		$tempat='SMP';
	}
	else {
		$tempat='SMA';
	}
	echo $tempat;
}
tukar('rasyid');



 ?>