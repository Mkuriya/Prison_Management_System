<?php
include ('database/data.php');


//create for inmate
if(isset($_POST['save-inmate'])){

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
    $query = "INSERT INTO inmate (lastname, firstname, middlename, bday, gender, statuss, street, barangay, municipality,
    province, country, prison_code, cellname, crime, sentence, tds, tde, prisonname, in_date_create) 
    VALUES (:lastname, :firstname, :middlename, :bday, :gender, :statuss, :street, :barangay, :municipality,
    :province, :country, :prison_code, :cellname, :crime, :sentence, :tds, :tde, :prisonname, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);
    $data = [
        ':lastname' => $lastname,
        ':firstname' => $firstname,
        ':middlename' => $middlename,
        ':bday' => $bday,
        ':gender' => $gender,
        ':statuss' => $statuss,
        ':street' => $street,
        ':barangay' => $barangay,
        ':municipality' => $municipality,
        ':province' => $province,
        ':country' => $country,
        ':prison_code' => $prison_code,
        ':cellname' => $cellname,
        ':crime' => $crime,
        ':sentence' => $sentence,
        ':tds' => $tds,
        ':tde' => $tde,
        ':prisonname' => $prisonname
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:o_in_home.php');
        exit(0);
    }else{
        header('Location:o_in_home.php');
        exit(0);
    }
}

//create for visitor
if(isset($_POST['save-visitor'])){

    $inmateid = $_POST['inmateid'];
    $vi_last = $_POST['vi_last'];
    $vi_first = $_POST['vi_first'];
    $vi_middle = $_POST['vi_middle'];
    $relationship = $_POST['relationship'];
    $contact = $_POST['contact'];

    $query = "INSERT INTO visitor (inmateid, vi_last, vi_first, vi_middle, relationship, contact, vi_in) 
    VALUES (:inmateid, :vi_last, :vi_first, :vi_middle, :relationship, :contact, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);
    $data = [
        ':inmateid' => $inmateid,
        ':vi_last' => $vi_last,
        ':vi_first' => $vi_first,
        ':vi_middle' => $vi_middle,
        ':relationship' => $relationship,
        ':contact' => $contact
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:j_vi_home.php');
        exit(0);
    }else{
        header('Location:j_vi_home.php');
        exit(0);
    }
}
//create for jailer
if(isset($_POST['save-jailer'])){

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);

    $query = "INSERT INTO jailer (lastname, firstname, middlename, email, uname, pword, date_create) 
    VALUES (:lastname, :firstname, :middlename, :email, :uname, :pword, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);
    $data = [
        ':lastname' => $lastname,
        ':firstname' => $firstname,
        ':middlename' => $middlename,
        ':email' => $email,
        ':uname' => $uname,
        ':pword' => $hashedPassword
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:a_jai_home.php');
        exit(0);
    }else{
        header('Location:a_jai_home.php');
        exit(0);
    }
}
//create for officer
if(isset($_POST['save-officer'])){

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);

    $query = "INSERT INTO officer (lastname, firstname, middlename, email, uname, pword, date_create) 
    VALUES (:lastname, :firstname, :middlename, :email, :uname, :pword, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);
    $data = [
        ':lastname' => $lastname,
        ':firstname' => $firstname,
        ':middlename' => $middlename,
        ':email' => $email,
        ':uname' => $uname,
        ':pword' => $hashedPassword
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:a_off_home.php');
        exit(0);
    }else{
        header('Location:a_off_home.php');
        exit(0);
    }
}
//create for admin
if(isset($_POST['save-admin'])){

    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $hashedPassword = password_hash($pword, PASSWORD_DEFAULT);

    $query = "INSERT INTO adminn (lastname, firstname, middlename, email, uname, pword, date_create) 
    VALUES (:lastname, :firstname, :middlename, :email, :uname, :pword, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);
    $data = [
        ':lastname' => $lastname,
        ':firstname' => $firstname,
        ':middlename' => $middlename,
        ':email' => $email,
        ':uname' => $uname,
        ':pword' => $hashedPassword
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:a_admin_home.php');
        exit(0);
    }else{
        header('Location:a_admin_home.php');
        exit(0);
    }
}

//create for cell
if(isset($_POST['save-cell'])){

    $cell_name = $_POST['cell_name'];
    $cell_status = $_POST['cell_status'];
    $prisonid = $_POST['prisonid'];
    $query = "INSERT INTO cell (cell_name, cell_status, prisonid, cell_date_create) VALUES (:cell_name, :cell_status, :prisonid, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':cell_name' => $cell_name,
        ':cell_status' => $cell_status,
        ':prisonid' => $prisonid
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:a_cb_home.php');
        exit(0);
    }else{
        header('Location:a_cb_home.php');
        exit(0);
    }
}

//create for prison
if(isset($_POST['save-prison'])){

    $prison_name = $_POST['prison_name'];
    $prison_status = $_POST['prison_status'];
    $query = "INSERT INTO prison (prison_name, prison_status, date_create) VALUES (:prison_name, :prison_status, CURRENT_TIMESTAMP)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':prison_name' => $prison_name,
        ':prison_status' => $prison_status
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        header('Location:a_pb_home.php');
        exit(0);
    }else{
        header('Location:a_pb_home.php');
        exit(0);
    }
}
?>