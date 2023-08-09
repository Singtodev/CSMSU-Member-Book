<?php

    session_start();
    include_once('./components/cards/card_people.php');


?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./styles/global.css">
  <title>Member Book</title>
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

            <div class="navbar_container_middle flex flex-row gap-3 items-center">
                <div class="navbar menu flex items-center p-3 gap-x-6 font-bold">
                            <div class="
                                navbar-link 
                                uppercase 
                                tracking-wide 
                                cursor-pointer 
                                hover:scale-105 
                                transition-all 
                                duration-300 
                                bg-white
                                text-black
                                flex
                                flex-row
                                gap-2
                                items-center
                                px-5 py-2 rounded-xl"><i class="fa-solid fa-house hover:text-black"></i>Homepage</div>
                            <div class="
                                navbar-link 
                                uppercase 
                                tracking-wide 
                                cursor-pointer 
                                hover:scale-105 
                                transition-all 
                                duration-300 
                                flex
                                flex-row
                                gap-2
                                items-center
                                hover:bg-white hover:text-black px-5 py-2 rounded-xl"> <i class="fa-solid fa-user-plus hover:text-black"></i> Add Users</div>
                            <div class="
                                navbar-link 
                                uppercase 
                                tracking-wide 
                                cursor-pointer 
                                hover:scale-105 
                                transition-all 
                                duration-300
                                flex
                                flex-row
                                gap-2
                                items-center
                                hover:bg-white hover:text-black px-5 py-2 rounded-xl"><i class="fa-solid fa-magnifying-glass hover:text-black"></i> SEARCH User</div>
                            <div class="
                                navbar-link 
                                uppercase 
                                tracking-wide 
                                cursor-pointer 
                                hover:scale-105 
                                transition-all 
                                duration-300 
                                flex
                                flex-row
                                gap-2
                                items-center
                                hover:bg-white hover:text-black px-5 py-2 rounded-xl"><i class="fa-solid fa-id-card-clip hover:text-black"></i>Contacts US</div>
                            <div class="
                                navbar-link 
                                uppercase 
                                tracking-wide 
                                cursor-pointer 
                                hover:scale-105 
                                transition-all 
                                duration-300 
                                hover:bg-white hover:text-black p-2 rounded-xl"></div>
                    </div>
            </div>

            <div class="navbar_container_right flex flex-row gap-x-3 items-center">

                        <!-- <div class="avatar flex flex-row items-center gap-x-1">
                            <div class="avatar_name text-xl font-bold tracking-wider bg-cyan-600 p-1 px-3 rounded-2xl bg-opacity-50">Singharat Bunphim</div>
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
                        </div> -->

                        <div class="flex flex-row gap-x-2 items-center">
                                <div class="text-white  bg-blue-600 px-6 font-bold py-2 rounded cursor-pointer hover:opacity-60 transition-all duration-300">LOGIN</div>
                                <div class="text-md"> | </div>
                                <div class="text-white  bg-blue-600 px-6 font-bold py-2 rounded cursor-pointer hover:opacity-60 transition-all duration-300">Register</div>
                                </div>
                        </div>

                    


        </div>


        <div class="w-[70%]">

        <div class="container flex items-center justify-start mt-4 mb-2 py-2">
                <div class="group px-5  flex flex-row items-center bg-white inline-block  gap-2 w-[34rem] transition-all duration-300 rounded-2xl py-2 focus-within:rounded-3xl px-1 focus-within:border-sky-500 focus-within:ring-sky-500  focus-within:shadow-2xl">
                    <input type="text" 
                    placeholder="What do you mind ?"
                    class="focus:outline-none  py-2  rounded-2xl transition-all duration-300   w-full h-full border-none outline-none" >
                    <div class="w-[3rem] py-3 rounded-md flex items-center justify-center bg-cyan-300 hover:bg-cyan-400 transition-all duration-300 cursor-pointer h-full">
                        <i class="fa-solid fa-magnifying-glass text-white"></i>
                    </div>
                </div>
        </div>

        <div class="container min-w-[500px] min-h-[650px] my-1 mb-4 my-4 p-2 bg-white rounded-2xl">
            <div class="w-full flex items-center justify-end px-4 border-b-2 py-4"> <span class="px-6 mb-6 text-xl p-2 text-white bg-blue-600 inline-block rounded-2xl text-slate-900 ">Search Found 6 Records</span> </div>
            <div class="w-full bg-white  h-[650px]  p-4 overflow-y-scroll overflow-x-hidden py-4" >

                    <?php
                        $personCard = new CardPeople(
                            65011212038,
                            "male" , 
                            "21 สิงหาคม 2546",
                            "Singharat", 
                            "Bunphim", 
                            19,
                            "https://scontent.fkkc3-1.fna.fbcdn.net/v/t39.30808-6/355086068_1460721331367352_1913272415591343693_n.jpg?_nc_cat=105&cb=99be929b-59f725be&ccb=1-7&_nc_sid=be3454&_nc_eui2=AeGD1jTAOwnIQ5YcKbBRAm-y3N6WrlCcdXnc3pauUJx1eQqjbHnHnGNNxbeaNWTd22TejGzrvhEY-FnF0RwujCf2&_nc_ohc=v0brmEX5BrAAX9klWWF&_nc_ht=scontent.fkkc3-1.fna&oh=00_AfDdHbkoC4fkpH33U13lNGhH7X1xYJre-E3BNdLIKWT61Q&oe=64D6F3C0"
                        );
                        echo $personCard->buildCard();
                        $personCard1 = new CardPeople(
                            65010910246,
                            "female" ,
                             "22 สิงหาคม 2546" ,
                             "Ratchanida", 
                             "Chommuang", 
                             19,
                             "https://scontent.fbkk22-7.fna.fbcdn.net/v/t39.30808-6/358562348_227406316916619_4034080238182470911_n.jpg?_nc_cat=107&cb=99be929b-59f725be&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEp9Hc7zBaDaOX0meZkH65nIERS-pnAPNcgRFL6mcA81x7P1k--1nU4tzn5gitN0hkLCGnQL0teLG9NsZr_I72u&_nc_ohc=Wmsp80fvuWEAX8SKFlC&_nc_zt=23&_nc_ht=scontent.fbkk22-7.fna&oh=00_AfCovZtaQ7FZSF7CxPMozNlQ7IfkuXeayspFlVe4L9jzHg&oe=64D8FF54"
                            );

                        echo $personCard1->buildCard();
                    ?>

                    <!-- <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid-cols-6 ">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://scontent.fkkc3-1.fna.fbcdn.net/v/t39.30808-6/355086068_1460721331367352_1913272415591343693_n.jpg?_nc_cat=105&cb=99be929b-59f725be&ccb=1-7&_nc_sid=be3454&_nc_eui2=AeGD1jTAOwnIQ5YcKbBRAm-y3N6WrlCcdXnc3pauUJx1eQqjbHnHnGNNxbeaNWTd22TejGzrvhEY-FnF0RwujCf2&_nc_ohc=v0brmEX5BrAAX9klWWF&_nc_ht=scontent.fkkc3-1.fna&oh=00_AfDdHbkoC4fkpH33U13lNGhH7X1xYJre-E3BNdLIKWT61Q&oe=64D6F3C0')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212038</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Singharat Bunphim</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">20</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">21 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-cyan-400"></i></div>
                    </div>

                    <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-gray-100 h-auto border-b border-b-2  py-6 grid grid-cols-6">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://www.xtrafondos.com/wallpapers/lisa-de-blackpink-8226.jpg')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212037</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Lisa BlackPink</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">26</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">1 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-pink-400"></i></div>
                    </div>

                    <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid-cols-6">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://w0.peakpx.com/wallpaper/265/766/HD-wallpaper-jennie-blackpink-korean-singer.jpg')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212036</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Jennie BlackPink</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">27</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">2 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-pink-400"></i></div>
                    </div>

                    <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-gray-100 h-auto border-b border-b-2  py-6 grid grid-cols-6">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://w0.peakpx.com/wallpaper/564/215/HD-wallpaper-jisoo-blackpink-jisoo.jpg')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212035</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Jisoo BlackPink</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">28</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">3 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-pink-400"></i></div>
                    </div>

                    <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid-cols-6">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://w0.peakpx.com/wallpaper/286/106/HD-wallpaper-rose-blackpink.jpg')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212034</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Rose BlackPink</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">26</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">4 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-pink-400"></i></div>
                    </div>

                    <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300  bg-gray-100  h-auto border-b border-b-2  py-6 grid grid-cols-6">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://static.thairath.co.th/media/dFQROr7oWzulq5Fa5KwHqswqYUF5Q7158MhvyLfkwXWXQgw1Z4OBpMELPWnqQOdetn1.webp')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212033</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Joji 88 Rising</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">30</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">5 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-cyan-400"></i></div>
                    </div>

                    <div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid-cols-6">
                            <div class="
                                flex items-center px-6 ">
                                <div class="
                                avatar
                                w-[60px] h-[60px] bg-gray-500 rounded-full
                                object-cover
                                bg-center
                                shadow-sm
                                bg-cover
                                bg-[url('https://www.billboard.com/wp-content/uploads/2021/09/Fujii-Kaze-cr-Yosuke-Kamiyama-billboard-japan-2021-billboaord-1548-1632940369.jpg?w=942&h=623&crop=1')]">


                                </div>

                            </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">65011212032</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">Fuji Kaze</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">26</div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl">6 สิงหาคม 2546 </div>
                            <div class="flex items-center text-slate-600 tracking-wide text-xl"><i class="fa-solid fa-person text-3xl text-cyan-400"></i></div>
                    </div> -->
                    
                    

            </div>
        </div>

        <div class="container min-w-[500px] min-h-[250px] h-[250px] my-1 mt-12">
                <div class="grid grid-cols-3 gap-x-10 w-full h-full">
                    <div class="relative flex bg-pink-400 items-center hover:scale-105 cursor-pointer transition-all duration-300 justify-center  rounded-xl shadow-xl w-full h-full">
                        <div class="absolute text-black bg-white px-4 rounded-md top-4 left-4 text-xl ">Female</div>
                        <div class="count text-white text-4xl">4</div>
                    </div>
                    <div class="relative flex bg-cyan-400 items-center hover:scale-105 cursor-pointer transition-all duration-300 justify-center  rounded-xl shadow-xl w-full h-full">
                    <div class="absolute text-black bg-white px-4 rounded-md top-4 left-4 text-xl ">Male</div>
                        <div class="count text-white text-4xl">3</div>
                    </div>
                    <div class="relative flex bg-white items-center hover:scale-105 cursor-pointer transition-all duration-300 justify-center rounded-xl shadow-xl w-full h-full">
                    <div class="absolute text-black bg-white px-4 rounded-md top-4 left-4 text-xl ">Others</div>
                        <div class="count text-black text-4xl">0</div>
                    </div>
                </div>
        </div>

        </div>



    </div>

<div class="h-[100px] bg-black mt-12 flex py-2 justify-center py-2 items-center pb-4">
         <div class="text-white  uppercase font-bold h-2  "> Made By Singharat Bunphim &copy; 2023</div>
</div>


<div class="w-full absolute bg-gradient-to-r from-cyan-500 to-blue-500 h-[45rem]" style="clip-path: polygon(0 0, 100% 0, 100% 73%, 0% 100%);"></div>

</div>

</body>
</html>