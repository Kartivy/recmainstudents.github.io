<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index2.html?error');
       }
       else
       {
           $to = "kartikyadav177@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index2.html?success");
           }
       }
    }
    else
    {
        header("location:index2.html");
    }
?>
