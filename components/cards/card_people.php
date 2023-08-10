<?php

class CardPeople {
    private $firstName;
    private $lastName;
    private $age;
    private $number;
    private $gender;
    private $birth_day;
    private $image;
    private $email;


    public function __construct($number ,$email , $gender, $birth_day ,$firstName, $lastName, $age , $image) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->number = $number;
        $this->gender = $gender;
        $this->birth_day = $birth_day;
        $this->image = $image;
        $this->email = $email;
    }



    public function buildCard() {
        $html = '<div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid-cols-8 ">';
        $html .=    '<div class="flex items-center px-4 xl:px-6">';
        $html .= "<div class='avatar w-[60px] h-[60px] bg-gray-500 rounded-full object-cover bg-center shadow-sm bg-cover' style='background-image: url(" . $this->image . ")'></div>";
        $html .=    '</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap">'.$this->number.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap">'.$this->firstName. ' ' . $this->lastName .'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide flex justify-center lg:text-md whitespace-nowrap">'.$this->age.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap">'.$this->birth_day.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap col-span-2">'.$this->email.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap items-center">'.($this->gender == 'm' ? '<i class="fa-solid fa-person text-3xl text-cyan-400"></i>' : ($this->gender == 'f' ? '<i class="fa-solid fa-person text-3xl text-pink-400"></i>' : '<i class="fa-solid fa-person text-3xl text-gray-400"></i>')).'</div>';
        $html .= '</div>';
        return $html;
    }



}



?>