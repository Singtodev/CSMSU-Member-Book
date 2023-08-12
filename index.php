<?php

    session_start();

    include("./utils/condb.php");
    include("./services/useUserService.php");
    include_once('./components/cards/card_people.php');
    include_once('./components/navbar.php');
    
    $user_srv = new UseUserService($condb);
    $user_all = $user_srv->getAllUser();
    $activePage = 0;
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
  <link rel="stylesheet" href="sweetalert2.min.css">
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
                <form action="./search.php" method="post">
                    <div class="group px-5  flex flex-row items-center bg-white inline-block  gap-2 w-[34rem] transition-all duration-300 rounded-2xl py-2 focus-within:rounded-3xl px-1 focus-within:border-sky-500 focus-within:ring-sky-500  focus-within:shadow-2xl">
                        <input id="search-input" name="search_input" type="text" 
                        placeholder="What do you mind ?"
                        class="focus:outline-none  py-2  rounded-2xl transition-all duration-300   w-full h-full border-none outline-none" >
                        <div class="w-[3rem] py-3 rounded-md flex items-center justify-center text-black  h-full">
                           <button type="submit" class="w-full h-full block">
                            <i class="fa-solid fa-magnifying-glass text-black cursor-pointer"></i>
                           </button>
                        </div>
                    </div>
                </form>
        </div>

        <div class="container min-w-[500px] min-h-[650px] my-1 mb-4 my-4 p-2 bg-white rounded-2xl">
            <div class="w-full flex items-center justify-end px-4 border-b-2 py-4"> <span class="px-6 mb-6 text-xl p-2 text-white bg-blue-600 inline-block rounded-2xl text-slate-900 text-white ">List of Members (  <?php echo $user_all->num_rows ?>  )</span> </div>
            
            <!-- <div class="w-full  transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid grid-cols-9">
                    <div class="flex items-center px-4 xl:px-10 ">
                        Avatar
                    </div>
                    <div class="flex justify-center items-center tracking-wide lg:text-md whitespace-nowrap"> Number</div>
                    <div class="flex justify-center items-center tracking-wide lg:text-md whitespace-nowrap"> Full Name</div>
                    <div class="flex justify-center items-center tracking-wide lg:text-md whitespace-nowrap"> Phone</div>
                    <div class="flex justify-center items-center tracking-wide lg:text-md whitespace-nowrap flex justify-center"> Age</div>
                    <div class="flex justify-center items-center tracking-wide lg:text-md whitespace-nowrap"> Birth Day</div>
                    <div class="flex justify-center items-center tracking-wide lg:text-md whitespace-nowrap col-span-2"> Email</div>
            </div> -->
            <div id="search-results" class="w-full bg-white  h-[650px]  p-4 overflow-y-scroll overflow-x-hidden py-4 relative" >

                    <?php

                        if($user_all->num_rows > 0){
                            
                            while($row = $user_all->fetch_assoc()){
                                $personCard = new CardPeople(
                                    $row['m_id'],
                                    $row['m_email'],
                                    $row['m_gender'] , 
                                    $row['m_birthday'],
                                    $row['m_fname'], 
                                    $row['m_lname'], 
                                    $row['m_age'],
                                    $row['m_avatar_url'],
                                    $row['m_phone']
                                );
                                echo $personCard->buildCard();
                            }

                        }else{
                            echo "<div class='w-full h-full flex justify-center items-center absolute text-gray-400 text-3xl'>Empty Users</div>";
                        }

                    ?>

            </div>
        </div>

        <div class="container min-w-[500px] min-h-[250px] h-[250px] my-1 mt-12">
                <div class="grid grid-cols-3 gap-x-10 w-full h-full">
                    <div class="relative flex bg-pink-400 items-center hover:scale-105 cursor-pointer transition-all duration-300 justify-center  rounded-xl shadow-xl w-full h-full">
                        <div class="absolute text-black bg-white px-4 rounded-md top-4 left-4 text-xl ">Female</div>
                        <div class="count text-white text-4xl"><?php $user_male_count = $user_srv->getCountByGender('f'); ?></div>
                    </div>
                    <div class="relative flex bg-cyan-400 items-center hover:scale-105 cursor-pointer transition-all duration-300 justify-center  rounded-xl shadow-xl w-full h-full">
                    <div class="absolute text-black bg-white px-4 rounded-md top-4 left-4 text-xl ">Male</div>
                        <div class="count text-white text-4xl"><?php $user_female_count = $user_srv->getCountByGender('m'); ?></div>
                    </div>
                    <div class="relative flex bg-white items-center hover:scale-105 cursor-pointer transition-all duration-300 justify-center rounded-xl shadow-xl w-full h-full">
                    <div class="absolute text-black bg-white px-4 rounded-md top-4 left-4 text-xl ">Others</div>
                        <div class="count text-black text-4xl"><?php $user_other_count = $user_srv->getCountByGender('o'); ?></div>
                    </div>
                </div>
        </div>

        </div>

        <script>

        $(document).ready(function() {
            $('#search-input').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length > 1) {
                    $.ajax({
                        url: './utils/search.php', // Path to your server-side search script
                        method: 'GET',
                        data: { search: searchTerm },
                        success: function(response) {   
                            $('#search-results').html(response);
                        },
                        error: function() {
                            console.log("search error");
                        }
                    });
                } else if(searchTerm.length == 0) {
                    $.ajax({
                        url: './utils/search.php', // Path to your server-side search script
                        method: 'GET',
                        data: { search: searchTerm },
                        success: function(response) {   
                            $('#search-results').html(response);
                        },
                        error: function() {
                            console.log("search error");
                        }
                    });
                }
            });
        });
    </script>



    </div>

<div class="h-[100px] bg-black mt-12 flex py-2 justify-center py-2 items-center pb-4">
         <div class="text-white  uppercase font-bold h-2  "> Made By Singharat Bunphim &copy; 2023</div>
</div>


<div class="w-full absolute bg-gradient-to-r from-cyan-500 to-blue-500 h-[45rem]" style="clip-path: polygon(0 0, 100% 0, 100% 73%, 0% 100%);"></div>

</div>

</body>
</html>