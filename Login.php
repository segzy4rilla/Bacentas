<?php
require __DIR__ . '/vendor/autoload.php';
require('function.php');
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
echo "<meta name='description' content=''>";
echo "<meta name='author' content=''>";
echo "<title>Bacenta Data</title>";
echo "<link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>";
echo "<link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>";
echo "<link href='vendor/datatables/dataTables.bootstrap4.css'rel='stylesheet'>";
echo "<link href='css/sb-admin.css' rel='stylesheet'>";
echo "<link href='css/bootstrap-select.css'>";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>";
echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>";
echo "<script src='js/bootstrap-select.js'></script>";
echo "</head>";
echo "<body background='assets/img/backgrounds/Goodfriday.jpg' >";
echo "</p>";
echo "<h1 class='display-4' style='text-align: center; color: purple'> BACENTA DATABASE</h1>";

use App\DB\DBExtension;

$db = new DBExtension();
$username = "";
$password = "";
$totalattendancefrombacenta = 1;
$totalnumberofmembersfrombacenta = 527;
$churchattendance = 458;
$percentage = 100;

$dataarray = array();
$dataarray2 = array();

if (isset($_POST['form-username'])) {
    $username = $_POST['form-username'];

}
if (isset($_POST['form-password'])) {
    $password = $_POST['form-password'];
}

$width = "Clive Hart";

if (isset($_GET['width'])) {
    $width = $_GET['width'];
}

$value = $username;
$value2 = $password;

$h1 = "Firstname";
//$result = $db->getLoginbyUsername("TABLE 1", "username", "user_pass", $username, $password);

echo "<script>";
echo "function myFunction() {
    var x = document.getElementById('myselect').value;
    window.location.href = 'http://localhost/Bacenta/Login.php?width=' + x;
} 
</script>";


$bacenta = array(
    "Abraham ayache",
    //"Adwoa Sarpong ",
    "Alexander Okwera",
   // "Ayub Mensah",
    "Damilola Matiluko ",
   // "Dashen Nsowah",
    "David Solomon",
   // "Demi Etefia",
   // "Ejike Iroegbu",
    "Emmanuel Oyeniran ",
   // "Hassana ",
   // "James Kwabi",
    "Jeremy Osei-Bonsu",
    "Jesse Haynes ",
    "John Aiyenuro ",
    "John Mesagan",
    //"Joshua Daniels ",
    "Kehinde Oluwadare ",
    "Kieffer Balsomo",
   // "King Onajide ",
    //"Kingsley Ngonye",
   // "Maggie Wachira",
    "Mandy-Liza Lehnert",
    "Margaret wachira ",
    "Merene Twum-Barima ",
    "Monique Standley",
    //"Naomi Kikumba ",
    "Natalie Commey ",
    "Ochuko Toweh",
    "Ophelia Geeward-Pobee",
    "Philip Owusu ",
    "Prince Afriyie ",
    "Rachael Shodijo",
    "Rochelle Owusu-Antwi",
    "Samantha Gbenla",
    "Taiwo Akindele",
    "Tanya Stern",
    "Tatiana Rafaela Ture Lopes Co",
    "Tracy Aduboffour ",
    "Tracy Owusu Ansah",
    "Zhane Bennett-Adrien",
);

$Tbacenta = array(
"Adeiza Haruna",
"Aisha Esprit",
"Amanda Agwunobi",
//"Andrea Marie Dick",
"Angela Osei-Tutu",
"Anna Yasmin Opuoru",
"Annabel Amo",
//"Atle Ntshabele",
"Belinda Addo",
"Ben Blythsmith ",
//"Brian Ogwang ",
"Bunmi Enirayetan ",
"Chloe Kobi-Fordah",
"Christiana Idowu",
"Clive Hart",
//"Dwayne Barrett",
"Ebony Okuonghae ",
"Eden Lawer",
"Edward Adisi",
//"Elizabeth Taylor",
"Fiifi Acquaah-Harrison",
//"Franchesca Bannerman-Williams ",
//"Funmi Ajibodun ",
"Gabrielle Nkansa-Yeboah",
"Georgette Wallace ",
"Gilda Mvuemba",
//"Giuditta Yeboah",
"Godwin Adebimpe",
"Gloria Ugoh",
"Sophie Douglas",
//"Godwin Onyinah",
"Haggai Afriyie ",
"Ibiere banigo ",
//"James Buabin",
"Javina Gordon ",
"Jeanine Matondo ",
//"Joanne Isigizo",
//"Jodie Okai",
"Joseph Lavaly",
"King Appai",
"King Appiagyei ",
//"lisa chanelle quack ",
//"Lorraine Owusu",
"Louisa Boadi-Oppong",
//"Micah Allman-williamson",
"Michael Olatunji",
"Mide Awolesi",
"Noreen Adjei",
//"Oluwakemi Oloruntimilehin ",
//"Oyin",
"Pamela Nwogbe ",
//"Pamela Okanyere",
"Phyllis Frimpong ",
"Phyllis paca",
"Princess Bradley",
//"Princess Ogundu ",
"Princess Williams ",
//"Ridjauhn Ryan",
//"Samantha Badza ",
"Sarah Awe",
"Serwah Appiah ",
"Shanieka Gollab",
"Shannon Serwaa-Osei",
//"Sidney Biney",
//"Susan Musa",
//"Tabitha Cruz",
"Uche Eneh",
);


