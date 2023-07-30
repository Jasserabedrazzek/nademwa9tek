<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" href="home.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
        
        
        .event-table {
            width: 100%;
            border-collapse: collapse;
            }

        .event-table th,
        .event-table td {
          border: 1px solid black;
          padding: 8px;
          text-align: left;
          color: red;
        }
/* Default styles for inputs */
        .events {
          width:85%;
          padding: 8px;
          border: 1px solid #ddd;
          font-size: 18px
        }

/* Styles for desktop */
        @media (min-width: 901px) {
           body {
            background-image: url('5190234.jpg');
            background-size: cover;
                }
          .events {
            width:85%;
            padding: 8px;
            border: 1px solid #ddd;
            font-size: 18px;
          }
        }


/* Styles for mobile */
/* Styles for mobile */
      @media (max-width: 767px) {
        .events {
          /* Add mobile-specific styles here */
          width: 150px;
          padding: 8px;
          border: 1px solid #ddd;
          font-size: 18px;
        }
      }

/* CSS for mobile */
        @media (max-width: 900px) {
  body {
      background-image: url('5190234 (2).jpg');
      background-size: cover;
        }
   
  .events {
     
    width: 150px;
    padding: 8px;
    border: 1px solid #ddd;
    font-size: 18px;
  }
  .event-table {
    display: block;
    overflow-x: auto;
  }

  .event-table th,
  .event-table td {
    white-space: nowrap;
  }
}

/* Add the following CSS rules to center the submit buttons */
form {
  display: flex;
  flex-direction: column;
  align-items: center;
}

input[type="submit"] {
  /* Your existing styles */
  background-color: #4caf50;
  color: white;
  padding: 8px 16px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  border-radius: 4px;
  /* Additional styles for centering */
  margin-top: 16px;
  align-self: center;
  display: flex;
}
#load {
  background-color: #4caf50;
  color: white;
  padding: 8px 16px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  border-radius: 4px;
  margin-top: 16px;
  align-self: center;
  text-decoration: none;
}
#load:hover, input[type="submit"]:hover {
  background-color: #4caf20;
}

    </style>
</head>
<body>
    <header>
        <nav>
            <div class="navbar">
                <div class="logo-container">
                <a href="#" id="profileLink"><img src="user.png" alt="" class="user"></a>
                </div>
                <button class="toggle-button" onclick="toggleNavbar()">☰</button>
                <ul id="navbar-links">
                    <li><a href="chronometre.html" >Pomodoro Technique</a></li>
                    <li><a href="http://www.bacweb.tn/sujet2021.html">Devoirs bac principal 2021</a></li>
                    <li><a href="https://www.devoirat.net/">Devoirs et Series</a></li>
                    <li><a href="#DevTuinisian">DevTunisian</a></li>
                    <li><a href="index.html" class="logout">Login out</a></li>
                </ul>
            </div>
        </nav>
    </header>
    </div>
    <form class="save" method="post" action="tab.php">
      <table class="event-table">
          <thead>
              <tr>
                  <th>N°</th>
                  <th>Event</th>
                  <th>Time</th>
              </tr>
          </thead>
          <tbody>
              <!-- Rows for events 1 to 15 -->
              <?php for ($i = 1; $i <= 15; $i++) { ?>
              <tr>
                  <td><?php echo $i; ?></td>
                  <td><input type="text" class="events" id="event_<?php echo $i; ?>" name="events[<?php echo $i; ?>][name]"></td>
                  <td><input type="time" class="events" id="event_time_<?php echo $i; ?>" name="events[<?php echo $i; ?>][time]"></td>
              </tr>
              <?php } ?>
          </tbody>
      </table>
      <input type="hidden" id="id_user" name="id_user" value="">
      <input type="submit" value="Enregistrer le tableau" name="save_ev">
      <a href="#" id="load">Votre Tableau</a>
      <br><br>
    </form>
  
      <script src="home.js"></script>
      <script>
    // Get the userID from the URL parameter 'userID'
    var userID = getURLParameter('userID');

    // Set the href attribute of the profileLink
    var profileLink = document.getElementById('profileLink');
    
    profileLink.href = 'profile.html?userID=' + userID;

    function getURLParameter(name) {
        // JavaScript function to get the value of a URL parameter by name
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
</script>
      <script>
        function getURLParameter(name) {
            // JavaScript function to get the value of a URL parameter by name
            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            var results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        }
    
        // Get the userID from the URL parameter 'userID'
        var userID = getURLParameter('userID');
    
        // Set the userID value to the hidden input field
        document.getElementById('id_user').value = userID;
    </script>
    
    

</body>
</html>
