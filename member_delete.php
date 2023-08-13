


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Member</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
        <?php

        session_start();
        include("./utils/condb.php");
        include_once('./services/useSweetAlertService.php');
        include_once('./services/useUserService.php');
        $user_srv = new UseUserService($condb);
        $sweet_srv = new UseSweetAlert();

        if($_SESSION['edit_member_id']){

            $result = $user_srv->deleteUserById($_SESSION['edit_member_id']);
            
            if($result['status'] == true){
                $msg = "Delete Member Successfully. ";
                $sweet_srv->ShowPopUpSuccess($msg);
            }else{
    
                $msg = 'Delete Member Failed ';
                $msg .= $result['message'];
                $sweet_srv->showPopUpFailed($msg);
                die();
            }

            $_SESSION['edit_member_id'] = null;

        }else{
            $msg = "Sorry Session not found.";
            $sweet_srv->ShowPopUpFailed($msg);
        }

        echo '<script>';
        echo 'setTimeout(function() {
            window.location.href = "index.php";
        }, 3000)'; // 3000 milliseconds = 3 seconds
        echo '</script>';
        die();

        ?>
</body>
</html>