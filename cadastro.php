<?php
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$connect = mysql_connect('localhost','root','schalata');
$db = mysql_select_db('bi_server');
$query_select = "SELECT login FROM aluno WHERE login = '$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='usuario.php';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login j� existe');window.location.href='usuario.php';</script>";
                die();
 
            }else{
                $query = "INSERT INTO aluno (login,senha,nome,matricula) VALUES ('$login','$senha','$nome','$matricula')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usu�rio cadastrado com sucesso!');window.location.href='index.php'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='usuario.php'</script>";
                }
            }
        }

?>