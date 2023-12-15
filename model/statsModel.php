<?php
function selectStats($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.*, c.name, c.class 
                                FROM stats s 
                                    JOIN characters c ON s.stats_char_id = c.character_id 
                                    JOIN 
                                WHERE c.character_id = ?");

        $stmt->bind_param("i", $characterId);
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
