<?php include('partials/_header.php'); ?>

<!-- Show full event details -->
<div class="modal fade" id="eventModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="showFullEventTitle"></h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p id="showFullEventBody"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End of show full event details -->

<!-- Edit Event Modal -->
<div class="modal" style="z-index: 2000;" id="edit-event" tabindex="-1" aria-labelledby="editEventLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editEventLabel">Edit Event</h1>
                <button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i
                        class='bx bx-x'></i></button>
            </div>
            <form class="needs-validation" id="edit-event-form" novalidate>
                <div class="modal-body">
                    <div class="m-3">
                        <div class="eventform">
                            <div class="mb-3">
                                <label for="event-title" class="form-label">Event Title</label>
                                <input type="text" class="form-control" id="edit-event-title" name="title"
                                    placeholder="Title of the event" required>
                                <div class="invalid-feedback" id="edit-invalid-title">
                                    You must add a title!
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="event-body" class="form-label">Event Description</label>
                                <textarea class="form-control" id="edit-event-body" name="body" rows="5"></textarea>
                                <div class="invalid-feedback" id="edit-invalid-body">
                                    You must add an event description or file!
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="file" class="form-label">Event Image</label><br>
                                <div class="btn btn-primary upload-btn">
                                    <label for="upload-event-file">
                                        <i class='mt-1 bx bx-cloud-upload' style="cursor:pointer;"></i>
                                    </label>
                                    <input type="file" id="upload-event-file" class="edit-upload-file"
                                        style="display: none;width: 100%;">
                                </div>
                                <p id="edit-event-file-errorDisplay"></p>
                                <div class="invalid-feedback" id="edit-invalid-file">
                                    File is too large, allowed limit is 5 MB!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="edit-save-event-btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Edit Event Modal -->

<!-- Sidebar -->
<?php include('partials/_sidebar.php'); ?>
<input type="hidden" value="6" id="checkFileName">
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Event Management</h1>
            </div>
        </div>

        <!-- Body -->
        <div class="bottom-data">
            <div class="orders">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="createEventTab" data-bs-toggle="tab" data-bs-target="#create"
                            type="button" role="tab" aria-controls="create" aria-selected="true">Create Event</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="show-events-tab" data-bs-toggle="tab" data-bs-target="#manage"
                            type="button" role="tab" aria-controls="manage" aria-selected="false">Event Board</button>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="create" role="tabpanel" aria-labelledby="create-tab" tabindex="0">
                        <div class="container">
                            <br>
                            <form class="needs-validation" id="event-form" novalidate>
                                <div class="center-element">
                                    <div class="eventform">
                                        <div class="mb-3">
                                            <label for="event-title" class="form-label">Event Title</label>
                                            <input type="text" class="form-control" id="event-title" name="title"
                                                placeholder="Title of the event" required>
                                            <div class="invalid-feedback" id="invalid-title">
                                                You must add a title!
                                            </div>
                                        </div>
                                        <br>

                                        <div class="mb-3">
                                            <label for="event-body" class="form-label">Event Description</label>
                                            <textarea class="form-control" id="event-body" name="body" rows="4"></textarea>
                                            <div class="invalid-feedback" id="invalid-body">
                                                You must add an event description or file!
                                            </div>
                                        </div>

                                        <br>
                                        <div class="mb-3">
                                            <label for="file" class="form-label">Event Image</label>
                                            <input type="file" class="form-control" accept="image/*" id="event-file"
                                                name="file">
                                            <p id="errorDisplay"></p>
                                            <div class="invalid-feedback" id="invalid-file">
                                                File is too large, allowed limit is 5 MB!
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-outline-warning" id="reset-event"
                                        onclick="cleanEventForm()">&nbsp;&nbsp;Reset&nbsp;&nbsp;</button>
                                    <button type="button" class="btn btn-outline-success" id="post-event">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="manage" role="tabpanel" aria-labelledby="manage-tab" tabindex="0">
                        <div class="container">
                            <br>
                            <div class="eventTable" style="display: block;">
                                <div class="header">
                                    <i class='bx bx-clipboard'></i>
                                    <h3>Event Board</h3>
                                    <a href="eventboard.php"><i style="font-size:30px;font-weight:bold;" class='bx bx-plus'></i></a>
                                </div>
                                <hr class="text-danger">

                                <!-- Event cards -->
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 row-cols-sm-1 g-4"
                                    id="event-box">
                                    <!-- Event cards will populate here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include('partials/_footer.php'); ?>
