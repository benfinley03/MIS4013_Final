<h1>Characters</h1>
<div class="card-deck">
    <?php while ($character = $characters->fetch_assoc()) : ?>
        <div class="card mb-4">
            <img src="character_image.jpg" class="card-img-top" alt="Character Image">
            <div class="card-body">
                <h5 class="card-title"><?php echo $character['name']; ?></h5>
                <p class="card-text">
                    <strong>Race:</strong> <?php echo $character['race']; ?><br>
                    <strong>Class:</strong> <?php echo $character['class']; ?><br>
                    <strong>Level:</strong> <?php echo $character['level']; ?><br>
                    <strong>Alignment:</strong> <?php echo $character['alignment']; ?><br>
                    <strong>Background:</strong> <?php echo $character['background']; ?>
                </p>
            </div>
        </div>
    <?php endwhile; ?>
</div>

