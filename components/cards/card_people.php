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
    private $phone;


    public function __construct($number ,$email , $gender, $birth_day ,$firstName, $lastName, $age , $image , $phone) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->number = $number;
        $this->gender = $gender;
        $this->birth_day = $birth_day;
        $this->image = $image;
        $this->email = $email;
        $this->phone = $phone;
    }


   
    public function buildCard() {

        $query = http_build_query(array(
            'id'      => $this->number,
        ));

        $url = 'member_detail.php?'.$query;

        $more_name =  $this->firstName. ' ' . $this->lastName;
        $html  = '<a href="'.$url.'">';
        $html .= '<div class="w-full hover:scale-95 cursor-pointer transition-all duration-300 bg-white h-auto border-b border-b-2  py-6 grid grid-cols-9 ">';
        $html .=    '<div class="flex items-center px-4 xl:px-6">';
        $html .= "<div class='avatar w-[60px] h-[60px] bg-gray-500 rounded-full object-cover bg-center shadow-sm bg-cover' style='background-image: url(" . $this->image . ")'></div>";
        $html .=    '</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap">'.$this->number.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap">'.((strlen($this->firstName) + strlen($this->lastName)) >= 15 ? substr($more_name ,0 , 15)."..." : $more_name) .'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide flex justify-center lg:text-md whitespace-nowrap">'.$this->phone.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide flex justify-center lg:text-md whitespace-nowrap">'.$this->age." ปี".'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap">'.$this->birth_day.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap col-span-2">'.$this->email.'</div>';
        $html .=    '<div class="flex items-center text-slate-600 tracking-wide lg:text-md whitespace-nowrap items-center">'.($this->gender == 'm' ? '<i class="fa-solid fa-person text-3xl text-cyan-400"></i>' : ($this->gender == 'f' ? '<i class="fa-solid fa-person text-3xl text-pink-400"></i>' : '<i class="fa-solid fa-person text-3xl text-gray-400"></i>')).'</div>';
        $html .= '</div>';
        $html .= '</a>';
        return $html;
    }



}



?>