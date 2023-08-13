<?php

    class UseSweetAlert{



        public function __construct(){

        }


        public function ShowPopUpConfirm($message){
            echo '<script language="javascript">';
            echo 'Swal.fire({';
            echo '    title: "Are you sure?",';
            echo '    text: "Hi",';
            echo '    icon: "warning",';
            echo '    showCancelButton: true,';
            echo '    confirmButtonColor: "#3085d6",';
            echo '    cancelButtonColor: "#d33",';
            echo '    confirmButtonText: "Yes, delete it!"';
            echo '}).then((result) => {';
            echo '    if (result.isConfirmed) {';
            echo '        Swal.fire(';
            echo '            "Deleted!",';
            echo '            "Your file has been deleted.",';
            echo '            "success"';
            echo '        )';
            echo '    }';
            echo '})';
            echo '</script>';
        }


        public function ShowPopUpSuccess($message){
            echo '<script language="javascript">';
            echo 'Swal.fire({
                icon: "success",
                title: "Thank you...",
                text: "'.$message.'!",
              })';
            echo '</script>';
        }

        public function ShowPopUpFailed($message){
            echo '<script language="javascript">';
            echo 'Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "'.$message.'!",
              })';
            echo '</script>';
        }


    }



?>