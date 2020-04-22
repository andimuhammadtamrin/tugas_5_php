<?php
echo "Table Logika ";
$logikaAnd1 = printf(false and false );
$logikaOr1 = printf(false or false);
$logikaAnd2 = printf(false and true);
$logikaOr2 = printf(false or true);
$logikaAnd3 = printf(true and true);
$logikaOr3 = printf(true or true);
$logikaAnd4 = printf(true and false);
$logikaOr4 = printf(true or false);

echo "<br>";
echo "<table border=1>
  <tr>
    <th>Input1</th>
    <th>Input2</th>
    <th>AND</th>
    <th>OR</th>
  </tr>
  <tr>
    <td>false</td>
    <td>false</td>
    <td>$logikaAnd1</td>
    <td>$logikaOr1</td>
  </tr>
  <tr>
    <td>false</td>
    <td>true</td>
    <td>$logikaAnd2</td>
    <td>$logikaOr2</td>
  </tr>
  <tr>
    <td>true</td>
    <td>true</td>
    <td>$logikaAnd3</td>
    <td>$logikaOr3</td>
  </tr>
  <tr>
    <td>true</td>
    <td>false</td>
    <td>$logikaAnd4</td>
    <td>$logikaOr4</td>
  </tr>
</table>
";
?>
