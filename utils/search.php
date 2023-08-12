<?php
include_once("./condb.php");
include_once("../services/useUserService.php");
include_once('../components/cards/card_people.php');
$userService = new UseUserService($condb);

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    $result = $userService->getAllUserBySearch($searchTerm);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
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
    }
    
}
?>