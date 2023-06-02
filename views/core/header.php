<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
          <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
          <title>
          <?php $currentSite = substr($request, strrpos($request, '/') + 1);
                $currentSite = "Sometitle " . $currentSite;
                echo $currentSite;
          ?>
          </title>

  	</head>
	<body>
		<?php echo $_SESSION['site'] ?>
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  		<a class="navbar-brand" href="#">Navbar</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/index.php" ? "active" : "" ?>" href="/">Home</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/authors.php" ? "active" : "" ?>" href="/pong">Game 1</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/courses.php" ? "active" : "" ?>" href="/adofai">Game 2</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/api.php" ? "active" : "" ?>" href="/api">Api</a>
	      			<?php 
                        if (!isset($_SESSION["user_id"])) {
                            echo "<div class='text-end'>
                                      <button type='button' class='btn btn-outline-light me-2' onclick=\"location.href='/login';\">Login</button>
                                      <button type='button' class='btn btn-warning' onclick=\"location.href='/register';\">Register</button>
                                  </div>";
                        } else {
                        echo "<div class='text-end'>
                                                              <button type='button' class='btn btn-outline-light me-2' onclick=\"location.href='/logout';\">Logout</button>
                                                          </div>";
                           
                        }
                    ?>
                   </div>        
	    		</div>
	  		</div>
		</nav>
<style>
    .text-end{
    text-align: right;
    colour : white;
        position: fixed;
        right: 5%;
    }
    </style>