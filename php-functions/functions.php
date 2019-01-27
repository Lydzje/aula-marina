<?php


$conn->query("SET NAMES 'utf8'");

function verify_login($username, $password, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $sql->bind_param('ss', $username, $password);
    $sql->execute();
    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
        return 1;
    }
    return 0;
}


function getFeatureds(&$result)
{
    global $conn;
    $sql = "SELECT * FROM featureds WHERE id=1 OR id=2 OR id=3 OR id=4";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function updateFeatureds($id, $text, $en_text, $link, $img)
{
    global $conn;
    $sql =
        "UPDATE featureds
            SET text='$text', en_text='$en_text', link='$link', img='$img'
            WHERE id = '$id';
        ";
    $rec = $conn->query($sql);
}


function getSpecies(&$result)
{
    global $conn;
    $sql = "SELECT * FROM species ORDER BY year DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getSpeciesYears(&$result)
{
    global $conn;
    $sql = "SELECT DISTINCT year FROM species ORDER BY year DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getOneSpecies($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM species WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getLastSpecies(&$result)
{
    global $conn;
    $sql = "SELECT * FROM species ORDER BY id DESC LIMIT 1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function translateMonthToEn($month)
{
    $en_month = "";
    if ($month == "Enero") {
        $en_month = "January";
    } elseif ($month == "Febrero") {
        $en_month = "February";
    } elseif ($month == "Marzo") {
        $en_month = "March";
    } elseif ($month == "Abril") {
        $en_month = "April";
    } elseif ($month == "Mayo") {
        $en_month = "May";
    } elseif ($month == "Junio") {
        $en_month = "June";
    } elseif ($month == "Julio") {
        $en_month = "July";
    } elseif ($month == "Agosto") {
        $en_month = "August";
    } elseif ($month == "Septiembre") {
        $en_month = "September";
    } elseif ($month == "Octubre") {
        $en_month = "October";
    } elseif ($month == "Noviembre") {
        $en_month = "November";
    } elseif ($month == "Diciembre") {
        $en_month = "December";
    }

    return $en_month;
}

function insertSpecies($sci_name, $comm_name, $en_comm_name, $description, $en_description, $month, $year, $img)
{
    $en_month = translateMonthToEn($month);
    global $conn;
    $sql =
        "INSERT INTO species (sci_name, comm_name, en_comm_name, description, en_description, month, en_month, year, img)
            VALUES ('$sci_name', '$comm_name', '$en_comm_name', '$description', '$en_description', '$month', '$en_month', '$year', '$img') 
        ";
    $rec = $conn->query($sql);
}

function updateSpecies($id, $sci_name, $comm_name, $en_comm_name, $description, $en_description, $month, $year, $img)
{
    $en_month = translateMonthToEn($month);
    global $conn;
    $sql =
        "UPDATE species
            SET sci_name='$sci_name', comm_name='$comm_name', en_comm_name='$en_comm_name', description='$description', en_description='$en_description', month='$month', en_month='$en_month', year='$year', img='$img'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}


function getActivities($past, &$result)
{
    global $conn;
    $sql = "SELECT * FROM activities WHERE past='$past' ORDER BY date DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getActivity($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM activities WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getFeaturedActivity(&$result)
{
    global $conn;
    $sql = "SELECT * FROM activities WHERE featured=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateActivity($id, $past, $title, $en_title, $date, $ubication, $en_ubication, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "UPDATE activities
            SET title='$title', en_title='$en_title', date='$date', ubication='$ubication', en_ubication='$en_ubication', description='$description', en_description='$en_description', img1='$img1', img2='$img2', img3='$img3', img4='$img4'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertActivity($past, $title, $en_title, $date, $ubication, $en_ubication, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "INSERT INTO activities (past, title, en_title, date, ubication, en_ubication, description, en_description, img1, img2, img3, img4)
            VALUES ('$past', '$title', '$en_title', '$date', '$ubication', '$en_ubication', '$description', '$en_description', '$img1', '$img2', '$img3', '$img4') 
        ";
    $rec = $conn->query($sql);
}


function getProjects(&$result)
{
    global $conn;
    $sql = "SELECT * FROM projects ORDER BY name";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getProject($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM projects WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateProject($id, $name, $en_name, $description, $en_description, $img, $bg)
{
    global $conn;
    $sql =
        "UPDATE projects
            SET name='$name', en_name='$en_name', description='$description', en_description='$en_description', img='$img', bg='$bg'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertProject($name, $en_name, $description, $en_description, $img, $bg)
{
    global $conn;
    $sql =
        "INSERT INTO projects (name, en_name, description, en_description, img, bg)
            VALUES ('$name', '$en_name', '$description', '$en_description', '$img', '$bg') 
        ";
    $rec = $conn->query($sql);
}


function getSectionsOfProject($idProj, &$result)
{
    global $conn;
    $sql = "SELECT * FROM sections WHERE id_proj='$idProj'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getSection($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM sections WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateSection($id, $title, $en_title, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "UPDATE sections
            SET title='$title', en_title='$en_title', description='$description', en_description='$en_description', img1='$img1', img2='$img2', img3='$img3', img4='$img4'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertSection($projID, $title, $en_title, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "INSERT INTO sections (id_proj, title, en_title, description, en_description, img1, img2, img3, img4)
            VALUES ('$projID', '$title', '$en_title', '$description', '$en_description', '$img1', '$img2', '$img3', '$img4') 
        ";
    $rec = $conn->query($sql);
}


function getPeople($main, &$result)
{
    global $conn;
    $sql = "SELECT * FROM people WHERE main='$main'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getPerson($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM people WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updatePerson($id, $main, $name, $charge, $en_charge, $description, $en_description, $img)
{
    global $conn;
    $sql =
        "UPDATE people
            SET main='$main', name='$name', charge='$charge', en_charge='$en_charge', description='$description', en_description='$en_description', img='$img'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertPerson($main, $name, $charge, $en_charge, $description, $en_description, $img)
{
    global $conn;
    $sql =
        "INSERT INTO people (main, name, charge, en_charge, description, en_description, img)
            VALUES ('$main', '$name', '$charge', '$en_charge', '$description', '$en_description', '$img') 
        ";
    $rec = $conn->query($sql);
}

function getColabsPhoto(&$result)
{
    global $conn;
    $sql = "SELECT * FROM colabsPhoto WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateColabsPhoto($img)
{
    global $conn;
    $sql =
        "UPDATE colabsPhoto
            SET img='$img'
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getFacilitiesInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM facilities WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateFacilities($img1, $img2, $img3, $img4, $description, $en_description)
{
    global $conn;
    $sql =
        "UPDATE facilities
            SET img1='$img1', img2='$img2', img3='$img3', img4='$img4', description='$description', en_description='$en_description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getAboutUsInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM aboutUs WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateAboutUs($img1, $img2, $img3, $img4, $description, $en_description)
{
    global $conn;
    $sql =
        "UPDATE aboutUs
            SET img1='$img1', img2='$img2', img3='$img3', img4='$img4', description='$description', en_description='$en_description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getNews(&$result)
{
    global $conn;
    $sql = "SELECT * FROM news ORDER BY date DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getNew($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM news WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getFeaturedNew(&$result)
{
    global $conn;
    $sql = "SELECT * FROM news WHERE featured=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateNew($id, $title, $date, $link, $description, $img)
{
    global $conn;
    $sql =
        "UPDATE news
            SET title='$title', date='$date', link='$link', description='$description', img='$img'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertNew($title, $date, $link, $description, $img)
{
    global $conn;
    $sql =
        "INSERT INTO news (title, date, link, description, img)
            VALUES ('$title', '$date', '$link', '$description', '$img') 
        ";
    $rec = $conn->query($sql);
}


function getContactInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM contact WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateContact($phone, $email, $hour, $address, $description, $en_description)
{
    global $conn;
    $sql =
        "UPDATE contact
            SET phone='$phone', email='$email', hour='$hour', address='$address', description='$description', en_description='$en_description'  
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getAccountInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateAccount($username, $password)
{
    global $conn;
    $sql =
        "UPDATE users
            SET username='$username', password='$password' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getRRSS(&$result)
{
    global $conn;
    $sql = "SELECT * FROM rrss";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function updateRS($id, $link)
{
    global $conn;
    $sql =
        "UPDATE rrss
            SET link='$link' 
            WHERE id = $id;
        ";
    $rec = $conn->query($sql);
}