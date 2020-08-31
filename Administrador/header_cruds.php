<?php  
session_start();

if(!isset($_SESSION["usuario"])){
    header("location: ../../WDELN.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaNave</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="http://allfont.es/allfont.css?fonts=ethnocentric" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../css/estilo.css">
</head>
<body id="page-top" class="mt-2" style="background-image: url('../../assets/img/fondos/Principal.jpg');">
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-4" style="background-image: url('../../assets/img/bg-masthead.jpg');" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../Administrador.php"><img src="../../assets/img/logo.png" class="zoom" style="width:200px;" alt="LaNave"></a>                
            </div>
        </nav><br><br><br>
    </header>
