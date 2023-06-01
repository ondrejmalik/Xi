<?php
include 'DBC.php';
if (empty($_POST["name"]) || empty($_POST["password"])) {
    header('Location: /index');
    exit();
}
echo 'br1';

var_dump ($_POST['formType']);
echo 'br2';
    $formType = $_POST['formType'];
    
    if($formType === "login") {
    echo 'br3';
        verifyUser($_POST["name"], $_POST["password"]);
    } elseif($formType === "register") {
       echo 'br3';
        // Handle registration logic
        insertUser($_POST["name"], $_POST["password"]);
    } else {
        header('Location: /index');
            exit();
    }




function verifyUser($username, $password){
    $connection = DBC::getConnection();
    $statement = $connection->prepare("SELECT 1 id, username, password FROM credentials where username = ?");
    $statement->bind_param("s", $username);
    $statement->execute();
    $result = $statement->get_result();
    if($result->num_rows > 0 && $statement->num_rows <= 1){
        $user = $result->fetch_all()[0];
        if(password_verify($password, $user[2])){
            $_SESSION["user_id"] = $user[0];
            $_SESSION["user_name"] = $user[1];
            header("Location: /");
            return;
        }
    }
    $_SESSION["error"] = "Invalid login";
    header("Location: /spatne");
}

function insertUser($username, $password)
{
       echo 'br3';
    $username = $username;
    $password = password_hash($password, PASSWORD_DEFAULT);

    $connection = DBC::getConnection();
    $statement = $connection->prepare("INSERT INTO credentials (username, password) VALUES (?, ?)");
    $statement->bind_param("ss", $username, $password);
           echo 'br3';
     $statement->execute();
     header("Location: /login");
}
?>