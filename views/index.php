<?php if ($_SESSION["user_name"]) {
    echo "<h2 id='userLoginText'>Logged as " . $_SESSION['user_name']."</h2><br>";
} ?>
  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/home-icon.png" alt="" width="128" height="128">
    <h1 class="display-5 fw-bold text-body-emphasis">Home Page</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut tempus purus at lorem. Duis pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin in tellus sit amet nibh dignissim sagittis.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <div class="button-container">
          <div>
            <button class="btn btn-primary" id="menu-button" onclick="location.href='/pong'">Pong</button>

            <button class="btn btn-primary" id="menu-button" onclick="location.href='/adofai'">Adofai</button>

          </div>
        </div>
      </div>
    </div>
  </div>
    <style>
      /* Custom CSS to center the container */
      .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      #menu-button {
        margin: 20px;
        width: 150px;
        height: 50px;
        transition: all 0.3s ease-in-out;
      }
      #menu-button:hover {
            transform: scale(1.1);
            }
        #userLoginText{
         margin : 15px;
        } 
    </style>
