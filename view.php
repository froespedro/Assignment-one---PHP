<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/x-icon" href="./img/Paw_Print.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
	<header>
	<nav>
            <img class="logo" src="img/Paw_Print.png" alt="Dog's paw image">
            <ul>
                <li><a href="index.php">About Us</a></li>
                <li><a href="booking.php">Book Online</a></li>
            </ul>
        </nav>
  </header>

  <main>
<div class="container">
	<div class="row">
		<table class="table">
			<tr>
					<th>#</th>
                    <th>Pet's Name</th>
                    <th>Pet's Specie</th>
                    <th>Pet's Breed</th>
                    <th>Pet's Age</th>
                    <th>Pet's Weight</th>
                    
			</tr>
			<?php
				while($r = mysqli_fetch_assoc($res)){
			?>
					<tr>
						<td><?php echo $r['pet_id']; ?></td>
						<td><?php echo $r['pet_name']; ?></td>
            	<td><?php echo $r['pet_specie'] ?></td>
						<td><?php echo $r['pet_breed'] ?></td>
						<td><?php echo $r['pet_age']; ?></td>
            <td><?php echo $r['pet_weight']; ?></td>
					</tr>
				<?php
				}
			?>
		</table>
	</div>
</div>
</main>


<footer>
        <div class="footer_container">
        
        
            <div class="footer_column">
            <ul>
              <li><a href="index.php">About Us</a></li>
              <li><a href="booking.php">Book Online</a></li>
              <li><a href="view.php">View Submission</a></li>
            </ul>
          </div>
          <div class="footer_column">
          
            <p>+1 (647) 123-1234</p>
            <p>pawfecthotel@gmail.com</p>
            <p>123 Street Toronto, On</p>
          </div>
       
       
        </div>
      </footer>
    

</body>
</html>
