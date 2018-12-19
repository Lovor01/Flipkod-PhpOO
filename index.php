<?php
/**
 * zadatak PHP OO
 * Opseg i površina kruga i trokuta
 * vrijeme rješavanja zadatka: 20 min
 */

class Geometrijski_lik
{
	public $povrsina;
	public function get_povrsina()
	{
		return $this->povrsina;
	}
}


class Trokut extends Geometrijski_lik
{
	function __construct($a, $b, $c, $v)
	{
		$p = ($a + $b + $c) / 2;
		$this->povrsina = sqrt( $p * ($p - $a)*($p - $b)*($p - $c) );
	}
}

class Krug extends Geometrijski_lik
{
	function __construct($r)
	{
		$this->povrsina = $r ** 2 * pi();
	}
}

$moj_krug = new Krug(5);
$moj_trokut = new Trokut(3, 4, 5, 3);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Test zadatka 1</title>
	</head>
	<body>
		<p>Površina kruga radijusa 5 je: <?php echo $moj_krug->get_povrsina() ?></p>
		<p>Površina trokuta stranica 3, 4, 5, i visine 3 je: <?php echo $moj_trokut->get_povrsina() ?></p>
	</body>
</html>