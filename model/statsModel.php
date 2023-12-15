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


function insertStats($stats_char_id, $hit_points, $armor_class, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `character_stats` (`stats_char_id`, `hit_points`, `armor_class`, `strength`, `dexterity`, `constitution`, `intelligence`, `wisdom`, `charisma`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiiiiii", $stats_char_id, $hit_points, $armor_class, $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteStats($stats_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `stats` WHERE `stats_id` = ?");
        $stmt->bind_param("i", $stats_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}




?>