$space = " ";
$currentdate = "W1";
$seconddate = "W2";
$thirddate = "W3";
$forthdate = "W4";
$fifthdate = "W5";
$sixthdate = "W6";
$seventhdate = "W7";
$eightdate = "W8";
$ninthdate = "W9";
$tenthdate = "W10";



$size3 = sizeof($bacenta);
$size5 = sizeof($Tbacenta);




echo"<button onclick= window.open('Maps.html')  style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo8'>Bacentas Map View</button>";
echo"<button style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo1'>Show University Bacenta Leaders</button>";
echo"<button style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo2'>Show Town Bacenta Leaders</button>";
echo"<button style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo7'>Show University Bacenta Leaders(BMeeting)</button>";
echo"<button style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo6'>Show Town Bacenta Leaders(BMeeting)</button>";
echo"<button style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo3'>Show Individual Bacenta Leaders</button>";
echo"<button style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo4'>Show Sunday Bacenta Data</button>";
echo"<button onclick='clickedbutton()' style='background-color: purple' class='btn-primary'   data-toggle='collapse' data-target='#demo5'>Show Graphs</button>";




echo"<div id='demo1' class='collapse'>";
echo '<div class="card mb-3">';
echo '<div class="card-header" style="color: black; font-size: large">';
echo '<i class="fa fa-table" style="color: green;"></i> University Bacenta Leaders (How Many Members Attended Church) </div>';
echo '<div class="card-body">';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered myhidingtable" id="dataTable" width="50%" cellspacing="0">';


$db = new DBExtension();

