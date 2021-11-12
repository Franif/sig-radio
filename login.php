<?php
session_start();

include('config.php');

    if(isset($_POST["login"])){
        if(isset($_POST["nip"]) && isset($_POST["password"]) ){
            $nip = trim($_POST["nip"]);
            $password = trim($_POST['password']);
            $hash = password_hash(trim($_POST['password']));

            $query = $db->query("select * from user_new where id_profile= '".$nip."' ");
            if($query->num_rows === 1){
                $user= $query->fetch_assoc();
                if(password_verify($password, $user["password"])){
                    $_SESSION['loggedin'] = true;
                    $_SESSION['nip'] = $user["id_profile"];
                    $_SESSION['level'] = $user["id_level_user"];
                    header('Location:index.php');
                    exit;
                }else{
                    header("location:login.php?error=Maaf, username atau password anda salah");
                }
            }else{
                header("location:login.php?error=Maaf, tidak ada record");
            }
        }else{
            header("location:login.php?error=Harap isi username dan password");
        }
    }else{
        //do something
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="login.css">

            <!-- <script type="text/javascript" src="jquery-1.7.2.js"></script>

            <script type="text/javascript">
            $(document).ready(function(){
                $('#login').click(function() {
                    $('#container').submit();
                });
            });
            </script> -->
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <label>Username</label><br>
                <input id ="container form input" type="text" name="nip" value="" />
                <label>Password</label><br>
                <input id ="container form input" type="password" name="password" />
                <button type="submit" name="login">Log in</button>
            </form>
        </div>
    </body>
</html>
