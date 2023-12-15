<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.*, c.name, c.class 
                                FROM stats s 
                                    JOIN characters c ON s.stats_char_id = c.character_id");

        if (!$stmt) {
            die("Error in SQL query: " . $conn->error);
        }
        
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>


