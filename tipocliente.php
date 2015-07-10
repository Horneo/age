<?php 

switch ($_REQUEST['tipo']) 
{ 
    case 0:
        $tipoFactura= "TICKET_FACTURA_A";
        $nombreTipo="IVA RESPONSABLE_INSCRIPTO";
        break;

    case 1:
        $tipoFactura= "TICKET_FACTURA_A";
        $nombreTipo= "RESP_NO_INSCRIPTO";
        break;

    case 2:
        $tipoFactura="TICKET_FACTURA_A";
        $nombreTipo= "NO_CATEGORIZADO";
        break;

    case 3:
        $tipoFactura= "TICKET_FACTURA_B";
        $nombreTipo= "RESPONSABLE_EXENTO";
        break;

    case 4:
        $tipoFactura="TICKET_FACTURA_B";
        $nombreTipo= "CATEGORIZADO";
        break;

    case 5:
        $tipoFactura = "TICKET_FACTURA_B";  
        $nombreTipo= "IVA RESPONSABLE_INSCRIPTO
         A CONSUMIDOR_FINAL";
        break;

    case 6:
        $tipoFactura="TICKET_FACTURA_B";
        $nombreTipo="MONOTRIBUTO";
        break;

    default:
        $tipoFactura="TICKET_FACTURA_B";
        $nombreTipo="IVA RESPONSABLE_INSCRIPTO
    A CONSUMIDOR_FINAL";
        break;

}
$date=new DateTime(); //this returns the current date time
$date->setTimeZone(new DateTimeZone('America/Buenos_Aires'));
$FechaEmision = $date->format('Y-m-d H:i:s');
$Saludo="Gracias por su visita";
$Ticket = $tipoFactura.'.'.$nombreTipo.'.'.$FechaEmision.'.'.$Saludo;
$value= explode (".",$Ticket);
echo "<HTML> 
  <tr> 
  <pre>
   La Pasiva
   Gascon 27
   C.P(7600) - Mar del Plata
   $tipoFactura    
   $nombreTipo  
   P.V. NRO: 0001 
   $FechaEmision
   Mesa:02       Mozo:Carlos

   2,000 X 9,70
   ENSALADA GRANDE   19,40
    
   2,000 X 2,00
   REC. ENSALADA      4,00

   AGUA SER LIMA 1    3,00                                         

   <b>Total          26,90   </b>
   $Saludo 
     </pre> 
  </tr> 
<HTML> ";
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$_SESSION["newsession"]=$value;

?>