<?php

    class UseSweetAlert{



        public function __construct(){

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