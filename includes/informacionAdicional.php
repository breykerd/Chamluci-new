
<?php 

$comparado = [ 1 =>'img4', 2 =>'certificadosGarantia', 3=>'ficha_tecnica', 4=>'video'];
$comparador=[];
if ($DatosProducto['img4']!=null) {  $comparador[1]='img4'; };
if ($DatosProducto['idCertificados']!=null or $DatosProducto['idGarantias']!=null) { $comparador[2]='certificadosGarantia'; };
if ($DatosProducto['ficha_tecnica']!=null) { $comparador[3]='ficha_tecnica'; };
if ($DatosProducto['video']!=null) { $comparador[4]='video'; };

$contDiv= count($comparador);

if ($contDiv >=1) {
	
echo '<h3 class="text-center">información Adicional</h3>';

$contador2=0;
for ($contador=1; $contador <= 4 ; $contador++) { 

	if (in_array($comparado[$contador], $comparador) == true) {
$contador2++;
		$valorArray =array_search($comparado[$contador], $comparador);

			if ($valorArray==1) {
				require('box/colores.php');
			}elseif ($valorArray==2) {
				require('box/certificadosGarantias.php');
			}elseif ($valorArray==3) {
				require('box/fichaTecnica.php');
			}elseif ($valorArray==4) {
				require('box/video.php');
			}


		};
		
	

	};
};
 