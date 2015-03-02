<?php
/**
 * Template Name: Search Bolo 
 *
 * @package Inkness
 */
?>

<?php
//require_once "menu.php";
?>

<?php
    include_once'Model_Bolo.php';
    $bolo=new Model_Bolo();
    $resultIds = $bolo->loadIds();
    $resultAddr = $bolo->loadAddr();
    $resultAdt = $bolo->loadAdtnlinfo();
    $resultClass = $bolo->loadClass();
    $resultDob = $bolo->loadDob();
    $resultHair = $bolo->loadHairColor();
    $resultHeight = $bolo->loadHeight();
    $resultLicense = $bolo->loadLicense();
    $resultName = $bolo->loadName();
    $resultRace = $bolo->loadRace();
    $resultReli = $bolo->loadReli();
    $resulCat = $bolo->loadCat();
    $resultSex = $bolo->loadSex();
    $resultSumm = $bolo->loadSumm();
    $resultTattoo = $bolo->loadTattoo();
    $resultValidity = $bolo->loadValidity();
    $resultWeight = $bolo->loadWeight();
    $resultCat = $bolo->loadCat();
	$picture = $bolo->loadPicture();

?>

<form action= "<?php echo get_template_directory_uri();?>../ResultSearchBolo.php"  id="buscarForm" method="post">

    <table align="center">
        <tr align="center">
            <td colspan="2">
                <h4>Search Bolo</h4>
            </td>
        </tr>
        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Id</h6>
                <br>
                <select id="id" name="id" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultIds))  {
                        $prop1 = $row['bolo_id'];
                        echo "<option > $prop1 </option >";
                        echo($prop1);
                    }
                    ?>

                </select>
            </td>
            <td align="center">
                <br>
                <h6>Select Name</h6>
                <br>

                <select id="name" name="name" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultName))  {
                        $prop2 = $row['myName'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Address</h6>
                <br>

                <select id="addr" name="addr" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultAddr))  {
                        $prop2 = $row['address'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>

            </td>

            <td align="center">
                <br>
                <h6>Select Adtnlinfo</h6>
                <br>

                <select id="adinfo" name="adinfo" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultAdt))  {
                        $prop2 = $row['adtnlinfo'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Classification</h6>
                <br>

                <select id="classif" name="classif" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultClass))  {
                        $prop2 = $row['classification'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>

            <td align="center">
                <br>
                <h6>Select DOB</h6>
                <br>

                <select id="dob" name="dob" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultDob))  {
                        $prop2 = $row['dob'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Hair Color</h6>
                <br>

                <select id="hcolor" name="hcolor" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultHair))  {
                        $prop2 = $row['haircolor'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>

            </td>


            <td align="center">
                <br>
                <h6>Select Height</h6>
                <br>

                <select id="height" name="height" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultHeight))  {
                        $prop2 = $row['height'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select License</h6>
                <br>

                <select id="lic" name="lic" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultLicense))  {
                        $prop2 = $row['license'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>

            <td align="center">
                <br>
                <h6>Select Race</h6>
                <br>

                <select id="race" name="race" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultRace))  {
                        $prop2 = $row['race'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Reliability</h6>
                <br>

                <select id="reli" name="reli" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultReli))  {
                        $prop2 = $row['reliability'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>

            <td align="center">
                <br>
                <h6>Select Category</h6>
                <br>

                <select id="cat" name="cat" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultCat))  {
                        $prop2 = $row['selectcat'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Sex</h6>
                <br>

                <select id="sex" name="sex" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultSex))  {
                        $prop2 = $row['sex'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>

            <td align="center">
                <br>
                <h6>Select Summary</h6>
                <br>

                <select id="summary" name="summary" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultSumm))  {
                        $prop2 = $row['summary'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center">
                <br>
                <h6>Select Tattoo</h6>
                <br>

                <select id="tattoo" name="tattoo" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultTattoo))  {
                        $prop2 = $row['tattoos'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>

            <td align="center">
                <br>
                <h6>Select Validity</h6>
                <br>

                <select id="val" name="val" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultValidity))  {
                        $prop2 = $row['validity'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>

        <tr align="center">
            <td align="center" colspan="2">
                <br>
                <h6>Select Weight</h6>
                <br>

                <select id="weight" name="weight" >
                    <option >  </option >

                    <?php
                    while ($row= mysqli_fetch_array($resultWeight))  {
                        $prop2 = $row['weight'];
                        echo "<option > $prop2 </option >";

                    }
                    ?>

                </select>
            </td>
        </tr>


        <tr align="center">
            <td align="center" colspan="2">
                <input type="submit" value="Buscar">
            </td>
        </tr>
    </table>






</form>




