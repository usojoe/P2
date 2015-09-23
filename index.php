<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>P2 - xkcd Password Generator</title>
    <?php require 'logic.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

  </head>

  <body>
       <div id="container">
        <h1>P2 - xkcd Password Generator</h1>
           
      <p>Apparently you have been making your passwords too complicated. 
</p><p>This comic strip below explains why the passwords you've created in the past are both difficult to remember and easy for computers to hack.</p>

      <a href="http://imgs.xkcd.com/comics/password_strength.png" target="_blank"><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="comicstrip"></a>
      
      <p>Let's fix that by generating a new, simpler password, shall we?</p><br>
        
          <form method='POST' action='index.php'>
            <div class="form-group">
              <div id="error">
                <?php
                  echo $errorMessage;
                ?>
              </div>
              <p>First, Choose The Number of Words You Want in Your Password</p><br><br>
              <input name="numberOfWords" type="number" class="form-control" id="onlyinput" placeholder="1,2,3, or 4 (Max 4)"> 
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
    </div>
      
  </body>
</html>