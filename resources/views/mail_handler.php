<?php
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['message'];

        $to='ronaldoblackviper@gmail.com';
        $subject='Dari Website Penjualan Aplikasi';
        $message="Nama:".$name."\n"."Nomor Telpon".$phone."\n\n"."Isi Pesan :"."\n\n".$msg;
        $header="Dari: ".$email;

        if(mail($to, $subject, $message, $header)){
            echo "Pengiriman email berhasil! Terima Kasih"." ".$name." Kami akan membalas secepatnya.";
        }else{
            echo "Ada yang salah!";
        }
    } 
?>