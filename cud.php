<?php
session_start();
include('data.php');

// create and delete visitor block

if(isset($_POST['save-vi-btn'])){

    $viln = $_POST['viln'];
    $vifn = $_POST['vifn'];
    $vimn = $_POST['vimn'];
    $virel = $_POST['virel'];
    $viic = $_POST['viic'];
    $query = "INSERT INTO vbdb (viln, vifn, vimn, virel, viic) VALUES (:viln, :vifn, :vimn, :virel, :viic)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':viln' => $viln,
        ':vifn' => $vifn,
        ':vimn' => $vimn,
        ':virel' => $virel,
        ':viic' => $viic
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:cvhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:cvhome.php');
        exit(0);
    }
}
if(isset($_POST['delete-vi-btn'])){
    $viid = $_POST['delete-vi-btn'];

    try {
        $query = "DELETE FROM vbdb WHERE viid=:viid";
        $statement = $pdo->prepare($query);
        $data = [':viid' => $viid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:cvhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:cvhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
//cud inmate

if(isset($_POST['save-inmate-btn'])){
    

    $inln = $_POST['inln'];
    $infn = $_POST['infn'];
    $inmn = $_POST['inmn'];
    $ingen = $_POST['ingen'];
    $inbd = $_POST['inbd'];
    $insta = $_POST['insta'];
    $inprk = $_POST['inprk'];
    $inbr = $_POST['inbr'];
    $inmu = $_POST['inmu'];
    $inpro = $_POST['inpro'];
    $inco = $_POST['inco'];
    $inpc = $_POST['inpc'];
    $inpbcb = $_POST['inpbcb'];
    $incr = $_POST['incr'];
    $insen = $_POST['insen'];
    $intds = $_POST['intds'];
    $intde = $_POST['intde'];
    $query = "INSERT INTO indb (inln, infn, inmn, ingen, inbd, insta, inprk, inbr, inmu, inpro, inco, inpc, inpbcb, incr, insen, intds, intde)
     VALUES (:inln, :infn, :inmn, :ingen, :inbd, :insta, :inprk, :inbr, :inmu, :inpro, :inco, :inpc, :inpbcb, :incr, :insen, :intds, :intde)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':intde' => $intde,
        ':intds' => $intds,
        ':insen' => $insen,
        ':incr' => $incr,
        ':inpbcb' => $inpbcb,
        ':inpc' => $inpc,
        ':inco' => $inco,
        ':inpro' => $inpro,
        ':inmu' => $inmu,
        ':inbr' => $inbr,
        ':inprk' => $inprk,
        ':insta' => $insta,
        ':inbd' => $inbd,
        ':ingen' => $ingen,
        ':inmn' => $inmn,
        ':inln' => $inln,
        ':infn' => $infn
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aihome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aihome.php');
        exit(0);
    }
}

if(isset($_POST['delete-inmate-btn'])){
    $inid = $_POST['delete-inmate-btn'];

    try {
        $query = "DELETE FROM indb WHERE inid=:inid";
        $statement = $pdo->prepare($query);
        $data = [':inid' => $inid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:aihome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:aihome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
//for create, delete user account
if(isset($_POST['save-user-btn'])){

    $uln = $_POST['uln'];
    $umn = $_POST['umn'];
    $ufn = $_POST['ufn'];
    $uun = $_POST['uun'];
    $upw = $_POST['upw'];
    $uem = $_POST['uem'];
    $query = "INSERT INTO udb (uln, umn, ufn, uun, upw, uem) VALUES (:uln, :umn,:ufn, :uun,:upw, :uem)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':uln' => $uln,
        ':umn' => $umn,
        ':ufn' => $ufn,
        ':uun' => $uun,
        ':upw' => $upw,
        ':uem' => $uem
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aalhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aalhome.php');
        exit(0);
    }
}
if(isset($_POST['delete-user-btn'])){
    $uid = $_POST['delete-user-btn'];

    try {
        $query = "DELETE FROM udb WHERE uid=:uid";
        $statement = $pdo->prepare($query);
        $data = [':uid' => $uid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:aalhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:aalhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
//for create, delete assistant account 

if(isset($_POST['save-assistant-btn'])){

    $cln = $_POST['cln'];
    $cmn = $_POST['cmn'];
    $cfn = $_POST['cfn'];
    $cun = $_POST['cun'];
    $cpw = $_POST['cpw'];
    $cem = $_POST['cem'];
    $query = "INSERT INTO cdb (cln, cmn, cfn, cun, cpw, cem) VALUES (:cln, :cmn,:cfn, :cun,:cpw, :cem)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':cln' => $cln,
        ':cmn' => $cmn,
        ':cfn' => $cfn,
        ':cun' => $cun,
        ':cpw' => $cpw,
        ':cem' => $cem
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aalhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aalhome.php');
        exit(0);
    }
}
if(isset($_POST['delete-assistant-btn'])){
    $cid = $_POST['delete-assistant-btn'];

    try {
        $query = "DELETE FROM cdb WHERE cid=:cid";
        $statement = $pdo->prepare($query);
        $data = [':cid' => $cid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:aalhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:aalhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
//for create delete admin account

if(isset($_POST['save-admin-btn'])){

    $aln = $_POST['aln'];
    $amn = $_POST['amn'];
    $afn = $_POST['afn'];
    $aun = $_POST['aun'];
    $apw = $_POST['apw'];
    $aem = $_POST['aem'];
    $query = "INSERT INTO adb (aln, amn, afn, aun, apw, aem) VALUES (:aln, :amn,:afn, :aun,:apw, :aem)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':aln' => $aln,
        ':amn' => $amn,
        ':afn' => $afn,
        ':aun' => $aun,
        ':apw' => $apw,
        ':aem' => $aem
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aalhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aalhome.php');
        exit(0);
    }
}
if(isset($_POST['delete-admin-btn'])){
    $aid = $_POST['delete-admin-btn'];

    try {
        $query = "DELETE FROM adb WHERE aid=:aid";
        $statement = $pdo->prepare($query);
        $data = [':aid' => $aid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:aalhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:aalhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

//for visitor
if(isset($_POST['delete-avi-btn'])){
    $viid = $_POST['delete-avi-btn'];

    try {
        $query = "DELETE FROM vbdb WHERE viid=:viid";
        $statement = $pdo->prepare($query);
        $data = [':viid' => $viid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:avhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:avhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

//create, delete and update about cell block
if(isset($_POST['delete-cb-btn'])){
    $cbid = $_POST['delete-cb-btn'];

    try {
        $query = "DELETE FROM cbdb WHERE cbid=:cbid";
        $statement = $pdo->prepare($query);
        $data = [':cbid' => $cbid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:acbhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:acbhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


if(isset($_POST['update-cb-btn']))
{
    $cbid = $_POST['cbid'];
    $pbnm = $_POST['pbnm'];
    $cbnm = $_POST['cbnm'];
    $cbsta = $_POST['cbsta'];

    try {
        $query = "UPDATE  cbdb SET pbnm=:pbnm, cbnm=:cbnm, cbsta=:cbsta WHERE cbid=:cbid LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':pbnm' => $pbnm,
            ':cbnm' => $cbnm,
            ':cbsta' => $cbsta,
            ':cbid' => $cbid
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:acbhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:acbhome.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['save-cb-btn'])){

    $pbnm = $_POST['pbnm'];
    $cbnm = $_POST['cbnm'];
    $cbsta = $_POST['cbsta'];
    $query = "INSERT INTO cbdb (pbnm, cbnm, cbsta) VALUES (:pbnm, :cbnm, :cbsta)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':pbnm' => $pbnm,
        ':cbnm' => $cbnm,
        ':cbsta' => $cbsta
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:acbhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:acbhome.php');
        exit(0);
    }
}

//create, delete and update about prison block
if(isset($_POST['delete-pb-btn'])){
    $pbid = $_POST['delete-pb-btn'];

    try {
        $query = "DELETE FROM pbdb WHERE pbid=:pbid";
        $statement = $pdo->prepare($query);
        $data = [':pbid' => $pbid];
        $query_execute = $statement->execute($data);
        if($query_execute){
           // $_SESSION['message'] = "Delete Successfully";
            header('Location:apbhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Delete ";
            header('Location:apbhome.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
if(isset($_POST['update-pb-btn']))
{
    $pbid = $_POST['pbid'];
    $pbnm = $_POST['pbnm'];
    $pbsta = $_POST['pbsta'];

    try {
        $query = "UPDATE  pbdb SET pbnm=:pbnm, pbsta=:pbsta WHERE pbid=:pbid LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':pbnm' => $pbnm,
            ':pbsta' => $pbsta,
            ':pbid' => $pbid
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:apbhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:apbhome.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['save-pb-btn'])){

    $pbnm = $_POST['pbnm'];
    $pbsta = $_POST['pbsta'];
    $query = "INSERT INTO pbdb (pbnm, pbsta) VALUES (:pbnm, :pbsta)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':pbnm' => $pbnm,
        ':pbsta' => $pbsta
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:apbhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:apbhome.php');
        exit(0);
    }
}

//update user account
if(isset($_POST['update-user-btn']))
{
    $uidd = $_POST['uidd'];
    $uln = $_POST['uln'];
    $umn = $_POST['umn'];
    $ufn = $_POST['ufn'];
    $uun = $_POST['uun'];
    $upw = $_POST['upw'];
    $uem = $_POST['uem'];

    try {
        $query = "UPDATE  udb SET uln=:uln, umn=:umn, ufn=:ufn, uun=:uun, upw=:upw, uem=:uem WHERE uidd=:uidd LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':uln' => $uln,
            ':umn' => $umn,
            ':ufn' => $ufn,
            ':uun' => $uun,
            ':upw' => $upw,
            ':uem' => $uem,
            ':uidd' => $uidd
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:aalhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:aalhome.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['save-user-btn'])){
  
    $uln = $_POST['uln'];
    $umn = $_POST['umn'];
    $ufn = $_POST['ufn'];
    $uun = $_POST['uun'];
    $upw = $_POST['upw'];
    $uem = $_POST['uem'];

    $query = "INSERT INTO udb ( `uln`, `umn`, `ufn`, `uun`, `upw`, `uem`)
     VALUES ( :uln, :umn,:ufn, :uun, :upw, :uem)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':uln' => $uln,
        ':umn' => $umn,
        ':ufn' => $ufn,
        ':uun' => $uun,
        ':upw' => $upw,
        ':uem' => $uem
      
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aalhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aalhome.php');
        exit(0);
    }
}

// update aaas account
if(isset($_POST['update-aaas-btn']))
{
    $cid = $_POST['cid'];
    $cln = $_POST['cln'];
    $cmn = $_POST['cmn'];
    $cfn = $_POST['cfn'];
    $cun = $_POST['cun'];
    $cpw = $_POST['cpw'];
    $cem = $_POST['cem'];

    try {
        $query = "UPDATE  cdb SET cln=:cln, cmn=:cmn, cfn=:cfn, cun=:cun, cpw=:cpw, cem=:cem WHERE cid=:cid LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':cln' => $cln,
            ':cmn' => $cmn,
            ':cfn' => $cfn,
            ':cun' => $cun,
            ':cpw' => $cpw,
            ':cem' => $cem,
            ':cid' => $cid
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:aalhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:aalhome.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['save-aaas-btn'])){
  
    $cln = $_POST['cln'];
    $cmn = $_POST['cmn'];
    $cfn = $_POST['cfn'];
    $cun = $_POST['cun'];
    $cpw = $_POST['cpw'];
    $cem = $_POST['cem'];

    $query = "INSERT INTO cdb ( `cln`, `cmn`, `cfn`, `cun`, `cpw`, `cem`)
     VALUES ( :cln, :cmn,:cfn, :cun, :cpw, :cem)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':cln' => $cln,
            ':cmn' => $cmn,
            ':cfn' => $cfn,
            ':cun' => $cun,
            ':cpw' => $cpw,
            ':cem' => $cem
      
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aalhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aalhome.php');
        exit(0);
    }
}

// update admin account list

if(isset($_POST['update-aaac-btn']))
{
    $aid = $_POST['aid'];
    $aln = $_POST['aln'];
    $amn = $_POST['amn'];
    $afn = $_POST['afn'];
    $aun = $_POST['aun'];
    $apw = $_POST['apw'];
    $aem = $_POST['aem'];

    try {
        $query = "UPDATE  adb SET aln=:aln, amn=:amn, afn=:afn, aun=:aun, apw=:apw, aem=:aem WHERE aid=:aid LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':aln' => $aln,
            ':amn' => $amn,
            ':afn' => $afn,
            ':aun' => $aun,
            ':apw' => $apw,
            ':aem' => $aem,
            ':aid' => $aid
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:aalhome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:aalhome.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['save-aaac-btn'])){
  
    $aln = $_POST['aln'];
    $amn = $_POST['amn'];
    $afn = $_POST['afn'];
    $aun = $_POST['aun'];
    $apw = $_POST['apw'];
    $aem = $_POST['aem'];

    $query = "INSERT INTO adb ( `aln`, `amn`, `afn`, `aun`, `apw`, `aem`)
     VALUES ( :aln, :amn,:afn, :aun, :apw, :aem)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':aln' => $aln,
        ':amn' => $amn,
        ':afn' => $afn,
        ':aun' => $aun,
        ':apw' => $apw,
        ':aem' => $aem
      
    ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aalhome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aalhome.php');
        exit(0);
    }
}
// update inmate

if(isset($_POST['update-inmate-btn']))
{
    $inid = $_POST['inid'];
    $inln = $_POST['inln'];
    $infn = $_POST['infn'];
    $inmn = $_POST['inmn'];
    $ingen = $_POST['ingen'];
    $inbd = $_POST['inbd'];
    $insta = $_POST['insta'];
    $inprk = $_POST['inprk'];
    $inbr = $_POST['inbr'];
    $inmu = $_POST['inmu'];
    $inpro = $_POST['inpro'];
    $inco = $_POST['inco'];
    $inpc = $_POST['inpc'];
    $inpbcb = $_POST['inpbcb'];
    $incr = $_POST['incr'];
    $insen = $_POST['insen'];
    $intds = $_POST['intds'];
    $intde = $_POST['intde'];

    try {
        $query = "UPDATE  indb SET inln=:inln, infn=:infn, inmn=:inmn, inbd=:inbd, ingen=:ingen, 
                                insta=:insta, inprk=:inprk, inbr=:inbr, inmu=:inmu, inpro=:inpro, inco=:inco, 
                                inpc=:inpc, inpbcb=:inpbcb, incr=:incr, insen=:insen, intds=:intds, intde=:intde
        WHERE inid=:inid LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [
            ':intde' => $intde,
            ':intds' => $intds,
            ':insen' => $insen,
            ':incr' => $incr,
            ':inpbcb' => $inpbcb,
            ':inpc' => $inpc,
            ':inco' => $inco,
            ':inpro' => $inpro,
            ':inmu' => $inmu,
            ':inbr' => $inbr,
            ':inprk' => $inprk,
            ':insta' => $insta,
            ':inbd' => $inbd,
            ':ingen' => $ingen,
            ':inmn' => $inmn,
            ':inln' => $inln,
            ':infn' => $infn,
            ':inid' => $inid
        ];
        $query_execute = $statement->execute($data);
        if($query_execute){
            //$_SESSION['message'] = "Update Successfully";
            header('Location:aihome.php');
            exit(0);
        }else{
           // $_SESSION['message'] = "Not Updated ";
            header('Location:aihome.php');
            exit(0);
        }
    } catch(PDOException $e) {
        echo $e->getMEssage();
    }
}

if(isset($_POST['save-inmate-btn'])){


    $inln = $_POST['inln'];
    $infn = $_POST['infn'];
    $inmn = $_POST['inmn'];
    $ingen = $_POST['ingen'];
    $inbd = $_POST['inbd'];
    $insta = $_POST['insta'];
    $inprk = $_POST['inprk'];
    $inbr = $_POST['inbr'];
    $inmu = $_POST['inmu'];
    $inpro = $_POST['inpro'];
    $inco = $_POST['inco'];
    $inpc = $_POST['inpc'];
    $inpbcb = $_POST['inpbcb'];
    $incr = $_POST['incr'];
    $insen = $_POST['insen'];
    $intds = $_POST['intds'];
    $intde = $_POST['intde'];
    $query = "INSERT INTO indb (`inid`, `inln`, `infn`, `inmn`, `inbd`, `ingen`, `insta`, `inprk`, `inbr`, `inmu`, `inpro`, `inco`, `inpc`, `inpbcb`, `incr`, `insen`, `intds`, `intde`) 
    VALUES (:inln, :infn, :inmn, :ingen, :inbd, :insta, :inprk, :inbr, :inmu, :inpro, :inco, :inpc, :inpbcb, :incr, :insen, :intds, :intde)";
    $query_run = $pdo->prepare($query);

    $data = [
        ':intde' => $intde,
            ':intds' => $intds,
            ':insen' => $insen,
            ':incr' => $incr,
            ':inpbcb' => $inpbcb,
            ':inpc' => $inpc,
            ':inco' => $inco,
            ':inpro' => $inpro,
            ':inmu' => $inmu,
            ':inbr' => $inbr,
            ':inprk' => $inprk,
            ':insta' => $insta,
            ':inbd' => $inbd,
            ':ingen' => $ingen,
            ':inmn' => $inmn,
            ':inln' => $inln,
            ':infn' => $infn
             ];
    $query_execute = $query_run->execute($data);
    if($query_execute){
        //$_SESSION['message'] = "Insert Successfully";
        header('Location:aihome.php');
        exit(0);
    }else{
       // $_SESSION['message'] = "Not Insert ";
        header('Location:aihome.php');
        exit(0);
    }
}


?>