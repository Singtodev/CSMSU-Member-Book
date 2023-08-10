<?php

class UseUserService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllUser() {
        $sql = "SELECT *, YEAR(CURDATE()) - YEAR(m_birthday) - (DATE_FORMAT(CURDATE(), '%m%d') < DATE_FORMAT(m_birthday, '%m%d')) AS m_age FROM members ORDER BY m_id ASC";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getAllUserBySearch($search_word){
        $search_word = '%' . $search_word . '%';

        $sql = "SELECT *, YEAR(CURDATE()) - YEAR(m_birthday) - (DATE_FORMAT(CURDATE(), '%m%d') < DATE_FORMAT(m_birthday, '%m%d')) AS m_age FROM members WHERE m_fname LIKE ? OR m_lname LIKE ?";
        $stmt = $this->db->prepare($sql);
        
        $stmt->bind_param("ss", $search_word, $search_word);
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Fetch the results if needed
        // $rows = $result->fetch_all(MYSQLI_ASSOC);
        
        return $result;
    }

    public function getCountByGender($gender_type){
        $sql = "SELECT COUNT(m_gender) AS count FROM members WHERE m_gender = ?";
        $stmt = $this->db->prepare($sql);

        if (!$stmt) {
            echo "Error in preparing statement: " . $this->db->error;
            return;
        }

        $stmt->bind_param("s", $gender_type);
        $stmt->execute();
        
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $count = $row['count'];
            echo $count; 
        }

        $stmt->close();
    }
}