    <style type='text/css'>
      
      table{
        
        display: inline-table;
       
        margin: 10px;
      }
      th{
        
        background-color: OrangeRed;
        color: white;
        font-weight: bold;
      }
     
    </style>

<?PHP 

$numIni = $_POST['numTabuaInicial']; //Primeiro numero da tabuada
$numFinal = $_POST['numTabuaFinal']; // Ultimo numero da tabuada
$multiIni = $_POST['numMultiInicial']; // Primeiro numero do multiplicador
$multiFinal = $_POST['numMultiFinal']; //  ultimo numero do multiplicador

while ($numIni <= $numFinal){
  
  echo ( 
          "<table border='1'>
              <tr>
                <td colspan='2', border='0'>
                  Tabuado do " . $numIni ."
                </td>
              </tr>
              
              <tr>                
                <th>Fórmula</th>
                <th>Valor</th>
              </tr>"
        );
       
        $multiIni = $_POST['numMultiInicial']; 
        $multiFinal = $_POST['numMultiFinal'];
      While ($multiIni <= $multiFinal){
        
        echo (
          "<tr>
            <td> ". $numIni . " x " . $multiIni ."</td>
            <td> ". $numIni * $multiIni ."</td>
          </tr>"
          );
          $multiIni++;
        
      }
  echo "</table>";
  $numIni++;
}




?>
