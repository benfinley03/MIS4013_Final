<?php
function selectCharacters() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.character_id, c.name, r.race, cl.class, c.level, c.alignment, c.background
                                FROM characters c
                                  JOIN races r ON c.char_race_id = r.race_id
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
