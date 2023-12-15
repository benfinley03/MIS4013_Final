<?php
function selectStats($characterId) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT *
                                FROM stats
                                WHERE stats_char_id = ?");
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
