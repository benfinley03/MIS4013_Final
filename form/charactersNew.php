<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPokeMoveModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newPokeMoveModal" tabindex="-1" aria-labelledby="newPokeMoveModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newPokeMoveModalLabel">New Pokemon Move</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="pmPID" class="form-label">Pokemon</label>
<?php
    $characterList = selectCharacterForInput();   
    include ".php";
?>
          </div>
          <div class="mb-3">
            <label for="mID" class="form-label">Move ID</label>
            <input type="integer" class="form-control" id="mID" name="mID">
          </div>
          <div class="mb-3">
            <label for="mName" class="form-label">Move Name</label>
            <input type="text" class="form-control" id="mName" name="mName">
          </div>
        <div class="mb-3">
            <label for="mPower" class="form-label">Move Power</label>
            <input type="integer" class="form-control" id="mPower" name="mPower">
          </div>
          <div class="mb-3">
            <label for="mAccuracy" class="form-label">Move Accuracy</label>
            <input type="integer" class="form-control" id="mAccuracy" name="mAccuracy">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
