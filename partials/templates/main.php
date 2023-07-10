<div id="create-user-modal" class="modal-container hidden">
    <div class="modal">
        <div class="modal__header">
            <button class="btn btn--secondary" onclick="createUserModal.hide()">Close</button>
        </div>
        <div class="modal__body">
            <?php include __DIR__ . '/form.php'; ?>
        </div>
    </div>
</div>

<div class="table-container">
    <?php include __DIR__ . '/table.php' ?>
    <button class="btn btn--primary" onclick="createUserModal.show()">Add new user</button>
</div>