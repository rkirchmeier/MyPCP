<!-- PERSONALIEN -->

<?php

$dbname = "myPCP";
$user = "root";
$password = "root";
$dbhost = "CHBSLJME05TST";
// $dbhost = "127.0.0.1";

try {
  $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ));
}
catch(PDOException $e) {
  die("Connection to database failed");
}

if(count($_POST) > 0)
    if (!strlen($_POST['firstname']) > 0
    || !strlen($_POST['familyname']) > 0
    || !strlen($_POST['birthdate']) > 0
    || !strlen($_POST['street']) > 0
    || !strlen($_POST['plz']) > 0
    || !strlen($_POST['city']) > 0
    || !strlen($_POST['country']) > 0
    || !strlen($_POST['civilstatus']) > 0
    || !strlen($_POST['children']) > 0
    ) {
        echo "You did not complete the form";
        echo "Not saved";
    }
    else{
        $sql = "INSERT INTO Employee "
        ."(firstname, middlename, familyname, birthdate, street, plz, city, canton, country, cilistatus, workingstatus_partner, numberOfChildren, child1, birthyear1, child2, birthyear2, child3, birthyear3, child4, birthyear4) VALUES "
        ."(:firstname, :middlename, :familyname, :birthdate, :street, :plz, :city, :canton, :country, :cilistatus, :workingstatus_partner, :numberOfChildren, :child1, :birthyear1, :child2, :birthyear2, :child3, :birthyear3, :child4, :birthyear4)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':firstname', $_POST['firstname'], PDO::PARAM_STR);
        $query->bindParam(':middlename', $_POST['middlename'], PDO::PARAM_STR);
        $query->bindParam(':familyname', $_POST['familyname'], PDO::PARAM_STR);
        $query->bindParam(':birthdate', $_POST['birthdate'], PDO::PARAM_STR);
        $query->bindParam(':street', $_POST['street'], PDO::PARAM_STR);
        $query->bindParam(':plz', $_POST['plz'], PDO::PARAM_INT); 
        $query->bindParam(':city', $_POST['city'], PDO::PARAM_STR);
        $query->bindParam(':canton', $_POST['canton'], PDO::PARAM_STR);
        $query->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
        $query->bindParam(':civilstatus', $_POST['civilstatus'], PDO::PARAM_STR);
        $query->bindParam(':workingstatus_partner', $_POST['workingstatus_partner'], PDO::PARAM_STR);
        $query->bindParam(':numberOfChildren', $_POST['numberOfChildren'], PDO::INT;
        $query->bindParam(':child1', $_POST['child1'], PDO::PARAM_STR);
        $query->bindParam(':birthyear1', $_POST['birthyear1'], PDO::PARAM_STR);
        $query->bindParam(':child2', $_POST['child2'], PDO::PARAM_STR);
        $query->bindParam(':birthyear2', $_POST['birthyear2'], PDO::PARAM_STR);
        $query->bindParam(':child3', $_POST['child3'], PDO::PARAM_STR);
        $query->bindParam(':birthyear3', $_POST['birthyear3'], PDO::PARAM_STR);
        $query->bindParam(':child4', $_POST['child4'], PDO::PARAM_STR);
        $query->bindParam(':birthyear4', $_POST['birthyear4'], PDO::PARAM_STR);

        $query->execute();

        if ($pdo->lastInsertId()){
            echo "Successfully saved";
        }
    }

endif;

?>

<section id="myHome">
    <div class="container">

        <!-- Top Row Name -->
        <div class="row">
        <div class="col-6">
            <header class="intro-container">
            <h1>Vorname Name</h1>
            </header>
        </div>
        </div>

    <form action="POST">       
        <div class="row" id="mainPersonalInformation">
            <!-- Picture -->
            <div class="col-2">
                <img src="./src/img/Profil.jpg" alt="Persönliches Foto">
            </div>
        
            <div class="col-2">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="First Name"><br><br>
                <label for="middlename">Middle Name</label>
                <input type="text" name="middlename" id="middlename" placeholder="Middle Name"><br><br>
                <label for="familyname">Family Name</label>
                <input type="text" name="familyname" id="familyname" placeholder="Family Name"><br><br>
                <label for="birthdate">Birthdate</label>
                <input class= "date" type="date" name="birthdate" id="birthdate" placeholder="DD/MMT/YYYY"><br><br>
            </div>
            <div class="col-2">
                <label for="street">Street/Nr.</label>
                <input type="text" name="street" id="street" placeholder="Street Nr."><br><br>
                <label for="plz">PLZ</label>
                <input type="text" name="plz" id="plz" placeholder="PLZ">
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="City"><br><br>
                <label for="canton">Canton</label>
                <select class="listbox" id="canton" name="canton">
                <option value="Aargau">Aargau</option>
                <option value="Appenzell Ausserroden">Appenzell Ausserroden</option>
                <option value="Appenzell Innerroden">Appenzell Innerroden</option>
                <option value="Basel-Land">Basel-Land</option>
                <option value="Basel-Stadt">Basel-Stadt</option>
                <option value="Bern">Bern</option>
                <option value="Freiburg">Freiburg</option>
                <option value="Genf">Genf</option>
                <option value="Glarus">Glarus</option>
                <option value="Graubünden">Graubünden</option>
                <option value="Jura">Jura</option>
                <option value="Luzern">Luzern</option>
                <option value="Neuenburg">Neuenburg</option>
                <option value="Niedwalden">Niedwalden</option>
                <option value="Obwalden">Obwalden</option>
                <option value="Schaffhausen">Schaffhausen</option>
                <option value="Schwyz">Schwyz</option>
                <option value="Solothurn">Solothurn</option>
                <option value="St.Gallen">St.Gallen</option>
                <option value="Tessin">Tessin</option>
                <option value="Thurgau">Thurgau</option>
                <option value="Uri">Uri</option>
                <option value="Vaadt">Vaadt</option>
                <option value="Wallis">Wallis</option>
                <option value="Zürich">Zürich</option>
                <option value="Zug">Zug</option>
                <option value="Not Applicable">Not Applicable</option>
                </select>
                <label for="country">Country</label>
                <select class="listbox" id="country" name="country">
                <option value="Switzerland">Switzerland</option>
                <option value="Austria">Austria</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Italy">Italy</option>
                <option value="Not Applicable">Not Applicable</option>
                </select><br><br>
            </div>
        </div>

            <!-- Row for Role / Start Date and Working status of partner and children -->

        <div class="row">
            <div class="col-2" id="picturearea">
                <article class="roleAtAltersis">
                <label for="role">Current Role</label>
                <p></p>
                <br><br>
                <label for="startDate">Start date at ALTERSIS</label>
                <p></p>
                </article>
            </div>
            <div class="col-2" id="familyInformation">
                <label for="civilstatus">civil status</label>
                <select class="listbox" id="civilstatus" name="civilstatus" placeholder="Civil status">
                <option value="divorsed">divorsed</option>
                <option value="married">married</option>
                <option value="single">single</option>
                <option value="widowed">widowed</option>
                </select><br><br>
                <label for="workingstatusPartner">Partner working status</label>
                <select id="workingstatusPartner" class="listbox" name="workingstatus_partner">
                <option value="yes">yes</option>
                <option value="no">no</option>
                </select><br><br>
                <label for="children">Nr. of children</label>
                <select id="children" class="listbox" name="numberOfChildren">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
                <br><br>
                <button type="submit" class="btn btn-secondary">Save</button>
            </div>
            <div class="col-2" id="childInformation">
                <label for="child1">First child</label>
                <input id="child1" type="text" name="child1" placeholder="First Name"><br>
                <label for="birthyear1">birthyear</label>
                <input id="birthyear1" type="text" name="birthyear1" placeholder="year"><br><br>
                <label for="kind2">Second child</label>
                <input id="kind2" type="text" name="kind2" placeholder="First Name"><br>
                <label for="birthyear2">birthyear</label>
                <input id="birthyear2" type="text" name="birthyear2" placeholder="year"><br><br>
                <label for="child3">Third child</label>
                <input id="child3" type="text" name="child3" placeholder="First Name"><br>
                <label for="birthyear3">birthyear</label>
                <input id="birthyear3" type="text" name="birthyear3" placeholder="year"><br><br>
                <label for="kind4">Fourth child</label>
                <input id="kind4" type="text" name="kind4" placeholder="First Name">
                <label for="birthyear4">birthyear</label>
                <input id="birthyear4" type="text" name="birthyear4" placeholder="year">
            </div>
        </div>
    </form>
    </div>
</section>