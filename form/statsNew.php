<?php
require_once("/home/benfinmi/repositories/MIS4013_Final/connection.php");


function getCharactersWithoutStats() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT character_id, name FROM characters WHERE character_id NOT IN (SELECT stats_char_id FROM stats)");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


$noStats = getCharactersWithoutStats();

?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newStatsModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newStatsModal" tabindex="-1" aria-labelledby="newStatsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newStatsModalLabel">New Character Stats</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="stats_char_id" class="form-label">Character</label>
                        <select class="form-select" id="stats_char_id" name="stats_char_id">
                            <?php
                            $charactersWithoutStats = getCharactersWithoutStats();
                            while ($charItem = $charactersWithoutStats->fetch_assoc()) {
                                echo '<option value="' . $charItem['character_id'] . '">' . $charItem['name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hit_points" class="form-label">Hit Points</label>
                        <input type="number" class="form-control" id="hit_points" name="hit_points">
                    </div>
                    <div class="mb-3">
                        <label for="armor_class" class="form-label">Armor</label>
                        <input type="number" class="form-control" id="armor_class" name="armor_class">
                    </div>
                    <div class="mb-3">
                        <label for="strength" class="form-label">Strength</label>
                        <input type="number" class="form-control" id="strength" name="strength">
                    </div>
                    <div class="mb-3">
                        <label for="dexterity" class="form-label">Dexterity</label>
                        <input type="number" class="form-control" id="dexterity" name="dexterity">
                    </div>
                    <div class="mb-3">
                        <label for="constitution" class="form-label">Constitution</label>
                        <input type="number" class="form-control" id="constitution" name="constitution">
                    </div>
                    <div class="mb-3">
                        <label for="intelligence" class="form-label">Intelligence</label>
                        <input type="number" class="form-control" id="intelligence" name="intelligence">
                    </div>
                    <div class="mb-3">
                        <label for="wisdom" class="form-label">Wisdom</label>
                        <input type="number" class="form-control" id="wisdom" name="wisdom">
                    </div>
                    <div class="mb-3">
                        <label for="charisma" class="form-label">Charisma</label>
                        <input type="number" class="form-control" id="charisma" name="charisma">
                    </div>

                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
