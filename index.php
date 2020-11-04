<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice MySQL</title>
</head>
<body>
	<table>
    <thead><tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
    </tr></thead>
    <tbody>
    <?php
    $dbhost = "10.45.2.149";
    $db = "labege";
    $dbuser = "labege";
    $dbpw = "dwwm2020";
        
    $con = mysqli_connect($dbhost, $dbuser, $dbpw, $db);

	if (!$con) {
	die("Erreur : " . mysqli_connect_error());
	}
	//else {
	//echo('ça marche!');
	//}

	$devsql = "SELECT * FROM developer";
	$res = mysqli_query($con, $devsql);
	while ($dev = mysqli_fetch_assoc($res)) {
    
    ?>
    
    <tr>
    <td><?php echo $dev['id']; ?></td>
    <td><?php echo $dev['firstname']; ?></td>
    <td><?php echo $dev['lastname']; ?></td>
    <td><?php echo $dev['email']; ?></td>
    </tr>
    
    <?php }
    ?>
    </tbody>
    </table>

</body>
</html>
