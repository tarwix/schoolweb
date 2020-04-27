<html>
	<body>
		<?php mail( "tadeaszelinka@seznam.cz",$p =  $_GET['p'], $z = $_GET['z']) ?>
		<?php
		if ($p!="" and $z!="")
		{
		echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
		}
		else
		{
		echo "<p>Váš e-mail se <strong>nepodařilo odeslat.</strong> Pravděpodobně jste nevyplnili všechny údaje.</p>";
		}
		?>
	</body>
</html>
