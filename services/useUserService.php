<?php

class UseUserService {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }


    public function deleteUserById($id){
        $sql = "DELETE FROM members WHERE m_id = ?";
        $stmt = $this->db->prepare($sql);
        $status = false;

        $stmt->bind_param("s", $id);

        try {
            // Execute the statement
            if ($stmt->execute()) {
                if ($stmt->affected_rows === 1) {
                    $response = "Deleted User data successfully.";
                    $status = true;
                } else {
                    $response = "No rows affected.";
                }
            } else {
                $response = "Execution failed.";
            }
        } catch (Exception $e) {
            // Handle the exception
            $response = "Exception: " . $e->getMessage();
            
        }
                // Close the statement
        $stmt->close();
        
        return array(
            'status' => $status,
            'message' => $response
        );
    }

    public function updateUserToDatabase($user){
        $sql = "UPDATE members SET m_email = ? , m_gender = ?, m_birthday = ? , m_fname = ? , m_lname = ? , m_avatar_url = ? ,m_phone = ? ,m_display_name = ? WHERE m_id = ?";
        $stmt = $this->db->prepare($sql);
        $status = false;

        $stmt->bind_param("sssssssss", $user['email'], $user['gender'], $user['birthday'], $user['fname'], $user['lname'], $user['avatar_url'],$user['phone'],$user['display_name'],$user['id']);
      
        try {
            // Execute the statement
            if ($stmt->execute()) {
                if ($stmt->affected_rows === 1) {
                    $response = "User data inserted successfully.";
                    $status = true;
                } else {
                    $response = "No rows affected.";
                }
            } else {
                $response = "Execution failed.";
            }
        } catch (Exception $e) {
            // Handle the exception
            $response = "Exception: " . $e->getMessage();
            
        }
                // Close the statement
        $stmt->close();
        return array(
            'status' => $status,
            'message' => $response
        );
    }


    public function insertUserToDatabase($user){
        $sql = "INSERT INTO members (m_email, m_gender, m_birthday, m_fname, m_lname, m_avatar_url,m_phone,m_display_name) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $status = false;

        // Bind parameters with appropriate data types
        
        $stmt->bind_param("ssssssss", $user['email'], $user['gender'], $user['birthday'], $user['fname'], $user['lname'], $user['avatar_url'],$user['phone'],$user['display_name']);
        
        // // Execute the statement

        try {
            // Execute the statement
            if ($stmt->execute()) {
                if ($stmt->affected_rows === 1) {
                    $response = "User data inserted successfully.";
                    $status = true;
                } else {
                    $response = "No rows affected.";
                }
            } else {
                $response = "Execution failed.";
            }
        } catch (Exception $e) {
            // Handle the exception
            $response = "Exception: " . $e->getMessage();
            
        }
        
        // Close the statement
        $stmt->close();
        
        return array(
            'status' => $status,
            'message' => $response
        );
    }

    public function getAllUser() {
        $sql = "SELECT *, YEAR(CURDATE()) - YEAR(m_birthday) - (DATE_FORMAT(CURDATE(), '%m%d') < DATE_FORMAT(m_birthday, '%m%d')) AS m_age FROM members ORDER BY m_id ASC";
        $result = $this->db->query($sql);
        return $result;
    }


    public function getUserById($id){
        $sql = "SELECT *, YEAR(CURDATE()) - YEAR(m_birthday) - (DATE_FORMAT(CURDATE(), '%m%d') < DATE_FORMAT(m_birthday, '%m%d')) AS m_age FROM members WHERE m_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function getAllUserBySearch($search_word){
        $search_word = '%' . $search_word . '%';

        $sql = "SELECT *, YEAR(CURDATE()) - YEAR(m_birthday) - (DATE_FORMAT(CURDATE(), '%m%d') < DATE_FORMAT(m_birthday, '%m%d')) AS m_age FROM members WHERE m_fname LIKE ? OR m_lname LIKE ? OR m_display_name LIKE ?";
        $stmt = $this->db->prepare($sql);
        
        $stmt->bind_param("sss", $search_word, $search_word , $search_word);
        
        $stmt->execute();
        $result = $stmt->get_result();
        
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