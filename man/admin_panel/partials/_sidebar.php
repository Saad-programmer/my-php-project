
<div class="sidebar">
    <a href="dashboard.php" class="logo">
        <!-- <i class='bx bx-book-bookmark'></i> -->
        <div class="logo-name">
    <img src="../images/logooo.png" class="logo-img" alt="Logo" style="width: 100px; height: 90px; margin-right: -20px;">
    <span style="color: blue;">AI</span>
    <span style="color: blue;">&</span>
    <span style="color: blue;">DEV</span>
</div>


    </a>
    
      <ul class="side-menu-opener">
        <!-- <li>
            <div class='open-arrow SidebarOpener'><i class='bx bxs-chevron-right'></i></div>
        </li> -->
    </ul>
    
    <ul class="side-menu main-side-board">
        <li><a href="dashboard.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
        <li><a href="teacher.php"><i class='bx bxs-user-rectangle'></i>Member</a></li>
        <li><a href="student.php"><i class='bx bxs-user-detail'></i>User</a></li>
        <li><a href="noticeboard.php"><i class='bx bx-bookmark'></i>Notice Board</a></li>
        <li><a href="syllabus.php"><i class='bx bx-file-blank'></i>Syllabus</a></li>
        <li><a href="upload.php"><i class='bx bx-file-blank'></i>Upload Syllabus</a></li>
        <li><a href="settings.php"><i class='bx bx-cog'></i>Settings</a></li>
    </ul>
    <ul class="side-menu">
        <li>
            <a class="logout" data-bs-toggle="modal" data-bs-target="#logout-modal">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>
        </li>
    </ul>
</div>

<div class="modal fade" id="logout-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <strong>Do you really want to logout?</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="logout()">Logout</button>
            </div>
        </div>
    </div>
</div>

<body>
    <style>
.logo-name {
    display: flex;
    align-items: center; /* Aligns items vertically in the center */
}

.logo-img {
    width: 500px; /* Adjust the width as needed */
    height: 60px; /* Maintains the aspect ratio */
    margin-right: 10px; /* Space between the logo and the text */
}

.blue-text {
    color: blue;
    font-size: 20px; /* Adjust the font size as needed */
}
</style>

</body>
