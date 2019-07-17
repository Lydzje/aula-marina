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
    $sql = $conn->prepare(
        "UPDATE featureds
            SET text=?, en_text=?, link=?, img=?
            WHERE id = ?;"
    );
    $sql->bind_param('sssss', $text, $en_text, $link, $img, $id);
    $sql->execute();
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
    $sql = $conn->prepare("SELECT * FROM species WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();

    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getLastSpecies(&$result)
{ 
    global $conn;
    $sql = "SELECT * FROM species ORDER BY year DESC, month_number DESC LIMIT 1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function monthToNumber($month)
{
    if ($month == "Enero") {
        return 1;
    } elseif ($month == "Febrero") {
        return 2;
    } elseif ($month == "Marzo") {
        return 3;
    } elseif ($month == "Abril") {
        return 4;
    } elseif ($month == "Mayo") {
        return 5;
    } elseif ($month == "Junio") {
        return 6;
    } elseif ($month == "Julio") {
        return 7;
    } elseif ($month == "Agosto") {
        return 8;
    } elseif ($month == "Septiembre") {
        return 9;
    } elseif ($month == "Octubre") {
        return 10;
    } elseif ($month == "Noviembre") {
        return 11;
    } elseif ($month == "Diciembre") {
        return 12;
    } else return -1;
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
    $month_number = monthToNumber($month);
    global $conn;
    $sql = $conn->prepare(
        "INSERT INTO species (sci_name, comm_name, en_comm_name, description, en_description, month, en_month, month_number, year, img)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $sql->bind_param('ssssssssss', $sci_name, $comm_name, $en_comm_name, $description, $en_description, $month, $en_month, $month_number, $year, $img);
    $sql->execute();
}

function updateSpecies($id, $sci_name, $comm_name, $en_comm_name, $description, $en_description, $month, $year, $img)
{
    $en_month = translateMonthToEn($month);
    $month_number = monthToNumber($month);
    global $conn;
    $sql = $conn->prepare(
        "UPDATE species
            SET sci_name=?, comm_name=?, en_comm_name=?, description=?, en_description=?, month=?, en_month=?, month_number=?, year=?, img=?
            WHERE id=?"
    );
    $sql->bind_param('sssssssssss', $sci_name, $comm_name, $en_comm_name, $description, $en_description, $month, $en_month, $month_number, $year, $img, $id);
    $sql->execute();
}


function getActivities($past, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM activities WHERE past=? ORDER BY date DESC");
    $sql->bind_param('s', $past);
    $sql->execute();

    $rec = $sql->get_result();
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
    $sql = $conn->prepare("SELECT * FROM activities WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();

    $rec = $sql->get_result();
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
    $sql = $conn->prepare(
        "UPDATE activities
            SET title=?, en_title=?, date=?, ubication=?, en_ubication=?, description=?, en_description=?, img1=?, img2=?, img3=?, img4=?
            WHERE id=?"
    );
    $sql->bind_param('sssssssssssi', $title, $en_title, $date, $ubication, $en_ubication, $description, $en_description, $img1, $img2, $img3, $img4, $id);
    $sql->execute();
}

function insertActivity($past, $title, $en_title, $date, $ubication, $en_ubication, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql = $conn->prepare(
        "INSERT INTO activities (past, title, en_title, date, ubication, en_ubication, description, en_description, img1, img2, img3, img4)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $sql->bind_param('ssssssssssss', $past, $title, $en_title, $date, $ubication, $en_ubication, $description, $en_description, $img1, $img2, $img3, $img4);
    $sql->execute();
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
    $sql = $conn->prepare("SELECT * FROM projects WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();

    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateProject($id, $name, $en_name, $description, $en_description, $img, $bg)
{
    global $conn;
    $sql = $conn->prepare(
        "UPDATE projects
            SET name=?, en_name=?, description=?, en_description=?, img=?, bg=?
            WHERE id=?
        "
    );
    $sql->bind_param('ssssssi', $name, $en_name, $description, $en_description, $img, $bg, $id);
    $sql->execute();
}

function insertProject($name, $en_name, $description, $en_description, $img, $bg)
{
    global $conn;
    $sql = $conn->prepare(
        "INSERT INTO projects (name, en_name, description, en_description, img, bg)
            VALUES (?, ?, ?, ?, ?, ?) 
        "
    );
    $sql->bind_param('ssssss', $name, $en_name, $description, $en_description, $img, $bg);
    $sql->execute();
}


function getSectionsOfProject($idProj, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM sections WHERE id_proj=?");
    $sql->bind_param('i', $idProj);
    $sql->execute();

    $rec = $sql->get_result();
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
    $sql = $conn->prepare("SELECT * FROM sections WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();

    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateSection($id, $title, $en_title, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql = $conn->prepare(
        "UPDATE sections
            SET title=?, en_title=?, description=?, en_description=?, img1=?, img2=?, img3=?, img4=?
            WHERE id=?
        "
    );
    $sql->bind_param('ssssssssi', $title, $en_title, $description, $en_description, $img1, $img2, $img3, $img4, $id);
    $sql->execute();    
}

function insertSection($projID, $title, $en_title, $description, $en_description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql = $conn->prepare(
        "INSERT INTO sections (id_proj, title, en_title, description, en_description, img1, img2, img3, img4)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) 
        "
    );
    $sql->bind_param('issssssss', $projID, $title, $en_title, $description, $en_description, $img1, $img2, $img3, $img4);
    $sql->execute();
}


function getPeople($main, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM people WHERE main=?");
    $sql->bind_param('s', $main);
    $sql->execute();

    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec->fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getPerson($id, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM people WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();
    
    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updatePerson($id, $main, $name, $charge, $en_charge, $description, $en_description, $img)
{
    global $conn;
    $sql = $conn->prepare(
        "UPDATE people
            SET main=?, name=?, charge=?, en_charge=?, description=?, en_description=?, img=?
            WHERE id=?
        "
    );
    $sql->bind_param('sssssssi', $main, $name, $charge, $en_charge, $description, $en_description, $img, $id);
    $sql->execute();
}

function insertPerson($main, $name, $charge, $en_charge, $description, $en_description, $img)
{
    global $conn;
    $sql = $conn->prepare(
        "INSERT INTO people (main, name, charge, en_charge, description, en_description, img)
            VALUES (?, ?, ?, ?, ?, ?, ?) 
        "
    );
    $sql->bind_param('sssssss', $main, $name, $charge, $en_charge, $description, $en_description, $img);
    $sql->execute();
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
    $sql = $conn->prepare(
        "UPDATE colabsPhoto
            SET img=?
            WHERE id = 1;
        "
    );
    $sql->bind_param('s', $img);
    $sql->execute();
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
    $sql = $conn->prepare(
        "UPDATE facilities
            SET img1=?, img2=?, img3=?, img4=?, description=?, en_description=?
            WHERE id = 1;
        "
    );
    $sql->bind_param('ssssss', $img1, $img2, $img3, $img4, $description, $en_description);
    $sql->execute();
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
    $sql = $conn->prepare(
        "UPDATE aboutUs
            SET img1=?, img2=?, img3=?, img4=?, description=?, en_description=? 
            WHERE id = 1;
        "
    );
    $sql->bind_param('ssssss', $img1, $img2, $img3, $img4, $description, $en_description);
    $sql->execute();
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
    $sql = $conn->prepare("SELECT * FROM news WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();

    $rec = $sql->get_result();
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
    $sql = $conn->prepare(
        "UPDATE news
            SET title=?, date=?, link=?, description=?, img=?
            WHERE id=?
        "
    );
    $sql->bind_param('sssssi', $title, $date, $link, $description, $img, $id);
    $sql->execute();
}

function insertNew($title, $date, $link, $description, $img)
{
    global $conn;
    $sql = $conn->prepare(
        "INSERT INTO news (title, date, link, description, img)
            VALUES (?, ?, ?, ?, ?) 
        "
    );
    $sql->bind_param('sssss', $title, $date, $link, $description, $img);
    $sql->execute();
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
    $sql = $conn->prepare(
        "UPDATE contact
            SET phone=?, email=?, hour=?, address=?, description=?, en_description=?  
            WHERE id = 1;
        "
    );
    $sql->bind_param('ssssss', $phone, $email, $hour, $address, $description, $en_description);
    $sql->execute();
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
    $sql = $conn->prepare(
        "UPDATE users
            SET username=?, password=? 
            WHERE id = 1;
        "
    );
    $sql->bind_param('ss', $username, $password);
    $sql->execute();
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
    $sql = $conn->prepare(
        "UPDATE rrss
            SET link=? 
            WHERE id = ?;
        "
    );
    $sql->bind_param('si', $link, $id);
    $sql->execute();
}


function getBg($id, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM bgs WHERE id=?");
    $sql->bind_param('i', $id);
    $sql->execute();

    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getBgs(&$result)
{
    global $conn;
    $sql = "SELECT * FROM bgs";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function updateBg($id, $link)
{
    global $conn;
    $sql = $conn->prepare(
        "UPDATE bgs
            SET link=? 
            WHERE id = ?;
        "
    );
    $sql->bind_param('si', $link, $id);
    $sql->execute();
}