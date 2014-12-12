<?php
    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('localhost','root','schalata');
    $db = mysql_select_db('bi_server');
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM aluno WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
			$verifica2 = mysql_query("SELECT * FROM srs_requester WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
			/*
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
                    die();
                }else{
                    setcookie("login",$login,time()+3600);
                    header("Location:main_user.php");
                }
			// */
				if (mysql_num_rows($verifica)!=0){
					setcookie("login",$login,time()+3600);
                    header("Location:main_user.php");
				} elseif (mysql_num_rows($verifica2)<=0){
					echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
                    die();
				} else {
					setcookie("login",$login,time()+3600);
                    header("Location:main_user.php");
				}
        }
				
?>
