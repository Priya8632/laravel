<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$content = file_get_contents('jsondata.php');
$json =  json_decode($content,true);

class mobile_details extends Controller
{
    function mobile($phone)
    {
        function details($index)
        {
            function data($index,$key)
            {
             global $json;
            echo $json[$index][$key];
            }
?>
  <table>
      <tr>
            <th>mobile</th>
            <td><?php data($index,'mobile');?></td>
      </tr>
      <tr>
            <th>price</th>
            <td><?php data($index,'price');?></td>
      </tr>
  </table>      
<?php
        }
        switch($phone)   {
            case'vivo':
                details(0);
                break;
            case'oppo':
                details(1);
                break;
            default:
            echo "nice";
            break;
        }
    }
}

