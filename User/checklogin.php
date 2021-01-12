<?php
session_start();
include('connect.php');

?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login ....</title>
    <STYLE type=text/css>
        A:link {
            color: #0000cc;
            text-decoration: none
        }

        A:visited {
            color: #0000cc;
            text-decoration: none
        }

        A:hover {
            color: red;
            text-decoration: none
        }
    </STYLE>
    <style type="text/css">
        <!--
        small {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 8pt;
        }

        input,
        textarea {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 9pt;
        }

        b {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11pt;
        }

        big {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20pt;
        }

        strong {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11pt;
            font-weight: extra-bold;
        }

        font,
        td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11pt;
        }

        BODY {
            font-size: 12pt;
            font-family: Arial, Helvetica, sans-serif;
        }
        -->
    </style>

</head>

<body>
    <center>

        <?php
        echo $_POST["hfpassword"];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $username = $_POST['hfemail'];
            $hfpassword = $_POST['hfpassword'];

            $sql_login = "select * from tr_user where username = '$username' AND userpassword = '$hfpassword'";
            $result = $conn->query($sql_login);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $datetime_login = date("d/m/Y H:i:s");

                    if ($row['userstats'] == "Trainer") {
                        $_SESSION['login'] = "true";
                        $_SESSION['userstats'] = "Trainer";
                        $_SESSION['username'] = $row['username'];
                        echo "<meta http-equiv='refresh' content='0;url=home.php'>";
                    }
    
                    if ($row['userstats'] == "Customer") {
                        $_SESSION['login'] = "true";
                        $_SESSION['userstats'] = "Customer";
                        $_SESSION['username'] = $row['username'];
                        echo "<meta http-equiv='refresh' content='0;url=Customer/index.php'>";
                    }
                    if ($row['userstats'] == "Admin") {
                        $_SESSION['login'] = "true";
                        $_SESSION['userstats'] = "Admin";
                        $_SESSION['username'] = $row['username'];
                        echo "<meta http-equiv='refresh' content='0;url=home.php'>";
                    }
                }

                // output data of each row
             
            } else {
                echo "<script>alert(\"คุณกรอก Username หรือ Password ผิดพลาด !!\");</script>";
                echo "<meta http-equiv='refresh' content='0;url=index.php'>";
            }
            $conn->close();
      
        }


        ?>
</body>

</html>