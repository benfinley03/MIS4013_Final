<?php
function selectClasses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT class_id, class FROM classes;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function insertClass($class) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `classes` (`class`) VALUES (?)");
        $stmt->bind_param("s", $class);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function updateClass($class, $class_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `classes` SET `class`=? WHERE TypeID = ?");
        $stmt->bind_param("si", $class, $class_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function deleteClass($class_id) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `classes` WHERE `class_id` = ?");
        $stmt->bind_param("i", $class_id);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
