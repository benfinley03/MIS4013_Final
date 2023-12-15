<?php
function selectStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT *
                                FROM stats");
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
