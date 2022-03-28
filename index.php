<?php	
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html('
<table border=1>
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Email</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Paulo</td>
			<td>paulo@gmail.com</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Emanuel</td>
			<td>emanuel@gmail.com</td>
		</tr>
	</table>
');
$dompdf->render();
$dompdf->stream("Relatorio",array("Attachment" => true));
?>
