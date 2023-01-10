<!-- PERSONALIEN -->
<!-- Connect to DB -->
<?php 

require("./shared/inc/db.inc.php"); 

//query data from database

$Employee_ID = $_SESSION['Employee_ID'];

$stmt = $pdo->prepare ("SELECT * FROM employee WHERE Employee_ID = $Employee_ID");
$stmt -> execute();
$data = $stmt->fetchAll();

foreach($data as $employee) {

}
  
$stmt = $pdo->prepare ("SELECT * FROM `images` WHERE Employee_ID = $Employee_ID");
$stmt -> execute();
$data = $stmt->fetchAll();

foreach($data as $images) {


} 

?>

<?php 


        if (empty($images['image_path'])) {

        $filepath = "./src/img/EmptyProfile.png";

        } else {


        $image = ($images['image_path']); 

        $image = explode('/', $image);
        unset($image[0]);
        $image = implode('/', $image);

        $folder = "./";
        $filepath = $folder.$image;
        
        }

?>
        

<section id="myHome">
    <div class="container">

        <!-- Top Row Name -->
        <div class="row">
            <div class="col-6">
                <header class="intro-container">
                <h1><?php echo ($employee['FirstName']); ?> <?php echo ($employee['FamilyName']); ?></h1>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <form id="picture" action="./parts/upload.php" method="POST" enctype="multipart/form-data">
                <div id="picturearea">
                    <img src="<?php echo $filepath; ?>" alt="Your Picture"> <br>
                    <input type="file" name="image"><br><br>
                    <input type="submit" name="upload" value="upload">
                </div>
                </form>
            </div>
            <div class="col-4" id="rolearea">
                <article class="roleAtAltersis">
                <label for="Role">Role</label>
                <p><?php echo ($employee['Role']); ?></p>
                <label for="StartDate">Start Date</label>
                <p><?php echo ($employee['StartDate']); ?></p>
                <label for="Squadlead">Squadlead</label>
                <p><?php echo ($employee['Squadlead']); ?></p>
                <label for="Coach">Coach</label>
                <p><?php echo ($employee['Coach']); ?></p>
                </article>
            </div>
        </div>

            <!-- Picture -->

        <div class="row" id="mainPersonalInformation">

        <div class="row">
            <div class="col-6" id="title">
                <h3>Personal Informationen</h3>
            </div>
        </div>

        <!-- Personal Information -->
        <div class="row"></div>
            <form action="./parts/update.php" method="POST" enctype="multipart/form-data">
                <div class="col-2">
                    <label for="FirstName">First Name</label>
                    <input type="text" name="FirstName" id="FirstName" placeholder="First Name" value=<?php echo ($employee['FirstName']); ?>><br>
                    <label for="MiddleName">Middle Name</label>
                    <input type="text" name="MiddleName" id="MiddleName" placeholder="Middle Name" value=<?php echo ($employee['MiddleName']); ?>><br>
                    <label for="FamilyName">Family Name</label>
                    <input type="text" name="FamilyName" id="FamilyName" placeholder="Family Name" value=<?php echo ($employee['FamilyName']); ?>><br>
                    <label for="Birthdate">Birthdate</label>
                    <input class= "date" type="date" name="Birthdate" id="Birthdate" placeholder="DD/MMT/YYYY" value= <?php echo ($employee['Birthdate']); ?>><br>
                    <label for="PhoneNumber">Mobile</label>
                    <input class= "text" type="text" name="PhoneNumber" id="PhoneNumber" placeholder="+41 xx xxx xxx" value= <?php echo ($employee['PhoneNumber']); ?>><br>
                    <label for="Email">Privat Email</label>
                    <input class= "email" type="email" name="PhoneNumber" id="Email" placeholder="email@email.com" value= <?php echo ($employee['Email']); ?>><br>
                    <input type="submit" name="submit" value="Update">
                </div>
                <div class="col-2">
                    <label for="Street">Street</label>
                    <input type="text" name="Street" id="Street" placeholder="Street Nr." value=<?php echo ($employee['Street']); ?>><br>
                    <label for="PLZ">PLZ</label>
                    <input type="text" name="PLZ" id="PLZ" placeholder="PLZ" value=<?php echo ($employee['PLZ']); ?>><br>
                    <label for="Place">City</label>
                    <input type="text" name="Place" id="Place" placeholder="Place" value=<?php echo ($employee['Place']); ?>><br>
                    
                    <?php $temp_val = ($employee['Canton']); ?>

                        <label for="Canton">Canton</label>
                        <select class='listbox' id='Canton' name='Canton'>
                            <option value='Aargau' <?php if($temp_val == 'Aargau') echo('selected')?>>Aargau</option>
                            <option value='Appenzell Ausserroden' <?php if($temp_val == 'Appenzell Ausserroden') echo('selected')?> >Appenzell Ausserroden</option>
                            <option value='Appenzell Innerroden' <?php if($temp_val == 'Appenzell Innerroden') echo('selected')?> >Appenzell Innerroden</option>
                            <option value='Basel-Land' <?php if($temp_val == 'Basel-Land') echo('selected')?> >Basel-Land</option>
                            <option value='Basel-Stadt' <?php if($temp_val == 'Basel-Stadt') echo('selected')?> >Basel-Stadt</option>
                            <option value='Bern' <?php if($temp_val == 'Bern') echo('selected')?> >Bern</option>
                            <option value='Freiburg' <?php if($temp_val == 'Freiburg') echo('selected')?> >Freiburg</option>
                            <option value='Genf' <?php if($temp_val == 'Genf') echo('selected')?> >Genf</option>
                            <option value='Glarus' <?php if($temp_val == 'Glarus') echo('selected')?> >Glarus</option>
                            <option value='Graubünden' <?php if($temp_val == 'Graubünden') echo('selected')?> >Graubünden</option>
                            <option value='Jura' <?php if($temp_val == 'Jura') echo('selected')?> >Jura</option>
                            <option value='Luzern' <?php if($temp_val == 'Luzern') echo('selected')?> >Luzern</option>
                            <option value='Neuenburg' <?php if($temp_val == 'Neuenburg') echo('selected')?> >Neuenburg</option>
                            <option value='Niedwalden' <?php if($temp_val == 'Niedwalden') echo('selected')?> >Niedwalden</option>
                            <option value='Obwalden' <?php if($temp_val == 'Obwalden') echo('selected')?> >Obwalden</option>
                            <option value='Schaffhausen' <?php if($temp_val == 'Schaffhausen') echo('selected')?> >Schaffhausen</option>
                            <option value='Schwyz' <?php if($temp_val == 'Schwyz') echo('selected')?> >Schwyz</option>
                            <option value='Solothurn' <?php if($temp_val == 'Solothurn') echo('selected')?> >Solothurn</option>
                            <option value='St.Gallen' <?php if($temp_val == 'St.Gallen') echo('selected')?> >St.Gallen</option>
                            <option value='Tessin' <?php if($temp_val == 'Tessin') echo('selected')?> >Tessin</option>
                            <option value='Thurgau' <?php if($temp_val == 'Thurgau') echo('selected')?>>Thurgau</option>
                            <option value='Uri' <?php if($temp_val == 'Uri') echo('selected')?> >Uri</option>
                            <option value='Vaadt' <?php if($temp_val == 'Vaadt') echo('selected')?> >Vaadt</option>
                            <option value='Wallis' <?php if($temp_val == 'Wallis') echo('selected')?> >Wallis</option>
                            <option value='Zürich' <?php if($temp_val == 'Zürich') echo('selected')?> >Zürich</option>
                            <option value='Zug' <?php if($temp_val == 'Zug') echo('selected')?> >Zug</option>
                            <option value='Not Applicable' <?php if($temp_val == 'Not Applicable') echo('selected')?> >Not Applicable</option>
                        </select><br>
                    
                        <?php $temp_val1 = ($employee['Country']); ?>

                        <label for="Country">Country</label>
                        <select class='listbox' id='Country' name='Country'>
                            <option value='Switzerland' <?php if($temp_val1 == 'Switzerland') echo('selected')?> >Switzerland</option> 
                            <option value='Austria' <?php if($temp_val1 == 'Austria') echo('selected')?> >Austria</option> 
                            <option value='France' <?php if($temp_val1 == 'France') echo('selected')?> >France</option> 
                            <option value='Germany' <?php if($temp_val1 == 'Germany') echo('selected')?> >Germany</option> 
                            <option value='Italy' <?php if($temp_val1 == 'Italy') echo('selected')?> >Italy</option> 
                            <option value='Not Applicable' <?php if($temp_val1 == 'Not Applicable') echo('selected')?> >Not Applicable</option> 
                        </select><br>
                </div>

            <!-- Row for Role / Start Date and Working status of partner and children -->


                <div class="col-2" id="familyInformation">

                    <?php $temp_val2 = ($employee['CivilStatus']); ?>

                    <label for="Civilstatus">Civil Status</label>
                    <select class="listbox" id="Civilstatus" name="CivilStatus" placeholder="Civil status">
                        <option value="divorsed" <?php if($temp_val2 == 'divorsed') echo('selected')?>>divorsed</option>
                        <option value="married" <?php if($temp_val2 == 'married') echo('selected')?>>married</option>
                        <option value="single" <?php if($temp_val2 == 'single') echo('selected')?>>single</option>
                        <option value="widowed" <?php if($temp_val2 == 'widowed') echo('selected')?>>widowed</option>
                    </select><br>

                    <?php $temp_val3 = ($employee['PartnerWorkingStatus']); ?>

                    <label for="PartnerWorkingStatus">Is your partner working?</label>
                    <select id="PartnerWorkingStatus" class="listbox" name="PartnerWorkingStatus" value=<?php echo ($employee['PartnerWorkingStatus']); ?>>
                        <option value="yes" <?php if($temp_val2 == 'yes') echo('selected')?> >yes</option>
                        <option value="no" <?php if($temp_val2 == 'no') echo('selected')?> >no</option>
                    </select><br>

                    <?php $temp_val4 = ($employee['Childes']); ?>

                    <label for="Childes">How many children do you have?</label>
                    <select id="Childes" class="listbox" name="Childes" value=<?php echo ($employee['Childes']); ?>>
                        <option value="1" <?php if($temp_val4 == '1') echo('selected')?> >1</option>
                        <option value="2" <?php if($temp_val4 == '2') echo('selected')?> >2</option>
                        <option value="3" <?php if($temp_val4 == '3') echo('selected')?> >3</option>
                        <option value="4" <?php if($temp_val4 == '4') echo('selected')?> >4</option>
                        <option value="5" <?php if($temp_val4 == '5') echo('selected')?> >5</option>
                    </select><br>
                    <label for="Child1">Name</label>
                    <input id="Child1" type="text" name="Child1" placeholder="First Name" value=<?php echo ($employee['Child1']); ?>><br>
                    <label for="Child1Year">Birthyear</label>
                    <input id="Child1Year" type="text" name="Child1Year" placeholder="year" value=<?php echo ($employee['Child1Year']); ?>><br>
                    <label for="Child2">Name</label>
                    <input id="Child2" type="text" name="Child2" placeholder="First Name" value=<?php echo ($employee['Child2']); ?>><br>
                    <label for="Child2Year">Birthyear</label>
                    <input id="Child2Year" type="text" name="Child2Year" placeholder="year" value=<?php echo ($employee['Child2Year']); ?>><br>
                    <label for="Child3">Name</label>
                    <input id="Child3" type="text" name="Child3" placeholder="First Name" value=<?php echo ($employee['Child3']); ?>><br>
                    <label for="Child3Year">Name</label>
                    <input id="Child3Year" type="text" name="Child3Year" placeholder="year" value=<?php echo ($employee['Child3Year']); ?>><br>
                    <label for="Child4">Name</label>
                    <input id="Child4" type="text" name="Child4" placeholder="First Name" value=<?php echo ($employee['Child4']); ?>>
                    <label for="Child4Year">Birthyear</label>
                    <input id="Child4Year" type="text" name="Child4Year" placeholder="year" value=<?php echo ($employee['Child4Year']); ?>>
                </div>
            </form>
        </div>
    </div>
</section>

<!--                 <button type="submit" class="btn btn-secondary">Save</button>
-->