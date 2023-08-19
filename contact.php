<?php
    $connection = mysqli_connect('localhost', 'root', '','health_contact');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $text = $_POST['text'];
        

        $request = " insert into health_contact(name,email,phone,text) values
        ('$name','$email','$phone','$text')";
        mysqli_query($connection, $request);
        header('location: Contact.html');

    }
    else{
        echo 'something went wrong try again';
        
    }
?>