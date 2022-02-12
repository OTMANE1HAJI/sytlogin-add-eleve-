<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
              background-color:rgb(190,250,255) ;
            }
            table {
                    font-family: arial, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

            td, th {
                    border: 5px solid #dddddd;
                    text-align: left;
                    padding: 9px;
                    }
            h2{
              text-align: center;

            }
            
           
</style>
</head>
<body>

<h2>Relever de Notes</h2>
<div>
    <h5>CNE : <?=$_POST['cne']?></h5>
    <h5>Nom : nom</h5>
    <h5>Prénom : prenom</h5>
</div>    
<table border='1'>
  <thead  style="color:red">
 <tr>
    <th>Module</th>
    <th>Matière</th>
    <th>Note</th>
  </tr>
  </thead>
  <tr>
    <td>GINF1</td>
    <td>Matière1</td>
    <td>14</td>
  </tr>
  <tr>
    <td>GINF11</td>
    <td>Matière2</td>
    <td>13</td>
  </tr>
  <tr>
    <td>GINF1</td>
    <td>Matière3</td>
    <td>12</td>
  </tr>
  <tr>
    <td>GINF1</td>
    <td>Matière4</td>
    <td>11</td>
  </tr>

</table>

</body>
</html>