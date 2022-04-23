<?php 

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "veysel.rateboglu@st.uskudar.edu.tr";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email from: ".$name.".\n\n".$message;

    mail($mailfrom , $txt , $headers);
    header("Location: index.php?mailsend");
}
