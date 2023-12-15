<?php
function selectRaces() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT race_id, race FROM races;");
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
