<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Search Result BOLO</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
	<link rel="stylesheet" href="estilos.css" />
</head>
<body>

<?php
if($_POST['id']!="")
{
    $id = $_POST['id'];
}else
{
    $id = "";
}
if($_POST['name']!="")
{
    $name = $_POST['name'];
}else
{
    $name = "";
}
if($_POST['addr']!="")
{
    $addr = $_POST['addr'];
}else
{
    $addr = "";
}
if($_POST['adinfo']!="")
{
    $adinfo = $_POST['adinfo'];
}else
{
    $adinfo = "";
}
if($_POST['classif']!="")
{
    $classif = $_POST['classif'];
}else
{
    $classif = "";
}
if($_POST['dob']!="")
{
    $dob = $_POST['dob'];
}else
{
    $dob = "";
}
if($_POST['hcolor']!="")
{
    $hcolor = $_POST['hcolor'];
}else
{
    $hcolor = "";
}
if($_POST['height']!="")
{
    $height = $_POST['height'];
}else
{
    $height = "";
}
if($_POST['lic']!="")
{
    $lic = $_POST['lic'];
}else
{
    $lic = "";
}
if($_POST['race']!="")
{
    $race = $_POST['race'];
}else
{
    $race = "";
}
if($_POST['reli']!="")
{
    $reli = $_POST['reli'];
}else
{
    $reli = "";
}
if($_POST['cat']!="")
{
    $cal = $_POST['cat'];
}else
{
    $cal = "";
}
if($_POST['sex']!="")
{
    $sex = $_POST['sex'];
}else
{
    $sex = "";
}
if($_POST['summary']!="")
{
    $summary = $_POST['summary'];
}else
{
    $summary = "";
}
if($_POST['tattoo']!="")
{
    $tattoo = $_POST['tattoo'];
}else
{
    $tattoo = "";
}
if($_POST['val']!="")
{
    $val = $_POST['val'];
}else
{
    $val = "";
}
if($_POST['weight']!="")
{
    $weight = $_POST['weight'];
}else
{
    $weight = "";
}





//print_r($_POST);
echo("<br>");
    include_once'Model_Bolo.php';
    $bolo = new Model_Bolo();
    $resultProp1= $bolo->resultadoBusqueda($id,$name,$addr,$adinfo,$classif,$dob,$hcolor,$height,$lic,$race,$reli,$cal,$sex,$summary,$tattoo,$val,$weight);



    while ($row= mysqli_fetch_array($resultProp1))
    {
        $resultName = $row['myName'];
        $resultId = $row['bolo_id'];
        echo("<br>");

        echo ('<form name="formBolo" method="get" action="BoloSelected.php" target="_blank">');
        echo ("<input type= 'hidden' name = 'idBolo' value = \"$resultId\">");
        echo("
            <table align='center'>
                <tr  align='center'>
                    <td colspan='2' align='center'>
                        <br>
                        <h4>Resultado de la busqueda</h4>
                        <br>
                    </td>
                </tr>
                <tr align='center'>
                    <td align='left'>
                        <h6>$resultName</h6>
                    </td>
                    <td align='right'>
                        <input type='submit' value='Read more'>
                    </td>

                </tr>
            </table>
        ");

        echo "</form>";
        echo("<br>");
    }


?>

</body>
</html>