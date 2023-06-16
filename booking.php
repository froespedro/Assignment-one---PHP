<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking</title>
  <!-- External Stylesheets -->
  <link rel="stylesheet" href="styles/styles.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./img/Paw_Print.png">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <!-- Header section -->
  <header>
    <!-- Navigation bar -->
    <nav>
      <img class="logo" src="img/Paw_Print.png" alt="Dog's paw image">
      <ul>
        <li><a href="index.php">About Us</a></li>
        <li><a href="booking.php">Book Online</a></li>
      </ul>
    </nav>
  </header>
  <!-- Main section -->
  <main> 
    <section class="form-section">
      <form method="post">
        <fieldset>
          <label for="pet-name">Pet's Name:</label>
          <input type="text" id="pet-name" name="pet_name" required>
          
          <label for="pet-specie">Pet's Specie:</label>
          <select id="pet-specie" name="pet_specie" required>
            <option value="">Select Pet's Specie</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
            <option value="rabbit">Rabbit</option>
            <option value="hamster">Hamster</option>
          </select>

          <label for="breed">Pet's Breed:</label>
          <input type="text" id="breed" name="pet_breed" required>

          <label for="age">Pet's Age:</label>
          <input type="number" id="age" name="pet_age" min="0" required>
        
          <label for="weight">Weight (in kg):</label>
           <input type="number" id="weight" name="pet_weight" min="0" step="0.1" required>
                       
        </fieldset> 
        <input type="submit" value="Submit" />
      </form>
      <p class="view_submission"><a href="view.php">View submission</a></p>
        </section>
       
        <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
                            $pet_name = $_POST['pet_name'];
                            $pet_specie = $_POST['pet_specie'];
                            $pet_breed = $_POST['pet_breed'];
                            $pet_age = $_POST['pet_age'];
                            $pet_weight = $_POST['pet_weight'];
							$res   = $database->create($pet_name,$pet_specie, $pet_breed, $pet_age, $pet_weight);
							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
         
          </main>
  <!-- Footer section -->
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
<script src="src/app.js"></script>
</body>
</html>