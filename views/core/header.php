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
	<body style = " padding: 0px;">
	  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  		<a class="navbar-brand" href="#">Navbar</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/index.php" ? "active" : "" ?>" href="/">Home</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/authors.php" ? "active" : "" ?>" href="/pong">Pong</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/courses.php" ? "active" : "" ?>" href="/adofai">Adofai</a>
	      			<a class="nav-item nav-link <?= $_SESSION["site"] === "/views/api.php" ? "active" : "" ?>" href="/api">Api</a>
	      			
                   </div>        
	    		</div>
	  		</div>
	  		<div class='text-end'>
            	      			    <div id="switch-container">
                                            <label class="switch">
                                                    <input type="checkbox" id="darkModeSwitchCheckbox" onclick="switchMode();">
                                                    <span class="slider round"></span>
                                            </label>
                                    </div>
                                <style>
                                #switch-container {
                                width : 60px;
                                height : 34px;
                                top: 0;
                                    display: inline-block;
                                    margin: 10px;
                                    }
                                    body {
                                        padding: 25px;
                                        background-color: white;
                                        color: black;
                                        font-size: 25px;
                                    }
                                
                                    .dark-mode {
                                        background-color: #1b1a1f;
                                        color: white;
                                    }
                                    
                                    .switch {
                                      position: relative;
                                      display: inline-block;
                                      width: 60px;
                                      height: 34px;
                                    }
                                    
                                    .switch input { 
                                      opacity: 0;
                                      width: 0;
                                      height: 0;
                                    }
                                    
                                    .slider {
                                      position: absolute;
                                      cursor: pointer;
                                      top: 0;
                                      left: 0;
                                      right: 0;
                                      bottom: 0;
                                      background-color: #ccc;
                                      -webkit-transition: .4s;
                                      transition: .4s;
                                    }
                                    
                                    .slider:before {
                                      position: absolute;
                                      content: "";
                                      height: 26px;
                                      width: 26px;
                                      left: 4px;
                                      bottom: 4px;
                                      background-color: white;
                                      -webkit-transition: .4s;
                                      transition: .4s;
                                    }
                                    
                                    input:checked + .slider {
                                      background-color: #2196F3;
                                    }
                                    
                                    input:focus + .slider {
                                      box-shadow: 0 0 1px #2196F3;
                                    }
                                    
                                    input:checked + .slider:before {
                                      -webkit-transform: translateX(26px);
                                      -ms-transform: translateX(26px);
                                      transform: translateX(26px);
                                    }
                                    
                                    /* Rounded sliders */
                                    .slider.round {
                                      border-radius: 34px;
                                    }
                                    
                                    .slider.round:before {
                                      border-radius: 50%;
                                    }
                                    .text-end 
                                    {
                                    display: flex; align-items: center;
                                    }
                                </style>
                                <script>
                                checkLocalStorageValue();
                                    function switchMode() {
                                        var element = document.body;
                                         var savedValue = localStorage.getItem('theme');
                                        if (savedValue === 'light-mode') {
                                          localStorage.setItem('theme', 'dark-mode');
                                        } else {
                                          localStorage.setItem('theme', 'light-mode');
                                        }
                                        
                                        element.classList.toggle("dark-mode");
                                    }
                                    function checkLocalStorageValue() {
                                      var savedValue = localStorage.getItem('theme');
                                      var checkbox = document.getElementById('darkModeSwitchCheckbox');
                                          
                                      if (savedValue === 'dark-mode') {
                                      var element = document.body;
                                       element.classList.toggle("dark-mode");
                                       checkbox.checked = true;
                                      } else {
                                        console.log('Dark mode is not enabled.');
                                        // Perform actions for default mode
                                      }
                                    }
                                </script>
            	      			<?php 
                                    if (!isset($_SESSION["user_id"])) {
                                        echo "<button type='button' class='btn btn-outline-light me-2' onclick=\"location.href='/login';\" id='login'>Login</button>
                                                  <button type='button' class='btn btn-warning' onclick=\"location.href='/register';\" id='login'>Register</button>";
                                    } else {
                                    echo "<button type='button' class='btn btn-outline-light me-2' onclick=\"location.href='/logout';\">Logout</button>";
                                    }
                                ?>
                                </div>
		</nav>
<style>
    .text-end{
    position: relative;
    right: 0%;
    }
    #login{
    margin: 5px;
    </style>