<?php
require 'includes/database.php';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            width: 98vw;
            height: 100%;
            box-sizing: border-box;
            display: flex;
            margin: 0 auto;
            justify-content: center;
            flex-direction: column;
        }
        table{
            align-items: center;
            border: 10px;
            width: 80vw;
            color: rgba(0, 0, 0, 0.93);

        }
        tr:nth-child(odd){
            background-color:rgba(68, 148, 68, 0.6);
        }
        tr:nth-child(even){
            background-color: rgba(128, 128, 128, 0.61);
        }
        header{
            margin: 9px 9px;
            color: rgba(68, 148, 68, 0.62);
            border: solid 1px rgba(68, 148, 68, 0.62);
        }

       .logout{
           margin-right: 15px;
       }
    </style>
</head>
<body>
<header style="display: flex;justify-content: space-around">
    <h1 style="align-text:center"> RUAHA SECONDARY SCHOOL ALUMNI LIST   </h1>
</header>

<h3 style="text-align: center">
Welcome tour Alumni community, the following are the Alumni details;
</h3>
</body>


<?php
session_start();
if(isset($_POST['submit']))
    //if(empty($_SESSION['uname']))
{
    header('Location: alumni.php');
}

?>
<table border ="1" cellspacing="0" cellpadding="8" align="center">
    <tr>
        <th>S.N</th>
        <th>Alumnus name</th>
        <th>Year of Enrolment</th>
        <th>Year of Graduation</th>
        <th>Head teacher Name at enrolment</th>
        <th>Head teacher Name at graduation</th>
        <th>Famous Teacher</th>
        <th>Result</th>
        <th>Current Occupation</th>
        <th>Address</th>
        <th>Email</th>
        <th>Mobile Number</th>
    </tr>
    <?php


    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = "SELECT * FROM alumn";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $sn=1;
        while($data = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $sn; ?> </td>
                <td><?php echo $data['fullname']; ?> </td>
                <td><?php echo $data['enrolledyear']; ?> </td>
                <td><?php echo $data['graduationyear']; ?> </td>
                <td><?php echo $data['headatenrollment']; ?> </td>
                <td><?php echo $data['headatgraduation']; ?> </td>
                <td><?php echo $data['famousteacher']; ?> </td>
                <td><?php echo $data['result']; ?> </td>
                <td><?php echo $data['currentoccupation']; ?> </td>
                <td><?php echo $data['address']; ?> </td>
                <td><?php echo $data['email']; ?> </td>
                <td><?php echo $data['mobile']; ?> </td>

            </tr>

            <?php
            $sn++;}} else { ?>
        <tr>
            <td><button><a href=index.php>Log Out</a></button></td></tr>
        <tr>
            <td colspan="6">No data found</td>
        </tr>

    <?php }




    ?>
</table>

</html>
