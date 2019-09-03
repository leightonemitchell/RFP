<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Events</title>
        <meta name="description" content="Reservation/Contact.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=./css/style.css>
        

        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <header class="header">
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Ace</span> in the Hole Multisport Events</h1>
        </div>
 <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li class="current"><a href="index.html">Home</a></li>
            <li><a href="details.html">Event Details</a></li>
            <li><a href="registration.html">Registration</a></li>
              <li><a href="volunteers.html">Volunteers</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.html">Home</a>
    <a href="details.html">Event Details</a>
    <a href="registration.html">Registration</a>
    <a href="volunteers.html">Volunteers</a>
  </div>
      </div>
    </header>
        <div id="wrapper">
            
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                    First Name: <?php echo htmlspecialchars($first_name, ENT_QUOTES, 'UTF-8'); ?><br>
                    Last Name: <?php echo htmlspecialchars($last_name, ENT_QUOTES, 'UTF-8'); ?><br>
                    Email: <?php echo htmlspecialchars($email_from, ENT_QUOTES, 'UTF-8'); ?><br>
                    Telephone: <?php echo htmlspecialchars($telephone, ENT_QUOTES, 'UTF-8'); ?><br>
                    Comments: <?php echo htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
            <footer>
      <p>Ace in the Hole Multisport Events, Copyright &copy; 2019</p>
        <div class="box">
          <a href="http://www.facebook.com">
          <img src="./img/icons8-facebook-26.png">
        </a>
        <a href="http://www.twitter.com">
        <img src="./img/icons8-twitter-30.png">
      </a>
          </div>
    </footer>
       <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
  </body>
        </div>
    </body>
</html>