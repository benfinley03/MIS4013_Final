<label for="character_id" class="form-label">Character</label>
<select class="form-select" id="character_id" name="character_id">
    <?php
    while ($charItem = $charList->fetch_assoc()) {
        echo '<option value="' . $charItem['character_id'] . '">' . $charItem['name'] . '</option>';
    }
    ?>
</select>

<label for="race_id" class="form-label">Race</label>
<select class="form-select" id="race_id" name="race_id">
    <?php
    while ($raceItem = $raceList->fetch_assoc()) {
        echo '<option value="' . $raceItem['race_id'] . '">' . $raceItem['race'] . '</option>';
    }
    ?>
</select>

<label for="class_id" class="form-label">Class</label>
<select class="form-select" id="class_id" name="class_id">
    <?php
    while ($classItem = $classList->fetch_assoc()) {
        echo '<option value="' . $classItem['class_id'] . '">' . $classItem['class'] . '</option>';
    }
    ?>
</select>
