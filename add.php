<?php

    session_start();
    
    include("./utils/condb.php");
    include("./services/useUserService.php");
    include_once('./components/cards/card_people.php');
    include_once('./components/navbar.php');
    include_once('./services/useSweetAlert.php');
    
    $user_srv = new UseUserService($condb);
    $sweet_srv = new UseSweetAlert();
    $activePage = 1;
    $navbar = new Navbar($activePage);
    




?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./styles/global.css">
  <title>Member Book</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-200">





<div class="relative w-full flex flex-col ">

    <div class="relative z-10 flex flex-col items-center ">
        <div class="navbar  w-full h-[4rem]  relative  top-0 left-0 flex justify-between items-center text-white p-5 mt-2 mb-6 transition-all duration-300 ">
            <div class="navbar_container_left flex flex-row gap-x-5 items-center">
                <div class="logo text-white text-2xl flex gap-x-4 items-center  py-2 px-3 cursor-pointer transition-all duration-300">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        height="30px" 
                        viewBox="0 0 448 512">
                        <path 
                            fill="#fff"
                            d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"
                        />
                    </svg>
                    <div class="logo_brand_text font-bold">
                        Member Book
                    </div>

                </div>

            </div>

            
            <?php $navbar->build(); ?>

            <div class="navbar_container_right flex flex-row gap-x-3 items-center">

                        <div class="avatar flex flex-row items-center gap-x-1">
                            <div class="avatar_name text-xl font-bold tracking-wider bg-cyan-600 p-1 px-3 rounded-2xl bg-opacity-50">Administator</div>
                            <div class="
                                avatar_picture 
                                w-[50px] h-[50px] 
                                bg-white 
                                rounded-full 
                                shadow-xl
                                object-cover
                                bg-center
                                bg-cover
                                bg-[url('https://scontent.fkkc3-1.fna.fbcdn.net/v/t39.30808-6/355086068_1460721331367352_1913272415591343693_n.jpg?_nc_cat=105&cb=99be929b-59f725be&ccb=1-7&_nc_sid=be3454&_nc_eui2=AeGD1jTAOwnIQ5YcKbBRAm-y3N6WrlCcdXnc3pauUJx1eQqjbHnHnGNNxbeaNWTd22TejGzrvhEY-FnF0RwujCf2&_nc_ohc=v0brmEX5BrAAX9klWWF&_nc_ht=scontent.fkkc3-1.fna&oh=00_AfDdHbkoC4fkpH33U13lNGhH7X1xYJre-E3BNdLIKWT61Q&oe=64D6F3C0')]
                                "
                            ></div>
                        </div>

                        <!-- <div class="flex flex-row gap-x-2 items-center">
                                <div class="text-white  bg-blue-600 px-6 font-bold py-2 rounded cursor-pointer hover:opacity-60 transition-all duration-300">LOGIN</div>
                                <div class="text-md"> | </div>
                                <div class="text-white  bg-blue-600 px-6 font-bold py-2 rounded cursor-pointer hover:opacity-60 transition-all duration-300">Register</div>
                        </div> -->
            </div>

                    


        </div>


        <div class="w-[70%]">

        
        <div class="container flex items-center justify-start mt-4 mb-2 py-2">
                <div class="group px-5  flex flex-row items-center inline-block  gap-2 w-[34rem] transition-all duration-300 rounded-2xl py-2 focus-within:rounded-3xl px-1 focus-within:border-sky-500 focus-within:ring-sky-500  focus-within:shadow-2xl">
                    <div class="focus:outline-none  py-5  rounded-2xl transition-all duration-300   w-full h-full border-none outline-none" ></div>
                    <div class="w-[3rem] py-3 rounded-md flex items-center justify-center text-black  h-full">

                    </div>
                </div>
        </div>

        <div class="container min-w-[500px] min-h-[800px] my-1 mb-4 my-4 p-2 bg-white rounded-2xl">
            <div class="w-full flex items-center justify-end px-4 border-b-2 py-4"> 
                <span class="px-6 mb-6 text-xl p-2 text-white bg-blue-600 inline-block rounded-2xl text-slate-900 text-white ">Add Members</span>
             </div>

             <form action="./add.php" class="from_insert_table]  w-full h-full flex flex-row justify-center py-4">
                <div class="group  max-w-[45rem] min-w-[45rem] flex flex-col gap-y-6">
                    <div class="text-2xl font-bold mb-4">Do you want to insert member ?</div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">Email</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <input type="email" required name="email" minLength="0" maxLength="1000" required class="cols-span-3 w-full shadow-md outline-none px-3 py-1 rounded-md" />
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">FirstName</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <input type="text" required name="fname" minLength="0" maxLength="1000" required class="cols-span-3 w-full shadow-md outline-none px-3 py-1 rounded-md" />
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">LastName</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <input type="text" required name="lname" minLength="0" maxLength="1000" required class="cols-span-3 w-full shadow-md outline-none px-3 py-1 rounded-md" />
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">Gender</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <div class="grid gird-cols-3">
                                <select required class="outline-none shadow-md px-2 rounded-md" name="gender" value="m">
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                    <option value="o">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">Birthday</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <div class="grid gird-cols-3">
                                <input required type="date" name="birthday" class="outline-none shadow-md px-2 rounded-md" />
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">Phone</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <input type="text" required name="phone" minLength="0" maxLength="10" required class="cols-span-3 w-full shadow-md outline-none px-3 py-1 rounded-md" />
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="group _input_group grid grid-cols-3 gap-x-3">
                            <div class="flex gap-x-2 flex-row  justify-start items-center py-2">
                                <div class="text-md">Avatar URL</div>
                                <div class="text-[8px] text-red-300">* Required</div>
                            </div>
                            <input type="text" required name="avatar_url" minLength="0" maxLength="1000" required class="cols-span-3 w-full shadow-md outline-none px-3 py-1 rounded-md" />
                        </div>
                    </div>

                    <div class="py-2 flex flex-row justify-end">
                        <button type="submit" class="bg-lime-600 text-white py-2 px-6 hover:opacity-50 transition-all duration-300 rounded-md">Submit</button>
                    </div>

                </div>
    

             </form>




        </div>



        </div>





    </div>

