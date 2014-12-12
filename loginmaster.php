<?php
    $loginm = $_POST['loginm'];
    $entrou = $_POST['entrou'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('localhost','root','schalata');
    $db = mysql_select_db('bi_server');
        if (isset($entrou)) {
                     
            $verifica = mysql_query("SELECT * FROM admin WHERE loginm = '$loginm' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
                    die();
                }else{
					setcookie("ammo", $loginm, time()+3600);
                    header("Location:main.php");
                }
        }
?>
