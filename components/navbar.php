<?php

class Navbar {

    private $activeIndex;
    private $listMenu = ["homepage","add member", "search member", "Contacts us"];
    private $listIcon = ["fa-solid fa-house", "fa-solid fa-user-plus", "fa-solid fa-magnifying-glass", "fa-solid fa-id-card-clip"];
    private $Paths = ['./index.php','./add.php','./search.php','./contact_us.php'];
    
    public function __construct($activeIndex = 0){
        $this->activeIndex = $activeIndex;
    }

    public function build(){

        echo '<div class="navbar_container_middle flex flex-row gap-3 items-center">';
        echo '<div class="navbar menu flex items-center p-3 gap-x-6 font-bold">';
            foreach($this->listMenu as $index => $item){
                echo '<a href="'.$this->Paths[$index].'"><div class="
                    navbar-link 
                    uppercase 
                    tracking-wide 
                    cursor-pointer 
                    hover:scale-105 
                    hover:bg-white;
                    transition-all 
                    duration-300 
                    '.($this->activeIndex == $index ? "bg-white text-black" : "text-white").'
                    flex
                    flex-row
                    gap-2
                    items-center
                    px-5 py-2 rounded-xl"><i class="'.$this->listIcon[$index].' hover:text-black"></i>'.$item.'</div></a>';
            }
        echo '</div>';
        echo '</div>';
    }
}

?>