<!-- Vertically centered modal -->
<!-- <div class="modal-dialog modal-dialog-centered">
    ...
</div> -->

<!-- Vertically centered scrollable modal -->
<!-- <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    ...
</div> -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="baseModal" tabindex="-1" aria-labelledby="ModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenter">{{ $modal_header }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">儲存</button>
            </div>
        </div>
    </div>
</div>