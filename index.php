<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>P2 - xkcd Password Generator</title>
    <?php require 'logic.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

  </head>

  <body>
       
        <h1>P2 - xkcd Password Generator</h1>
      <p>Apparently you have been making your passwords too complicated. 
</p><p>This comic strip below explains why the passwords you've created in the past are both difficult to remember and easy for computers to hack.</p><p>Let's fix that by generating a new, simpler password, shall we?</p>
      <a href="http://imgs.xkcd.com/comics/password_strength.png" target="_blank"><img src="http://imgs.xkcd.com/comics/password_strength.png"></a>
        
          <form method='POST' action='index.php'>
            <div class="form-group">
              <div id="error">
                <?php
                  echo $errorMessage;
                ?>
              </div>
              <label for="numberOfWords">First, Choose The Number of Words You Want in Your Password</label><br><br>
              <input name="numberOfWords" type="number" class="form-control" id="Number Of Words" placeholder="1,2,3, or 4"> 
                        </div><br>
            <button type="submit" class="btn btn-primary">Create My Unique Individual Password</button>
          </form>

          <h2>You're Unique Individual Password is:</h2>
            <?php
                { 
                  echo $passwordUnique;
                }
              ?>
      
            <h3>Thank you for visiting.</h3>
      
      
      <footer class="footer">
        <p id="footer">&copy; Joseph Lee Produced for CSCI E-15 Sept 22, 2015</p>
      </footer>
    
      
  </body>
</html>