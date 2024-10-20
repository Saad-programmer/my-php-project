<?php include('partials/_header.php') ?>





<!-- Sidebar -->
<?php include('partials/_sidebar.php') ?>
<input type="hidden" value="2" id="checkFileName">
<!-- End of Sidebar -->

<!-- Main Content -->
<div class="content">
    <!-- Navbar -->
    <?php include("partials/_navbar.php"); ?>

    <!-- End of Navbar -->

    <main>
        <div class="header">
            <div class="left">
                <h1>Member</h1>

            </div>

        </div>
        <div class="bottom-data">

            <div class="orders">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    
                    <li class="nav-item me-1" role="presentation">
                        <button class="nav-link" id="showTeacherTab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false"
                            onclick="showTeachers()">Show
                            Members</button>
                    </li>
                    
                    
                    

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <br>
                        <!-- Take attendence -->
                        <div class="attendenceTable" style="display: block;">
                            <div class="header">
                                <i class='bx bx-receipt'></i>
                                <h3>Members</h3>
                                <div class="student-btns">
                                    <div class="student-btns">

                                        <div class="dropdown dropdown-center">
                                            <a class="notif" data-bs-toggle="dropdown" aria-expanded="false"
                                                id="dropDownListForSubmit">
                                                <i class='bx bx-filter'></i>
                                            </a>

                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>

                            <div class="container add-remove">
                                <ul class="insights">
                                    <a class="addlink" data-bs-toggle="modal" data-bs-target="#addTeacherModal"
                                        id="addTeacherButton">
                                        
                                    </a>
                                    <!-- model add student -->





                                    <!-- end of model add student -->

                                    <a class="removelink" data-bs-toggle="modal" data-bs-target="#removeStudentModel">
                                        
                                    </a>
                                </ul>
                            </div>

                            <br>
                            <hr>
                        </div>

                        <!-- end of Take attendence -->
                    </div>
                    <br>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="showAttendence">
                           
                            <!-- Attendence on Specific date  -->
                            <div class="container">
                                <br>
                                <!-- Take attendence -->
                                <div class="attendenceTable" style="display: block;">
                                    <div class="header">
                                        <i class='bx bx-list-ul'></i>
                                        <h3>Member List</h3>

                                        <!-- <a href="#" class="excel">
                                            <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                                            <span>EXCEL</span>
                                        </a>

                                        <a href="#" class="report">
                                            <i class='bx bxs-file-pdf'></i>
                                            <span>PDF</span>
                                        </a> -->

                                        <div class="_flex-container">
                                        <input class="form-control me-2" type="search" placeholder="Search" style="max-width: 225px;height: 40px;" id="search-teacher-name"
                                            aria-label="Search">
                                        <button class="btn btn-success" type="button" id="searchTeacherByNameBtn" disabled><i class='bx bx-search-alt'></i></button>
                                    </div>

                                    </div>
                                    <hr class="text-danger">
                                    <!--table-->
                                    <div class="students-table">
                                        <table class="remove-cursor-pointer">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="thead col-2">#</th>
                                                    <th scope="col" class="thead col-2">Member ID</th>
                                                    <th scope="col" class="thead col-5">Name</th>
                                                    <th scope="col" class="thead col-3">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody id="teacher-table-body">
                                                <!-- content come form database -->
                                            </tbody>

                                        </table>
                                    </div>
                                    <div id="dataNotAvailable">

                                        <div class="_flex-container box-hide">

                                            <div class="no-data-box">
                                                <div class="no-dataicon">
                                                    <i class='bx bx-data'></i>
                                                </div>
                                                <p>No Data</p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--END table-->
                                </div>
                                <hr class="text-danger">

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary" id="prev-page-btn">prev</button>
                                        <a class="btn btn-secondary disabled" role="button" aria-disabled="true"
                                            id="page-number">1</a>
                                        <button type="button" class="btn btn-secondary" id="next-page-btn">next</button>
                                    </div>
                                </div>


                            </div>
                            <!-- Attendence on Specific date  -->

                        </div>
                    </div>

                    <div class="tab-pane" id="leave-tab" role="tabpanel" aria-labelledby="leave-tab" tabindex="0">
                       <?php include('partials/teacher-shared/teachers-leave-tab.php') ?>
                   </div>


                </div>

            </div>


        </div>

    </main>


</div>


<script src="../assets/js/teacher.js"></script>
<script src="../assets/js/teacher-leave-on-admin.js"></script>
<?php include('partials/_footer.php'); ?>