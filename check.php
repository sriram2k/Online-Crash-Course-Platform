<?php

$conn = mysqli_connect("sg3plcpnl0100.prod.sin3.secureserver.net", "velammal", "veccse", "csevecdept");

$mobno = $_POST['mobile'];
$mail = $_POST['email'];

$sql = "SELECT * FROM registration_details WHERE (email ='$mail' AND (mobileno1='$mobno'))";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0)
{
    while ($row = mysqli_fetch_assoc($res))
    {
        $cou = $row["course"];
        session_start();
        $_SESSION['email'] =   $row['email'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['log-web']="allow";
        $_SESSION['log-py']="allow";

        $_SESSION['log-app']="allow";


    }
}
else
{
    header("Location:index.php?msg=error");
    exit();
}

if ($cou == "Web Development")
{
    header("Location:web.php");
}
elseif ($cou == "Python")
{
    header("Location:python.php");
}
elseif ($cou == "Mobile Application Development")
{
    header("Location:app.php");
}