$result3 = $db->getAllRecords("TABLE_7");
if (!empty($result3)) {
    $size2 = sizeof($result3);

    echo '<tr>';
    echo "<th>Bacenta Type </th>";
    echo "<th>Name of Bacenta Leader </th>";
    echo "<th colspan='8'>How many of your members attended church today </th>";
    echo "</tr>";

    echo '<tr>';
    echo '<td>' .$space. '</td>';
    echo '<td>' .$space. '</td>';
    echo '<td>' .$currentdate. '</td>';
    echo '<td>' .$seconddate. '</td>';
    echo '<td>' .$thirddate. '</td>';
    echo '<td>' .$forthdate. '</td>';
    echo '<td>' .$fifthdate. '</td>';
    echo '<td>' .$sixthdate. '</td>';
    echo '<td>' .$seventhdate. '</td>';
    echo '<td>' .$eightdate. '</td>';
    echo '<td>' .$ninthdate. '</td>';
    echo '<td>' .$tenthdate. '</td>';




    echo "</tr>";

    for ($vals = 0; $vals < $size3; $vals++) {
        echo '<tr>';
        echo '<td data-th="Car">' . $result3[$vals]['Bacenta_Type'] . '</td>';
        echo '<td data-th="Car">' . $bacenta[$vals]. '</td>';

        for ($val = 0; $val < $size2; $val++) {
            if (trim($result3[$val]['Name Of Bacenta Leader']) == trim($bacenta[$vals]) ) {
                if ($result3[$val]['How many of your members attended church today'] < 6) {
                    echo '<td style="color: red;">' . $result3[$val]['How many of your members attended church today'] . '</td>';
                } else {
                    echo '<td style="color: lawngreen;">' . $result3[$val]['How many of your members attended church today'] . '</td>';
                }
            }
        }
       /* for ($val = 1; $val < $size2; $val++) {
            if (trim($result1[$val]['Name Of Bacenta Leader']) == trim($result1[$vals]['Name Of Bacenta Leader'])) {

                if ($result1[$val]['How many people attended your Sunday morning meeting'] < 3) {
                    echo '<td style="color: red;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                } else {
                    echo '<td style="color: lawngreen;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                }
            }


        }*/
        echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';



echo"<div id='demo7' class='collapse'>";
echo '<div class="card mb-3">';
echo '<div class="card-header" style="color: black; font-size: large">';
echo '<i class="fa fa-table" style="color: green;"></i> University Bacenta Leaders (How Many Members Attended Sunday Meeting) </div>';
echo '<div class="card-body">';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered myhidingtable" id="dataTable" width="50%" cellspacing="0">';


$db = new DBExtension();

$result3 = $db->getAllRecords("TABLE_7");
if (!empty($result3)) {
    $size2 = sizeof($result3);

    echo '<tr>';
    echo "<th>Bacenta Type </th>";
    echo "<th>Name of Bacenta Leader </th>";
    echo "<th colspan='7'>How many of your members attended Sunday Meeting </th>";
    echo "</tr>";

    echo '<tr>';
    echo '<td>' .$space. '</td>';
    echo '<td>' .$space. '</td>';
    echo '<td>' .$currentdate. '</td>';
    echo '<td>' .$seconddate. '</td>';
    echo '<td>' .$thirddate. '</td>';
    echo '<td>' .$forthdate. '</td>';
    echo '<td>' .$fifthdate. '</td>';
    echo '<td>' .$sixthdate. '</td>';
    echo '<td>' .$seventhdate. '</td>';
    echo '<td>' .$eightdate. '</td>';
    echo '<td>' .$ninthdate. '</td>';
    echo '<td>' .$tenthdate. '</td>';




    echo "</tr>";

    for ($vals = 0; $vals < $size3; $vals++) {
        echo '<tr>';
        echo '<td data-th="Car">' . $result3[$vals]['Bacenta_Type'] . '</td>';
        echo '<td data-th="Car">' . $bacenta[$vals]. '</td>';

        for ($val = 1; $val < $size2; $val++) {
            if (trim($result3[$val]['Name Of Bacenta Leader']) == trim($bacenta[$vals]) ) {
                if ($result3[$val]['How many people attended your Sunday morning meeting'] < 3) {
                    echo '<td style="color: red;">' . $result3[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                } else {
                    echo '<td style="color: lawngreen;">' . $result3[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                }
            }
        }
        /* for ($val = 1; $val < $size2; $val++) {
             if (trim($result1[$val]['Name Of Bacenta Leader']) == trim($result1[$vals]['Name Of Bacenta Leader'])) {

                 if ($result1[$val]['How many people attended your Sunday morning meeting'] < 3) {
                     echo '<td style="color: red;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                 } else {
                     echo '<td style="color: lawngreen;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                 }
             }


         }*/
        echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


echo '</div>';




echo"<div id='demo2' class='collapse'>";
$space = " ";
$currentdate = "W1";
$seconddate = "W2";
$thirddate = "W3";
$forthdate = "W4";
$fifthdate = "W5";
$sixthdate = "W6";
$seventhdate = "W7";
$eightdate = "W8";
$ninthdate = "W9";
$tenthdate = "W10";

$size3 = sizeof($bacenta);
$size5 = sizeof($Tbacenta);

$newarray = implode(" ", $Tbacenta);


echo '<div class="card mb-3">';
echo '<div class="card-header" style="color: black; font-size: large">';
echo '<i class="fa fa-table" style="color: green;"></i> Town Bacenta Leaders (How Many Members Attended Church) </div>';
echo '<div class="card-body">';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered myhidingtable" id="dataTable" width="50%" cellspacing="0">';


$db = new DBExtension();

$result4 = $db->getAllRecords("TABLE_6");
if (!empty($result4)) {
    $size6 = sizeof($result4);

    echo '<tr>';
    echo "<th>Name of Bacenta Leader </th>";
    echo "<th colspan='7'>How many of your members attended church today </th>";
    echo "</tr>";

    echo '<tr>';
    echo '<td>' .$space. '</td>';
    echo '<td>' .$currentdate. '</td>';
    echo '<td>' .$seconddate. '</td>';
    echo '<td>' .$thirddate. '</td>';
    echo '<td>' .$forthdate. '</td>';
    echo '<td>' .$fifthdate. '</td>';
    echo '<td>' .$sixthdate. '</td>';
    echo '<td>' .$seventhdate. '</td>';
    echo '<td>' .$eightdate. '</td>';
    echo '<td>' .$ninthdate. '</td>';
    echo '<td>' .$tenthdate. '</td>';



    echo "</tr>";

    for ($vals = 0; $vals < $size5; $vals++) {
        echo '<tr>';
        echo '<td data-th="Car">' . $Tbacenta[$vals]. '</td>';

        for ($val = 0; $val < $size6; $val++) {
            if (trim($result4[$val]['Name Of Bacenta Leader']) == trim($Tbacenta[$vals]) ) {
                if ($result4[$val]['How many of your members attended church today'] < 6) {
                    echo '<td style="color: red;">' . $result4[$val]['How many of your members attended church today'] . '</td>';
                } else {
                    echo '<td style="color: lawngreen;">' . $result4[$val]['How many of your members attended church today'] . '</td>';
                }
            }
        }
        /* for ($val = 1; $val < $size2; $val++) {
             if (trim($result1[$val]['Name Of Bacenta Leader']) == trim($result1[$vals]['Name Of Bacenta Leader'])) {

                 if ($result1[$val]['How many people attended your Sunday morning meeting'] < 3) {
                     echo '<td style="color: red;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                 } else {
                     echo '<td style="color: lawngreen;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                 }
             }


         }*/
        echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';



echo "</div>";

echo"<div id='demo6' class='collapse'>";
echo '<div class="card mb-3">';
echo '<div class="card-header" style="color: black; font-size: large">';
echo '<i class="fa fa-table" style="color: green;"></i> Town Bacenta Leaders (How Many Members Attended Sunday Meeting) </div>';
echo '<div class="card-body">';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered myhidingtable" id="dataTable" width="50%" cellspacing="0">';


$db = new DBExtension();

$result4 = $db->getAllRecords("TABLE_6");
if (!empty($result4)) {
    $size6 = sizeof($result4);

    echo '<tr>';
    echo "<th>Name of Bacenta Leader </th>";
    echo "<th colspan='7'>How many of your members attended Sunday Meeting </th>";
    echo "</tr>";

    echo '<tr>';
    echo '<td>' .$space. '</td>';
    echo '<td>' .$currentdate. '</td>';
    echo '<td>' .$seconddate. '</td>';
    echo '<td>' .$thirddate. '</td>';
    echo '<td>' .$forthdate. '</td>';
    echo '<td>' .$fifthdate. '</td>';
    echo '<td>' .$sixthdate. '</td>';
    echo '<td>' .$seventhdate. '</td>';
    echo '<td>' .$eightdate. '</td>';
    echo '<td>' .$ninthdate. '</td>';
    echo '<td>' .$tenthdate. '</td>';




    echo "</tr>";

    for ($vals = 0; $vals < $size5; $vals++) {
        echo '<tr>';
        echo '<td data-th="Car">' . $Tbacenta[$vals]. '</td>';

        for ($val = 1; $val < $size6; $val++) {
            if (trim($result4[$val]['Name Of Bacenta Leader']) == trim($Tbacenta[$vals]) ) {
                if ($result4[$val]['How many people attended your Sunday morning meeting'] < 3) {
                    echo '<td style="color: red;">' . $result4[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                } else {
                    echo '<td style="color: lawngreen;">' . $result4[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                }
            }
        }
        /* for ($val = 1; $val < $size2; $val++) {
             if (trim($result1[$val]['Name Of Bacenta Leader']) == trim($result1[$vals]['Name Of Bacenta Leader'])) {

                 if ($result1[$val]['How many people attended your Sunday morning meeting'] < 3) {
                     echo '<td style="color: red;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                 } else {
                     echo '<td style="color: lawngreen;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
                 }
             }


         }*/
        echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';



echo "</div>";







echo"<div id='demo3' class='show'>";

echo "</p>";
echo "<select class='selectpicker'; id='myselect' data-style='btn-primary'>";
echo "<option>Abraham ayache</option>";
echo "<option>Adeiza Haruna</option>";
echo "<option>Adwoa Sarpong </option>";
echo "<option>Aisha Esprit</option>";
echo "<option>Alexander Okwera</option>";
echo "<option>Amanda Agwunobi</option>";
echo "<option>Andrea Marie Dick</option>";
echo "<option>Angela Osei-Tutu</option>";
echo "<option>Anna Yasmin Opuoru</option>";
echo "<option>Annabel Amo</option>";
echo "<option>Atle Ntshabele</option>";
echo "<option>Ayub Mensah</option>";
echo "<option>Belinda Addo</option>";
echo "<option>Ben Blythsmith </option>";
echo "<option>Brian Ogwang </option>";
echo "<option>Bunmi Enirayetan </option>";
echo "<option>Chloe Kobi-Fordah</option>";
echo "<option>Christiana Idowu</option>";
echo "<option>Clive Hart</option>";
echo "<option>Damilola Matiluko </option>";
echo "<option>Dashen Nsowah</option>";
echo "<option>David Solomon</option>";
echo "<option>Demi Etefia</option>";
echo "<option>Dwayne Barrett</option>";
echo "<option>Ebony Okuonghae </option>";
echo "<option>Eden Lawer</option>";
echo "<option>Edward Adisi</option>";
echo "<option>Ejike Iroegbu</option>";
echo "<option>Elizabeth Taylor</option>";
echo "<option>Emmanuel Oyeniran </option>";
echo "<option>Fiifi Acquaah-Harrison</option>";
echo "<option>Franchesca Bannerman-Williams </option>";
echo "<option>Funmi Ajibodun </option>";
echo "<option>Gabrielle Nkansa-Yeboah</option>";
echo "<option>Georgette Wallace </option>";
echo "<option>Gilda Mvuemba</option>";
echo "<option>Giuditta Yeboah</option>";
echo "<option>Godwin Adebimpe</option>";
echo "<option>Godwin Onyinah</option>";
echo "<option>Haggai Afriyie </option>";
echo "<option>Hassana </option>";
echo "<option>Ibiere banigo </option>";
echo "<option>James Buabin</option>";
echo "<option>James Kwabi</option>";
echo "<option>Javina Gordon </option>";
echo "<option>Jeanine Matondo </option>";
echo "<option>Jeremy Osei-Bonsu</option>";
echo "<option>Jesse Haynes </option>";
echo "<option>Joanne Isigizo</option>";
echo "<option>Jodie Okai</option>";
echo "<option>John Aiyenuro </option>";
echo "<option>John Mesagan</option>";
echo "<option>Joseph Lavaly</option>";
echo "<option>Joshua Daniels </option>";
echo "<option>Kehinde Oluwadare </option>";
echo "<option>Kieffer Balsomo</option>";
echo "<option>King Appai</option>";
echo "<option>King Appiagyei </option>";
echo "<option>King Onajide </option>";
echo "<option>Kingsley Ngonye</option>";
echo "<option>lisa chanelle quack </option>";
echo "<option>Lorraine Owusu</option>";
echo "<option>Louisa Boadi-Oppong</option>";
echo "<option>Maggie Wachira</option>";
echo "<option>Mandy-Liza Lehnert</option>";
echo "<option>Margaret wachira </option>";
echo "<option>Merene Twum-Barima </option>";
echo "<option>Micah Allman-williamson</option>";
echo "<option>Michael Olatunji</option>";
echo "<option>Mide Awolesi</option>";
echo "<option>Monique Standley</option>";
echo "<option>Naomi Kikumba </option>";
echo "<option>Natalie Commey </option>";
echo "<option>Noreen Adjei</option>";
echo "<option>Ochuko Toweh</option>";
echo "<option>Oluwakemi Oloruntimilehin </option>";
echo "<option>Ophelia Geeward-Pobee</option>";
echo "<option>Oyin</option>";
echo "<option>Pamela Nwogbe </option>";
echo "<option>Pamela Okanyere</option>";
echo "<option>Philip Owusu </option>";
echo "<option>Phyllis Frimpong </option>";
echo "<option>Phyllis paca</option>";
echo "<option>Prince Afriyie </option>";
echo "<option>Princess Bradley</option>";
echo "<option>Princess Ogundu </option>";
echo "<option>Princess Williams </option>";
echo "<option>Rachael Shodijo</option>";
echo "<option>Ridjauhn Ryan</option>";
echo "<option>Rochelle Owusu-Antwi</option>";
echo "<option>Samantha Badza </option>";
echo "<option>Samantha Gbenla</option>";
echo "<option>Sarah Awe</option>";
echo "<option>Serwah Appiah </option>";
echo "<option>Shanieka Gollab</option>";
echo "<option>Shannon Serwaa-Osei</option>";
echo "<option>Sidney Biney</option>";
echo "<option>Susan Musa</option>";
echo "<option>Tabitha Cruz</option>";
echo "<option>Taiwo Akindele</option>";
echo "<option>Tanya Stern</option>";
echo "<option>Tatiana Rafaela Ture Lopes Co</option>";
echo "<option>Tracy Aduboffour </option>";
echo "<option>Tracy Owusu Ansah</option>";
echo "<option>Uche Eneh</option>";
echo "<option>Zhane Bennett-Adrien</option>";
echo "</select>";
echo "</p>";

echo "<button type='button' class='btn btn-secondary' onclick='myFunction()'>Display</button>";

echo "<p id='demo'></p>";

echo '<div class="card mb-3">';
echo '<div class="card-header" style="color: black; font-size: large">';
echo '<i class="fa fa-table" style="color: green;"></i> ' . $width . ' </div>';
echo '<div class="card-body">';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered myhidingtable" id="dataTable" width="50%" cellspacing="0">';

$db = new DBExtension();
$result1 = $db->getAllRecords("TABLE_2");



if (!empty($result1)) {
    $size2 = sizeof($result1);


    echo '<tr>';
    echo "<th>Date </th>";
    echo "<th>Bacenta Type </th>";
    echo "<th>Did you go on outreach this week </th>";
    echo "<th>Did you go on visitation this week </th>";

    echo "<th>How many of your members attended church today </th>";
    echo "<th>Did you have any first timers today </th>";
    echo "<th>How many first timers did you have today </th>";
    echo "<th>Name of First Timers </th>";
    echo "<th>How many people attended your Sunday morning meeting </th>";
    echo "<th>How many people confirmed they would attend church today </th>";
    echo "</tr>";



    for ($val = 1; $val < $size2; $val++) {
        if (trim($result1[$val]['Name Of Bacenta Leader']) == $width) {
            echo '<tr>';
            echo '<td>' . $result1[$val]['Date'] . '</td>';
            array_push($dataarray2,$result1[$val]['Date']);

            echo '<td data-th="Car">' . $result1[$val]['Bacenta_Type'] . '</td>';
            if ($result1[$val]['Did you go on outreach this week'] == "No") {
                echo '<td style="color: red;">' . $result1[$val]['Did you go on outreach this week'] . '</td>';
            } else {
                echo '<td style="color: lawngreen;">' . $result1[$val]['Did you go on outreach this week'] . '</td>';
            }
            if ($result1[$val]['Did you go on visitation this week'] == "No") {
                echo '<td style="color: red;">' . $result1[$val]['Did you go on visitation this week'] . '</td>';
            } else {
                echo '<td style="color: lawngreen;">' . $result1[$val]['Did you go on visitation this week'] . '</td>';
            }

            if ($result1[$val]['How many of your members attended church today'] < 6) {
                echo '<td style="color: red;">' . $result1[$val]['How many of your members attended church today'] . '</td>';
                 array_push($dataarray,$result1[$val]['How many of your members attended church today']);

            } else {
                echo '<td style="color: lawngreen;">' . $result1[$val]['How many of your members attended church today'] . '</td>';
                array_push($dataarray,$result1[$val]['How many of your members attended church today']);

            }
            echo '<td>' . $result1[$val]['Did you have any first timers today'] . '</td>';
            echo '<td>' . $result1[$val]['How many first timers did you have today'] . '</td>';
            echo '<td>' . $result1[$val]['Name of First Timers'] . '</td>';


            if ($result1[$val]['How many people attended your Sunday morning meeting'] < 3) {
                echo '<td style="color: red;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
            } else {
                echo '<td style="color: lawngreen;">' . $result1[$val]['How many people attended your Sunday morning meeting'] . '</td>';
            }
            echo '<td>' . $result1[$val]['How many people confirmed they would attend church today'] . '</td>';

            echo '</tr>';

        }
    }

    $stringg = implode(" ",$dataarray);
    $stringg2 = implode(" ", $dataarray2);


    echo"<input type='hidden' id='myPhpValue' value='$stringg'/>";
    echo"<input type='hidden' id='myPhpValue2' value='$stringg2'/>";


}

echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


echo'</div>';


echo"<div id='demo4' class='collapse'>";
$result2 = $db->getAllRecords("TABLE_1");
if (!empty($result2)) {

    $size = sizeof($result2);

    //var_dump($result2);

    echo " <h4 style='color: white'>Sunday Bacenta Data</h4>";




    echo '<div class="card mb-3">';
    echo '<div class="card-header">';
    echo '<i class="fa fa-table"></i> Sunday Bacenta Data</div>';
    echo '<div class="card-body">';
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">';


    $SESSION['datasetyh'] = $result2;

    echo '<tr>';
    echo "<th>Bacenta Type </th>";
    echo "<th>Did you go on outreach this week </th>";
    echo "<th>Did you go on visitation this week </th>";

    echo "<th>How many of your members attended church today </th>";
    echo "<th>Did you have any first timers today </th>";
    echo "<th>How many first timers did you have today </th>";
    echo "<th>Name of First Timers </th>";
    echo "<th>Name of Bacenta Leader </th>";
    echo "<th>How many people attended your Sunday morning meeting </th>";
    echo "<th>How many people confirmed they would attend church today </th>";
    echo "</tr>";
    for ($val = 1; $val < 70; $val++) {
        echo '<tr>';
        echo '<td data-th="Car">' . $result2[$val]['Bacenta_Type'] . '</td>';
        if ($result2[$val]['Did you go on outreach this week'] == "No") {
            echo '<td style="color: red;">' . $result2[$val]['Did you go on outreach this week'] . '</td>';
        } else {
            echo '<td style="color: lawngreen;">' . $result2[$val]['Did you go on outreach this week'] . '</td>';
        }
        if ($result2[$val]['Did you go on visitation this week'] == "No") {
            echo '<td style="color: red;">' . $result2[$val]['Did you go on visitation this week'] . '</td>';
        } else {
            echo '<td style="color: lawngreen;">' . $result2[$val]['Did you go on visitation this week'] . '</td>';
        }

        if ($result2[$val]['How many of your members attended church today'] < 6) {
            echo '<td style="color: red;">' . $result2[$val]['How many of your members attended church today'] . '</td>';
        } else {
            echo '<td style="color: lawngreen;">' . $result2[$val]['How many of your members attended church today'] . '</td>';
        }
        echo '<td>' . $result2[$val]['Did you have any first timers today'] . '</td>';
        echo '<td>' . $result2[$val]['How many first timers did you have today'] . '</td>';
        echo '<td>' . $result2[$val]['Name of First Timers'] . '</td>';
        echo '<td>' . $result2[$val]['Name Of Bacenta Leader'] . '</td>';

        if ($result2[$val]['How many people attended your Sunday morning meeting'] < 3) {
            echo '<td style="color: red;">' . $result2[$val]['How many people attended your Sunday morning meeting'] . '</td>';
        } else {
            echo '<td style="color: lawngreen;">' . $result2[$val]['How many people attended your Sunday morning meeting'] . '</td>';
        }
        echo '<td>' . $result2[$val]['How many people confirmed they would attend church today'] . '</td>';

        echo '</tr>';

        $totalattendancefrombacenta = $totalattendancefrombacenta + $result2[$val]['How many of your members attended church today'];
    }
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo " <h4 style='color: white'> Church Retention: </h4>";
    echo "<a style='color:greenyellow; padding-bottom: 60px' >" . 'Total Church Attendance : ' . $churchattendance . "</a>";
    echo "</br>";
    echo "<a style='color:greenyellow; padding-bottom: 60px' >" . 'Total Bacenta Attendance : ' . $totalattendancefrombacenta . "</a>";
    echo "</br>";
    echo "<a style='color:greenyellow; padding-bottom: 60px' >" . 'Percentage Retention : ' . round($totalattendancefrombacenta / $churchattendance * 100, 2) . '%' . "</a>";
    echo "</div></div>";
    echo " <h4 style='color: white'> Bacenta Retention: </h4>";
    echo "<a style='color:greenyellow; padding-bottom: 60px' >" . 'Total numbers of members in bacenta: ' . $totalnumberofmembersfrombacenta . "</a>";
    echo "</br>";
    echo "<a style='color:greenyellow; padding-bottom: 60px' >" . 'Total Bacenta Attendance : ' . $totalattendancefrombacenta . "</a>";
    echo "</br>";
    echo "<a style='color:greenyellow; padding-bottom: 60px' >" . 'Percentage Retention : ' . round($totalattendancefrombacenta / $totalnumberofmembersfrombacenta * 100, 2) . '%' . "</a>";

    echo '</div>';
    /*
         echo"<div class='card mb-3'>";
         echo "<div class='card-header'>";
         echo "<i class='fa fa-area-chart'></i> Area Chart Example</div>";
         echo "<div class='card-body'>";
         echo "<canvas id='myAreaChart' width='50%' height='40'></canvas>";
         echo "</div>";
         echo "<div class='card-footer small text-muted'>Updated yesterday at 11:59 PM</div>";
         echo "</div>";
         echo "<div class='row'>";
         echo "<div class='col-lg-8'>";*/


    echo"<div id='demo5' class='collapse'>";




    echo "<div id='chartContainer' style='height: 300px; width: 100%; overflow: auto;'></div>";
    echo "<script type='text/javascript' src='https://canvasjs.com/assets/script/canvasjs.min.js'></script>";


    echo "<div id='columnContainer' style='height: 300px; width: 100%; overflow: auto;'></div>";
    echo "<script type='text/javascript' src='https://canvasjs.com/assets/script/canvasjs.min.js'></script>";

    echo "<div id='pieContainer' style='height: 300px; width: 100%; overflow: auto;'></div>";
    echo "<script type='text/javascript' src='https://canvasjs.com/assets/script/canvasjs.min.js'></script>";

    echo "<div id='spineContainer' style='height: 300px; width: 100%; overflow: auto;'></div>";
    echo "<script type='text/javascript' src='https://canvasjs.com/assets/script/canvasjs.min.js'></script>";
    echo "</div>";
    /* echo " <h4 style='color: white'> Select Bacenta Leader </h4>";

     echo "<button type='button' class='btn btn-primary' onclick='myFunction()'>Display</button>";
     echo "</p>";
     echo"<div class='dropdown'>";
     echo" <button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' earia-expanded='true'>";
     echo "Bacenta Leaders";
     echo"</button>";
     echo"<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
     echo"<a class='dropdown-item'>Princess Ogundu</a>";
     echo"<a class='dropdown-item' href='#'>Ben Blythsmith</a>";
     echo"<a class='dropdown-item' href='#'>Edward Adisi</a>";
     echo"<a class='dropdown-item' href='#'>Adeiza Haruna</a>";
     echo"<a class='dropdown-item' href='#'>Kemi Oluruntimilehin</a>";
     echo"<a class='dropdown-item' href='#'>Bunmi Enirayaten</a>";
     echo"<a class='dropdown-item' href='#'>Haggai Afriyie</a>";
     echo"<a class='dropdown-item' href='#'>Jeffery Osei-Bonsu</a>";
     echo"<a class='dropdown-item' href='#'>Fiifi Harrison</a>";
     echo"<a class='dropdown-item' href='#'>Annabel Amo</a>";
     echo"<a class='dropdown-item' href='#'>Sarah Awe</a>";
     echo"<a class='dropdown-item' href='#'>Mide Awolesi</a>";
     echo"<a class='dropdown-item' href='#'>Aisha Espirit</a>";
     echo"<a class='dropdown-item' href='#'>Jodie Okai</a>";
     echo"<a class='dropdown-item' href='#'>Noreen Adjei</a>";
     echo"<a class='dropdown-item' href='#'>Christiana Idowu</a>";
     echo"<a class='dropdown-item' href='#'>Stacy Charway</a>";
     echo"<a class='dropdown-item' href='#'>Eden Lawer</a>";
     echo"<a class='dropdown-item' href='#'>Belinda Addo</a>";
     echo"<a class='dropdown-item' href='#'>Louisa Boadi</a>";
     echo"<a class='dropdown-item' href='#'>Serwah Appiah</a>";
     echo"<a class='dropdown-item' href='#'>Anna Opoku</a>";
     echo"<a class='dropdown-item' href='#'>Gabrielle Nkansa-Yeboah</a>";
     echo"<a class='dropdown-item' href='#'>Victor Kamara </a>";
     echo"<a class='dropdown-item' href='#'>King Appiagye</a>";
     echo"<a class='dropdown-item' href='#'>Ibiere Banigo</a>";
     echo"<a class='dropdown-item' href='#'>Lorraine Owusu</a>";
     echo"<a class='dropdown-item' href='#'>Sarai Sten</a>";
     echo"<a class='dropdown-item' href='#'>Walthamstow </a>";
     echo"<a class='dropdown-item' href='#'>Suzy</a>";
     echo"<a class='dropdown-item' href='#'>Samantha Badza </a>";
     echo"<a class='dropdown-item' href='#'>Ridjuahn </a>";
     echo"<a class='dropdown-item' href='#'>Elizabeth </a>";
     echo"<a class='dropdown-item' href='#'>Jeanine Matondo</a>";
     echo"<a class='dropdown-item' href='#'>Sydney </a>";
     echo"<a class='dropdown-item' href='#'>Brian Ogwang </a>";
     echo"<a class='dropdown-item' href='#'>Micah</a>";
     echo"<a class='dropdown-item' href='#'>Dwayne </a>";
     echo"<a class='dropdown-item' href='#'>Francesca </a>";
     echo"<a class='dropdown-item' href='#'>Tabitha </a>";
     echo"<a class='dropdown-item' href='#'>Atle </a>";
     echo"<a class='dropdown-item' href='#'>Funmi </a>";
     echo"<a class='dropdown-item' href='#'>Toyosi</a>";
     echo"<a class='dropdown-item' href='#'>Georgette</a>";
     echo"<a class='dropdown-item' href='#'>Giuditta</a>";
     echo"<a class='dropdown-item' href='#'>Shannon</a>";
     echo"<a class='dropdown-item' href='#'>Amanda</a>";
     echo"<a class='dropdown-item' href='#'>Phyllis Frimpong</a>";
     echo"<a class='dropdown-item' href='#'>Micheal </a>";
     echo"<a class='dropdown-item' href='#'>Angela</a>";
     echo"<a class='dropdown-item' href='#'>Adebimpe</a>";
     echo"<a class='dropdown-item' href='#'>Oyin</a>";
     echo"<a class='dropdown-item' href='#'>Lisa</a>";
     echo"<a class='dropdown-item' href='#'>Pamela</a>";
     echo"<a class='dropdown-item' href='#'>Javina</a>";
     echo"<a class='dropdown-item' href='#'>Pamela</a>";
     echo"<a class='dropdown-item' href='#'>Shanieka</a>";
     echo"<a class='dropdown-item' href='#'>Godwin Onyinah </a>";
     echo"<a class='dropdown-item' href='#'>Clive Hart</a>";
     echo"<a class='dropdown-item' href='#'>Uche Eneh</a>";
     echo"<a class='dropdown-item' href='#'>Joseph Lavlay </a>";
     echo"<a class='dropdown-item' href='#'>Princess Williams</a>";
     echo"<a class='dropdown-item' href='#'>Ebony Okuonghae</a>";
     echo"<a class='dropdown-item' href='#'>Phyllis Frimpong</a>";
     echo"<a class='dropdown-item' href='#'>Andrea</a>";
     echo"<a class='dropdown-item' href='#'>James Bubain</a>";
     echo"<a class='dropdown-item' href='#'>Dami Matiloku</a>";
     echo"<a class='dropdown-item' href='#'>Natalie Commey</a>";
     echo"<a class='dropdown-item' href='#'>Zhane Bennett</a>";
     echo"<a class='dropdown-item' href='#'>Rhoda Ola-Said </a>";
     echo"<a class='dropdown-item' href='#'>Jesse Haynes</a>";
     echo"<a class='dropdown-item' href='#'>Tanya Stern</a>";
     echo"<a class='dropdown-item' href='#'>Tracey Owusu</a>";
     echo"<a class='dropdown-item' href='#'>Tracy Adubuffour</a>";
     echo"<a class='dropdown-item' href='#'>Prince Afriyie </a>";
     echo"<a class='dropdown-item' href='#'>Joshua Daniels</a>";
     echo"<a class='dropdown-item' href='#'>Jeremy Osei-Bonsu</a>";
     echo"<a class='dropdown-item' href='#'>Samantha Gblena</a>";
     echo"<a class='dropdown-item' href='#'>Ejike Iroegbu</a>";
     echo"<a class='dropdown-item' href='#'>Natalie Sedjroson</a>";
     echo"<a class='dropdown-item' href='#'>Alex Okwera</a>";
     echo"<a class='dropdown-item' href='#'>David Solomon </a>";
     echo"<a class='dropdown-item' href='#'>Tatiana Lopes Co</a>";
     echo"<a class='dropdown-item' href='#'>Taiwo Akindele</a>";
     echo"<a class='dropdown-item' href='#'>Adwoa Sarpong</a>";
     echo"<a class='dropdown-item' href='#'>Merene Twum - Barima </a>";
     echo"<a class='dropdown-item' href='#'>Philip Owusu</a>";
     echo"<a class='dropdown-item' href='#'>Dashen Nsowah</a>";
     echo"<a class='dropdown-item' href='#'>Kieffer Balsomo</a>";
     echo"<a class='dropdown-item' href='#'>Kingsley Ngonye </a>";
     echo"<a class='dropdown-item' href='#'>Demi Etefia</a>";
     echo"<a class='dropdown-item' href='#'>King Onajide </a>";
     echo"<a class='dropdown-item' href='#'>Hassana   </a>";
     echo"<a class='dropdown-item' href='#'>Monique Stanley </a>";
     echo"<a class='dropdown-item' href='#'>Maggie Wachira </a>";
     echo"<a class='dropdown-item' href='#'>Naomi Kikumba </a>";
     echo"<a class='dropdown-item' href='#'>Chela Auguste</a>";
     echo"<a class='dropdown-item' href='#'>Ochuko Toweh </a>";
     echo"<a class='dropdown-item' href='#'>Abraham Ayache </a>";
     echo"<a class='dropdown-item' href='#'>Denzil Sam-Orhin</a>";
     echo"<a class='dropdown-item' href='#'>Kehinde Oluwadare</a>";
     echo"<a class='dropdown-item' href='#'>Opheila Geeward-Pober</a>";
     echo"<a class='dropdown-item' href='#'>James Kwabi </a>";
     echo"<a class='dropdown-item' href='#'>John Aiyenuro </a>";
     echo"<a class='dropdown-item' href='#'>Ayub Mensah</a>";
     echo"<a class='dropdown-item' href='#'>Mandy-Liza Lehnert </a>";
     echo"<a class='dropdown-item' href='#'>Emmanuel Oyeniran </a>";
     echo"<a class='dropdown-item' href='#'>John Mesagan</a>";
     echo"<a class='dropdown-item' href='#'>Rochelle Owusu Antwi</a>";
     echo"<a class='dropdown-item' href='#'>Rachael Shodijo </a>";
     echo"<a class='dropdown-item' href='#'>Thelma Gbeneyei</a>";
     echo"<a class='dropdown-item' href='#'>Chloe Kobi</a>";
     echo"</div>";*/



    echo "<script src='vendor/jquery/jquery.min.js'></script>";
    echo "<script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>";
    echo "<script src='vendor/jquery-easing/jquery.easing.min.js'></script>";
    echo "<script src='vendor/chart.js/Chart.min.js'></script>";
    echo " <script src='vendor/datatables/jquery.dataTables.js'></script>";
    echo "<script src='vendor/datatables/dataTables.bootstrap4.js'></script>";
    echo "<script src='js/sb-admin.min.js'></script>";
    echo "<script src='js/sb-admin-datatables.min.js'></script>";
    echo "<script src='js/sb-admin-charts.min.js'></script>";
    echo "<script src='js/myjsfile.js'></script>";

    exit;

    echo "</body>";

    /*else{
        echo "invalid username and password";
        header('Location: Login.html');
        $_SESSION['errMsg'] = "Invalid username or password";
        exit;
    }*/

}


?>