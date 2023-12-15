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



function insertRace($race) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `races` (`race`) VALUES (?)");
        $stmt->bind_param("s", $race);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateRace($race, $race_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `races` SET `race`=? WHERE race_id = ?");
        $stmt->bind_param("si", $race, $race_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteRace($race_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `races` WHERE `race_id` = ?");
        $stmt->bind_param("i", $race_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
