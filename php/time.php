<meta charset="utf-8">
<?php

date_default_timezone_set('America/Sao_Paulo');

function hora()
{
	$h = date('H');

	if(($h >= 00) && ($h < 12))
	{
		echo "Bom dia";
	}

	else if(($h >= 12) && ($h < 18))
	{
		echo "Boa tarde";
	}

	else if(($h >= 18) && ($h < 24))
	{
		echo "Boa noite";
	}
}

?>