<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pawfect Hotel</title>
  <!-- External Stylesheets -->
  <link rel="stylesheet" href="./styles/styles.css">
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
        <div class="hotel_intro">
          <h1>Pawfect Hotel</h1>
          <p>Where your pet will feel at home away from home!</p>
        </div>
        <img src="./img/pexels-nancy-guth-850602.jpg" class="intro_image" alt="dogs picture">
        <div class="text-center">
          <button class="button" onclick="location.href='booking.php'">Book Online</button>
        </div>
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
      <!-- JavaScript -->
    <script src="src/app.js"></script>
</body>
</html>