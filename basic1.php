<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Add New Record in MySQL Database</title>
</head>
<body>
<?php
if(isset($_POST['add']))
{
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
    {
        die('Could not connect: ' . mysql_error());
    }
    if(! get_magic_quotes_gpc() )
    {
        $name = addslashes ($_POST['name']);
   
    if(! $retval )
    {
        die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysql_close($conn);
}
else
{
    ?>
    <form method="post" action="<?php $_PHP_SELF ?>">
        <table width="400" border="5" cellspacing="1" cellpadding="2">
            <tr>
                <td width="100"> Name</td>
                <td><input name="name" type="text" id="name"></td>
            </tr>
            <tr>
                <td width="100"> regid </td>
                <td><input name="regid" type="number" id="regid"></td>
            </tr>
            <tr>
                <td width="100">age</td>
                <td><input name="age" type="number" id="age"></td>
            </tr>
            <tr>
                <td width="100">dob</td>
                <td><input name="dob" type="date" id="dob"></td>
            </tr>
            <tr>
                <td width="100">phoneno</td>
                <td><input name="phoneno" type="number" id="phoneno"></td>
            </tr>
            <tr>
                <td width="100"> </td>
                <td> </td>
            </tr>
            <tr>
                <td width="100"> </td>
                <td>
                    <input name="add" type="submit" id="add" value="calculate">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>
</body>
</html>
