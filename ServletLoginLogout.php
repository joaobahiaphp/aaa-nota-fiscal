<?php

    @session_start();
    include("Models/UsuariosDAO.php");

    if(isset($_POST['function'])){
        switch($_POST['function']){

            case 'login':
                if( isset($_POST['usuario']) && isset($_POST['senha']) ){
    
                    if($_POST['usuario']==""){
                        header("Location:index.php");
                    }
                
                    if($_POST['senha']==""){
                        header("Location:index.php");
                    }
        
                    $login = new UsuariosDAO();
        
                    $result = $login->getAcesso($_POST['senha'],$_POST['usuario']);
        
                    $login->__destruct();
        
                    if($result){
                        $_SESSION['token'] = $result;
                    }
        
                    header('location:index.php');
                }
            break;
    
            case "modulo":
                switch($_POST['modulo']){
                    case "nf":
                        $_SESSION['module'] = "nf";
                        header("location:index.php");
                    break;
                    
                    case "dp":                    
                        $_SESSION['module'] = "dp";
                        header("location:index.php");
                    break;
                }
            break;
    
        }
    }

    if(isset($_GET['function']) && $_GET['function']=="logout"){
        unset($_SESSION['token']);
        @session_destroy();
        header("location:index.php");
    }

?>