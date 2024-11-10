<?php
session_start();
include('database/data.php');


if(isset($_POST['update-jailer']))
{ 
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);
    try {
        $query = "UPDATE jailer SET 
        uname=:uname, pword=:pword, firstname=:firstname, middlename=:middlename, lastname=:lastname, email=:email
         WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':uname' => $uname,
            ':pword' => $hashedPassword,
            ':firstname' => $firstname,
            ':middlename' => $middlename,
            ':lastname' => $lastname,
            ':email' => $email,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:a_jai_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:a_jai_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}
if(isset($_POST['update-officer']))
{ 
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);
    try {
        $query = "UPDATE officer SET 
        uname=:uname, pword=:pword, firstname=:firstname, middlename=:middlename, lastname=:lastname, email=:email
         WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':uname' => $uname,
            ':pword' => $hashedPassword,
            ':firstname' => $firstname,
            ':middlename' => $middlename,
            ':lastname' => $lastname,
            ':email' => $email,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:a_off_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:a_off_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['update-admin']))
{ 
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);
    try {
        $query = "UPDATE adminn SET 
        uname=:uname, pword=:pword, firstname=:firstname, middlename=:middlename, lastname=:lastname, email=:email
         WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':uname' => $uname,
            ':pword' => $hashedPassword,
            ':firstname' => $firstname,
            ':middlename' => $middlename,
            ':lastname' => $lastname,
            ':email' => $email,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:a_admin_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:a_admin_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['update-cell']))
{
    $cell_id = $_POST['cell_id'];
    $cell_name = $_POST['cell_name'];
    $cell_status = $_POST['cell_status'];
    $prisonid = $_POST['prisonid'];
    try {
        $query = "UPDATE  cell SET cell_name=:cell_name, cell_status=:cell_status, prisonid=:prisonid WHERE cell_id=:cell_id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':cell_name' => $cell_name,
            ':cell_status' => $cell_status,
            ':prisonid' => $prisonid,
            ':cell_id' => $cell_id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:a_cb_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:a_cb_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['update-visitor']))
{
    $id = $_POST['id'];
    $vi_last = $_POST['vi_last'];
    $vi_first = $_POST['vi_first'];
    $vi_middle = $_POST['vi_middle'];
    $contact = $_POST['contact'];
    $relationship = $_POST['relationship'];
    try {
        $query = "UPDATE  visitor SET vi_last=:vi_last, vi_first=:vi_first, vi_middle=:vi_middle, contact=:contact, relationship=:relationship
         WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':vi_last' => $vi_last,
            ':vi_first' => $vi_first,
            ':vi_middle' => $vi_middle,
            ':contact' => $contact,
            ':relationship' => $relationship,
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:j_vi_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:j_vi_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['update-prison']))
{
    $prison_id = $_POST['prison_id'];
    $prison_name = $_POST['prison_name'];
    $prison_status = $_POST['prison_status'];
    try {
        $query = "UPDATE  prison SET prison_name=:prison_name, prison_status=:prison_status WHERE prison_id=:prison_id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':prison_name' => $prison_name,
            ':prison_status' => $prison_status,
            ':prison_id' => $prison_id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:a_pb_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:a_pb_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}


if(isset($_POST['update-in']))
{ 
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $bday = $_POST['bday'];
    $gender = $_POST['gender'];
    $statuss = $_POST['statuss'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $municipality = $_POST['municipality'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $prison_code = $_POST['prison_code'];
    $cellname = $_POST['cellname'];
    $crime = $_POST['crime'];
    $sentence = $_POST['sentence'];
    $tds = $_POST['tds'];
    $tde = $_POST['tde'];
    $prisonname = $_POST['prisonname'];
    $inmate_id = $_POST['inmate_id'];
    
    try {
        $query = "UPDATE inmate SET 
        lastname=:lastname, firstname=:firstname, middlename=:middlename, bday=:bday,
        gender=:gender, statuss=:statuss, street=:street, barangay=:barangay,
        municipality=:municipality, province=:province, country=:country, prison_code=:prison_code,
        cellname=:cellname, crime=:crime, sentence=:sentence, tds=:tds, tde=:tde, prisonname=:prisonname WHERE inmate_id=:inmate_id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':prisonname' => $prisonname,
            ':tde' => $tde,
            ':tds' => $tds,
            ':sentence' => $sentence,
            ':crime' => $crime,
            ':cellname' => $cellname,
            ':prison_code' => $prison_code,
            ':country' => $country,
            ':province' => $province,
            ':municipality' => $municipality,
            ':barangay' => $barangay,
            ':street' => $street,
            ':statuss' => $statuss,
            ':gender' => $gender,
            ':bday' => $bday,
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':middlename' => $middlename,
            ':inmate_id' => $inmate_id
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:o_in_home.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:o_in_home.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

?>