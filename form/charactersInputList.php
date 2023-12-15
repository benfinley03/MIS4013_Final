<select class="form-select" id="character_id" name="character_id">
<?php
while ($charItem = $charList->fetch_assoc()) {
?>
    <option value="<?php echo $charItem['character_id']; ?>"><?php echo $charItem['name']; ?></option>
<?php
}
?>
</select>
