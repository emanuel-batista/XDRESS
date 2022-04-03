<?php
    session_start();
    include "conexao-bd.php";
    if(isset($_POST['usuario']) && isset($_POST['senha'])){
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $login = validate($_POST['usuario']);
        $senha = validate($_POST['senha']);

        if(empty($login)){
            header("Location: login.php?error='Nome de usuário amore'");
            exit();

        }elseif (empty($senha)) {
            header("Location: login.php?error='Senha amore'");
            exit();
        }else {

            $sql = "SELECT * FROM usuario WHERE usuario='$login' AND senha='$senha'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if ($row['usuario'] === $login && $row['senha'] === $senha) {
                    $SESSION['usuario'] = $row['usuario'];
                    $SESSION['id'] = $row['id'];
                    header("Location: cadastro-produtos.php");
                    exit();



                }else{
                    header("Location: login.php?error='Nome de usuário ou senha incorretos'");
                    exit();
                }
                
            }else{
                header("Location: login.php?error='Nome de usuário ou senha incorretos'");
                exit();
            }
        }

    }else{
        header("Location: login.php");
        exit();
    }