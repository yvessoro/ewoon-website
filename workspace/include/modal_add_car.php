<!-- Begin Centered Modal -->
<div id="modal-new-car" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Nouveau véhicule</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Fermer</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    include 'forms/form_add_car.php';
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Centered Modal -->