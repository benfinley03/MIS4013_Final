<?php
function selectStatsWithCharacters() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.*, s.*
                                FROM characters c
                                LEFT JOIN stats s ON c.character_id = s.stats_char_id
                                JOIN classes cl ON c.char_class_id = cl.class_id");
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
