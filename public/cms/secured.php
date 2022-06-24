<?php
require '../../includes/database.php';
$sql = "SELECT * FROM user";
 $result = mysqli_query($connection,$sql);
    if($result === false){
    echo mysqli_error($connection);
    }
    else{
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
   foreach($users as $data){

   }
    }

    ?>

<!DOCTYPE>
<html>
<head>
    <title>
        Pull data from database
    </title>
</head>
<body>
<table>


    <?php if($users ===null): ?>
        <p>no data is found</p>
    <?php else: ?>
        <h2>Hello </h2>
        <p> Welcome to your profile</p> <br>
        <table border='1'>
            <tr>
                <th>
                    UserID
                </th>
                <th>
                    First Name
                </th>
                <th>
                    Middle Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Username
                </th>
                <th>
                    Date Of Birth
                </th>
                <th>
                    CV
                </th>
                <th>
                    Email
                </th>
                <th>
                    Phone
                </th>
                <th>
                    Social
                </th>
            </tr>
            <?php foreach($users as $data): ;?>
            <tr>

                <td><?= $data["userid"]; ?></td>
                <td><?=  $data["FirstName"]; ?></td>
                <td><?=  $data["MiddleName"]; ?></td>
                <td><?=  $data["Lastname"]; ?></td>
                <td><?=  $data["Username"]; ?></td>
                <td><?=  $data["DateofBirth"]; ?></td>
                <td><?=  $data["CV"]; ?></td>
                <td><?=  $data["Email"]; ?></td>
                <td><?=  $data["Phone"]; ?></td>
                <td><?=  $data["Social"]; ?></td>

            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif ?>

</table>
<?php mysqli_free_result($result);?>
</body>
</html>
<?php mysqli_close($connection);?>