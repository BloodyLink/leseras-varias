<html>
<body>
<?php
$x = 0;
$y = 0;
$numero_a_buscar = $_GET["numero"];
$cont = 0;
for($x = 1;$x <= 5; $x++){
          for($y = 1;$y <= 5; $y++){    
          		$num[$x][$y] = rand(1,10);
          }
    }
    for($x = 1;$x <= 5; $x++){
          for($y = 1;$y <= 5; $y++){    
                echo $num[$x][$y] . " = ";
                if($num[$x][$y] == $numero_a_buscar){
                	$cont++;
                }
          }
          echo "<br />";
    }
    echo "<br />";
    echo "El numero " . $numero_a_buscar . " figura " . $cont . " veces en la matriz.";
?>
<hr />
<?php
echo "Ingresando Datos... <br /><br />";
$suma_edades = 0;
$suma_sueldos = 0;
$suma_estaturas = 0;
$altos = 0;
for($r = 0;$r < 10; $r++){
		$i = 1;
			$persona[$r][$i-1] = "Persona" . $r;
			echo "Nombre: Persona" . $r . "<br />";
			$i++;
			$persona[$r][$i-1] = rand(18,50);
			$suma_edades = $suma_edades + $persona[$r][$i-1];
			echo "Edad: " . $persona[$r][$i-1] . "<br />";
			$i++;
			$persona[$r][$i-1] = sexo(rand(0,1));
			echo "Sexo: " . $persona[$r][$i-1] . "<br />";
			$i++;
			$persona[$r][$i-1] = rand(160,190);
			$suma_estaturas = $suma_estaturas + $persona[$r][$i-1];
			if($persona[$r][$i-1] > 170){$altos++;}
			echo "Estatura: " . $persona[$r][$i-1] . "<br />";
			$i++;
			$persona[$r][$i-1] = rand(300000,600000);
			$suma_sueldos = $suma_sueldos + $persona[$r][$i-1];
			echo "Sueldo: " . $persona[$r][$i-1] . "<br /><br />";
			$i++;}
function promedio_edades($edades){
	$promedio = $edades/10;
	echo $promedio . "<br />";}
function promedio_sueldos($sueldos){
	$promedio = $sueldos/10;
	echo $promedio . "<br />";}
function promedio_estaturas($estaturas){
	$promedio = $estaturas/10;
	echo $promedio . "<br />";}
function porcentaje_altos($altos){
	$porcentaje_altos = $altos * 100 / 10;
	echo "%" . $porcentaje_altos . ".";}
function sexo($a){
		if($a == 1){
			return "M";
		}else{
			return "F";}
	}
echo "El promedio de edades es: ";
promedio_edades($suma_edades);
echo "El promedio de sueldos es: ";
promedio_sueldos($suma_sueldos);
echo "El promedio de estaturas es: ";
promedio_estaturas($suma_estaturas);
echo "El porcentaje de personas con estatura major a 170 es ";
porcentaje_altos($altos);
?>
</body>
<script>
	function hola(){
		var a = 1;
		while(a == 1){
			alert("You know nothing Jon Snow");
		}
	}
</script>
</html>