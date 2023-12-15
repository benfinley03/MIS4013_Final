<form method="post" action="">
    <input type="hidden" name="stats_id" value="<?php echo $stats['stats_id']; ?>">
    <input type="hidden" name="actionType" value="Delete">
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');">
        Delete Stats
    </button>
</form>

