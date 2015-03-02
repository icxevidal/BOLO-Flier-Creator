<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Search BOLO</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
	<link rel="stylesheet" href="estilos.css" />
</head>
<body>

<?php
    $prop1 = $_GET['idBolo'];

    include_once'Model_Bolo.php';
    $bolo = new Model_Bolo();
    $resultProp1= $bolo->infoBolo($prop1);
	$picture = $bolo->loadPicture();


    while ($row= mysqli_fetch_array($resultProp1))
    {

        $resultId =  $row['bolo_id'];
        $resultAddr = $row['address'];
        $resultAdt = $row['adtnlinfo'];
        $resultClass = $row['classification'];
        $resultDob = $row['dob'];
        $resultHair = $row['haircolor'];
        $resultHeight = $row['height'];
        $resultHeight = $row['height'];
        $pathImage = $row['image'];
        $resultName = $row['myName'];
        $resultRace = $row['race'];
        $resultReli = $row['reliability'];
        $resultCat = $row['selectcat'];
        $resultSex = $row['sex'];
        $resultSumm = $row['summary'];
        $resultTattoo = $row['tattoos'];
        $resultValidity = $row['validity'];
        $resultWeight = $row['weight'];
        $resultLicense = $row['license'];
		


        echo("
        <table align='center'>
            <tr align='center'>
                <td colspan='2'>
                    <h4>Bolo Info</h4>
                </td>
            </tr>
            <tr align='left'>
                <td align='left'>
                    <h6>Id:</h6>
                </td>
                <td>
                    $resultId
                </td>
            </tr>
            <tr align='left'>
                <td align='left'>
                    <h6>Picture:</h6>
                </td>
                <td align = 'center' >
                    
					"Foto"
			    </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Name:</h6>
                </td>
                <td align='left'>
                    $resultName
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Sex:</h6>
                </td>
                <td align='left'>
                    $resultSex
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Address: </h6>
                </td>
                <td align='left'>
                    $resultAddr
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Adtl Info:</h6>
                </td>
                <td align='left'>
                    $resultAdt
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Classification: </h6>
                </td>
                <td align='left'>
                    $resultClass
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>DOB: </h6>
                </td>
                <td align='left'>
                    $resultDob
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Hair Color;</h6>
                </td>
                <td align='left'>
                    $resultHair
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Height:</h6>
                </td>
                <td align='left'>
                    $resultHeight
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>License:</h6>
                </td>
                <td align='left'>
                    $resultLicense
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Race:</h6>
                </td>
                <td align='left'>
                    $resultRace
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Reli:<h6>
                </td>
                <td align='left'>
                    $resultReli
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Category:</h6>
                </td>
                <td align='left'>
                    $resultCat
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Summary:</h6>
                </td>
                <td align='left'>
                    $resultSumm
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Tattoos:</h6>
                </td>
                <td align='left'>
                    $resultTattoo
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Validity:</h6>
                </td>
                <td align='left'>
                    $resultValidity
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Weight:</h6>
                </td>
                <td align='left'>
                    $resultWeight
                </td>
            </tr>
            <tr>
                <td align='left'>
                    <h6>Category:</h6>
                </td>
                <td align='left'>
                    $resultCat
                </td>
            </tr>

        </table>

        ");

    }

	
?>
<a href="searchBolo.php" target="_self"><h6> Start Search</h6></a>
</body>
</html>