<div class="h-[100px] bg-black mt-12 flex py-2 justify-center py-2 items-center pb-4">
         <div class="text-white  uppercase font-bold h-2  "> Made By Singharat Bunphim &copy; 2023</div>
</div>


<div class="w-full absolute bg-gradient-to-r from-cyan-500 to-blue-500 h-[45rem]" style="clip-path: polygon(0 0, 100% 0, 100% 73%, 0% 100%);"></div>

</div>

<?php

if(isset($_GET['phone']) && isset($_GET['email']) && isset($_GET['gender']) && isset($_GET['birthday']) && isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['avatar_url'])){
    $user = array(
        'email' => $_GET['email'],
        'gender' => $_GET['gender'],
        'birthday' => $_GET['birthday'],
        'fname' => $_GET['fname'],
        'lname' => $_GET['lname'],
        'avatar_url' => $_GET['avatar_url'],
        'phone' => $_GET['phone']
    );
    $result = $user_srv->insertUserToDatabase($user);
    if($result){
        if($result['status'] == true){
            $sweet_srv->showPopUpSuccess("Insert Member Success");
            echo '<script>';
            echo 'setTimeout(function() {
                window.location.href = "index.php";
            }, 3000)'; // 3000 milliseconds = 3 seconds
            echo '</script>';
            die();
        }else{
            $sweet_srv->showPopUpFailed("Insert Member Failed");
            echo '<script>';
            echo 'setTimeout(function() {
                window.location.href = "add.php";
            }, 3000)'; // 3000 milliseconds = 3 seconds
            echo '</script>';
            die();
        }
    
    }
    



    //set default store data

    
      
}

?>

</body>
</html>