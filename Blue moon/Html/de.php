
<?php
    $validate=0;
    $evalid=0;
    $evalidation=0;
    $phone=0;
    $textl=0;
    $texts=0;

    function emptys($pl){
        if(empty($pl)){
            $err="Invalid This place is required";
            echo $err;
            global $texts;
            $texts=0;
        }
        else{
            global $texts;
            $texts=0;
            return $texts;
        }
    }
    function validate($x){
        if (!preg_match('/^[A-Za-z]+$/', $x)) {
            $empty="numeric value is not allowed";
            echo $empty;
            global $validate;
            $validate =0;
            
        }
        else if($x){
            $arr=str_split($x);
            $cou=count($arr);
            if($cou>20){
                $empty="maximum allowed value is 20";
                echo $empty;
                global $validate;
                $validate =0;
                
            }
        }
        else{
            global $validate;
            $validate=1;
            return $validate;
            
        }
        
    }
    function evalid($e1,$e2){
         if($e1 !== $e2){
            $err="Emails are not the same";
            echo $err; global $evalid;
            $evalid=0;
        }
        else{
            global $evalid;
            $evalid =1;
        }
    }
    function evalidation($e){
        if($e){
            if($e){
                $che= substr($e, -10);
                if($che === "@gmail.com") {
                    global $evalidation;
                    $evalidation=1;
                }
                else{
                $emm="Email is not correct please check";
                echo $emm;
                global $evalidation;
                $evalidation=0;
                }
            }
        }
        else{
            global $evalidation;
            $evalidation=1;
            return $evalidation;
            
        }
    
    }
       
    function phone($p){
        $ca=str_split($p);
        $che=count($ca);
        if(!is_numeric($p)){
            $nuer="Invalid phone number format";
            echo $nuer; 
            global  $phone;
            $phone=0;
        }
        else if($p){
            $startWith09 = strncmp($p, "09", 2) === 0;
                $startWithPlus251 = strncmp($p, "+251", 4) === 0;

                        if ($startWith09 || $startWithPlus251) {
                            global  $phone;
                             $phone=1;
                            } 
                            else {
                                $ech= "The number does not start with '09' or '+251'";
                                echo $ech;
                                global  $phone;
                                $phone=0;
                             }
        }
     
        else{
            global  $phone;
            $phone=1;
            return $phone;
        }
    }
function textl($a){
    if($a){
        $a=str_split($a);
        $x=count($a);
        if($x>50){
            $err="maximum word allowd is 50";
            echo $err;
            global $textl;
        $textl=0;
            
        }
    }
    else{
        global $textl;
        $textl=1;
        return $textl;
    }
    }
function texts($v){
    if($v){
        $v=str_split($v);
        $x=count($v);
        if($x>150){
            $err="maximum word allowd is 150";
            echo $err;
            global $texts;
        $texts=0;
        }
    }
    else{
        global $texts;
        $texts=1;
        return  $texts=1;
    }
}
    if($validate=1 && $evalid=1 && $evalidation=1 && $phone=1 && $textl=1 && $texts=1){
        $sn="localhost";
        $us="root";
        $ps="";
        $db="contact_pages";
        $conn=mysqli_connect($sn,$us,$ps,$db);
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(isset($_POST['submit'])){
            $fname=$_POST['fn'];
            $lname=$_POST['ln'];
            $email=$_POST['em'];
            $emailc=$_POST['eml'];
            $phone=$_POST['ph'];
            $subjects=$_POST['sub'];
            $message=$_POST['messages'];
    
            }
            
    $query ="INSERT INTO `users`(`F_Name`, `L_Name`, `Email`, `P_No`, `Subjects`, `Messages`) VALUES ('$fname','$lname','$email','$phone','$subjects','$message')";

    $r=mysqli_query($conn,$query);
    }
}

    
    else{
        $err="wrond";
    }
?>