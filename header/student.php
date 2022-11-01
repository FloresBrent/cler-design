<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Student Dashboard</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel = "stylesheet" href="assets/css/style.css">
        <link rel = "stylesheet" href="assets/css/image.css">

        <!-- Boostrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <!-- FontAwesome Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper" >
            <div class="sidebar-heading border-bottom bg-dark text-light"><img src="/assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" />CLER</div>
            <div class="sidebar-heading border-bottom text-dark"><h3>Hello, Brent</h3></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="student_dashboard.php"><i class="fa-solid fa-gauge fa-lg" style="padding : 3.5px"></i>Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="student_profile.php"><i class="fa-sharp fa-solid fa-id-badge fa-lg " style="padding : 3.5px"></i>Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="student_about.php">About Us</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="student_team.php"><i class="fa-sharp fa-solid fa-people-group fa-lg"></i>Team</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="student_faq.php"><i class="fa-sharp fa-solid fa-circle-question fa-lg" style="padding : 3.5px"></i>FAQ</a>

                    <button type="button" class="btn btn-primary">Primary</button>
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom" style="padding-bottom: 3%;">
                    <div class="container-fluid">
                    <button class="btn btn-outline-light" id="sidebarToggle"><i class="bi bi-list"></i></button>
                    </div>
                </nav>
               
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script>
            window.addEventListener("DOMContentLoaded", (event) => {
                // Toggle the side navigation
                const sidebarToggle = document.body.querySelector("#sidebarToggle");
                if (sidebarToggle) {
                    // Uncomment Below to persist sidebar toggle between refreshes
                    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
                    //     document.body.classList.toggle('sb-sidenav-toggled');
                    // }
                    sidebarToggle.addEventListener("click", (event) => {
                        event.preventDefault();
                        document.body.classList.toggle("sb-sidenav-toggled");
                        localStorage.setItem("sb|sidebar-toggle", document.body.classList.contains("sb-sidenav-toggled"));
                    });
                }
            });
        </script>
    
</html>