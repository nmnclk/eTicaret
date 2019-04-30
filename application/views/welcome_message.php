<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>


<ul>
    <?php foreach ($rows as $row) { ?>
        <li> <?php echo $row->ilanBaslik; ?> </li>
    <?php } ?>
</ul>

</body>
</html>
