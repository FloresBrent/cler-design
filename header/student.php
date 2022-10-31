<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Student Dashboard</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel = "stylesheet" href="assets/css/style.css">

<!-- Boostrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<!-- FontAwesome Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper" >
                <div class="sidebar-heading border-bottom bg-dark text-light">CLER</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">About us</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Team</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">FAQ</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-secondary border-bottom" style="padding-bottom: 3%;">
                    <div class="container-fluid">
                        <button class="btn btn-outline-warning" id="sidebarToggle"> <i class="bi bi-view-list"></i></button>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container mt-3">
                    <h1>SIDE BAR</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, quia, tempore excepturi nostrum explicabo accusantium, aut voluptatibus dicta quibusdam nisi praesentium facilis error atque commodi maiores nam eaque illo consectetur?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus omnis explicabo voluptatibus id laborum illo exercitationem voluptatum minima, tempore ea recusandae iusto consequatur enim quidem a. Consequuntur, doloribus dolores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus omnis explicabo voluptatibus id laborum illo exercitationem voluptatum minima, tempore ea recusandae iusto consequatur enim quidem a. Consequuntur, doloribus dolores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus omnis explicabo voluptatibus id laborum illo exercitationem voluptatum minima, tempore ea recusandae iusto consequatur enim quidem a. Consequuntur, doloribus dolores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus omnis explicabo voluptatibus id laborum illo exercitationem voluptatum minima, tempore ea recusandae iusto consequatur enim quidem a. Consequuntur, doloribus dolores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus omnis explicabo voluptatibus id laborum illo exercitationem voluptatum minima, tempore ea recusandae iusto consequatur enim quidem a. Consequuntur, doloribus dolores.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus omnis explicabo voluptatibus id laborum illo exercitationem voluptatum minima, tempore ea recusandae iusto consequatur enim quidem a. Consequuntur, doloribus dolores.</p>
                </div>                
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script>
        window.addEventListener('DOMContentLoaded', event => {

// Toggle the side navigation
const sidebarToggle = document.body.querySelector('#sidebarToggle');
if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
}

});

        
        </script>
    </body>
</html>
