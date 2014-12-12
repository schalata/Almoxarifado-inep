<?php
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','root','schalata');
$db = mysql_select_db('bi_server');
$query_select = "SELECT login FROM admin WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='usuarioad.php';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='usuario.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO admin (login,senha) VALUES ('$login','$senha')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='usuario.php'</script>";
                }
            }
        }

?>