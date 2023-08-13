<?php

    function getThaiDate($today){
        $strYear=       date("Y",strtotime($strDate))+543;
        $strMonth=      date("n",strtotime($strDate));
        $strDay=        date("j",strtotime($strDate));
        $strHour=       date("H",strtotime($strDate));
        $strMinute=     date("i",strtotime($strDate));
        $strSeconds=    date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth]; 
        $strYearCut = substr($strYear,0,4);
        return "$strDay $strMonthThai $strYearCut";
    }


?>