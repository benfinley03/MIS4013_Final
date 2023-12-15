<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");

function getCharacterList() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM characters");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function getRaceList() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM races");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function getClassList() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM classes");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

$charList = getCharacterList();
$raceList = getRaceList();
$classList = getClassList();

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCharacterModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newCharacterModal" tabindex="-1" aria-labelledby="newCharacterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newCharacterModalLabel">New Character</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="charName" class="form-label">Character Name</label>
                        <input type="text" class="form-control" id="charName" name="charName">
                    </div>
                    <div class="mb-3">
                        <label for="char_race_id" class="form-label">Race</label>
                        <select class="form-select" id="char_race_id" name="char_race_id">
                            <?php
                            while ($raceItem = $raceList->fetch_assoc()) {
                                echo '<option value="' . $raceItem['race_id'] . '">' . $raceItem['race_id'] . ' - ' . $raceItem['race'] . '</option>';
                            }
                            ?>
                        </select>
                        
                        <label for="char_class_id" class="form-label">Class</label>
                        <select class="form-select" id="char_class_id" name="char_class_id">
                            <?php
                            while ($classItem = $classList->fetch_assoc()) {
                                echo '<option value="' . $classItem['class_id'] . '">' . $classItem['class_id'] . ' - ' . $classItem['class'] . '</option>';
                            }
                            ?>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="charLevel" class="form-label">Character Level</label>
                        <input type="number" class="form-control" id="charLevel" name="charLevel">
                    </div>
                    <div class="mb-3">
                        <label for="charAlignment" class="form-label">Character Alignment</label>
                        <input type="text" class="form-control" id="charAlignment" name="charAlignment">
                    </div>
                    <div class="mb-3">
                        <label for="charBackground" class="form-label">Character Background</label>
                        <input type="text" class="form-control" id="charBackground" name="charBackground">
                    </div>
                    
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
