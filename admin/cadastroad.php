<?php
 
$loginm = $_POST['loginm'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','schalata');
$db = mysql_select_db('bi_server');
$query_select = "SELECT loginm FROM admin WHERE loginm = '$loginm'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['loginm'];
 
    if($loginm == "" || $loginm == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='usuarioad.php';</script>";
 
        }else{
            if($logarray == $loginm){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='usuarioad.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO admin (loginm,senha) VALUES ('$loginm','$senha')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='usuario.php'</script>";
                }
            }
        }

?>