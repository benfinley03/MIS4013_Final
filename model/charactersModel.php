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


function insertCharacter($name, $char_race_id, $char_class_id, $level, $alignment, $background) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `characters` (`name`, `char_race_id`, `char_class_id`, `level`, `alignment`, `background`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siiiss", $name, $char_race_id, $char_class_id, $level, $alignment, $background);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteCharacter($character_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `characters` WHERE `character_id` = ?");
        $stmt->bind_param("i", $character_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
