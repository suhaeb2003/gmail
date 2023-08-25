<?php 
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $phn=$_REQUEST["phn"];
    $msg=$_REQUEST["msg"];
    $send=$_REQUEST["send"];
    $toSend="codersuaeb@gmail.com";
    if (!empty($send)) {
        $mailHeader="Name:".$name . 
        "\r\n Email: ". $email.
        "\r\n Phone Number: ". $phn.
        "\r\n Message: ". $msg. "\r\n";

        if (mail($toSend,$name,$mailHeader)) {
            header("location:index.php?sent");
        }
    }

?>