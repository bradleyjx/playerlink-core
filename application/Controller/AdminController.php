<?php

namespace Mini\Controller;

class AdminController
{

    public function index()
    {
        $password = PLC_UPLOADER_PASSWORD;
        $nonsense = sha1(APP);

        if (isset($_COOKIE[sha1(APP . '2I0psHXShzWhGMVGB9HMFkWoVy5jbOn3o351ZpYQo0wXtxvRkxX73wHAohb20SC')])) {
            if ($_COOKIE[sha1(APP . '2I0psHXShzWhGMVGB9HMFkWoVy5jbOn3o351ZpYQo0wXtxvRkxX73wHAohb20SC')] == md5($password . $nonsense)) {

                $messages = "";

                if(!empty($_FILES['uploaded_file']))
                {
                    $path = APP . "Upload/";
                    $path = $path . "Upload.txt";
                    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                        $messages = "The file ".  basename( $_FILES['uploaded_file']['name']). " has been uploaded";
                    } else{
                        $messages = "There was an error uploading the file, please try again!";
                    }
                }

                // load views. within the views we can echo out $songs and $amount_of_songs easily
                require APP . 'view/_templates/admin/header.php';
                require APP . 'view/admin/uploader.php';
                require APP . 'view/_templates/admin/footer.php';

                exit;
            } else {
                echo "Bad Cookie.";
            }
        }

        if (isset($_GET['p']) && $_GET['p'] == "login") {
            if ($_POST['keypass'] != $password) {
                echo "Sorry, that password does not match.";
                exit;
            } else if ($_POST['keypass'] == $password) {
                setcookie(sha1(APP . '2I0psHXShzWhGMVGB9HMFkWoVy5jbOn3o351ZpYQo0wXtxvRkxX73wHAohb20SC'), md5($_POST['keypass'] . $nonsense));
                header("Location: " . URL . "admin");
                exit;
            } else {
                echo "Sorry, you could not be logged in at this time.";
            }
        }


        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/admin/header.php';
        require APP . 'view/admin/login.php';
        require APP . 'view/_templates/admin/footer.php';
    }

}
