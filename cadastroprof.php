<?php
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$nome = $_POST['nome'];
$materia = $_POST['materia'];
$connect = mysql_connect('localhost','root','schalata');
$db = mysql_select_db('bi_server');
$query_select = "SELECT login FROM srs_requester WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='professor.php';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login j� existe');window.location.href='professor.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO srs_requester (login,senha,nome,materia) VALUES ('$login','$senha','$nome','$materia')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usu�rio cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='professor.php'</script>";
                }
            }
        }

?>