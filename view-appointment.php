<?php
require "assets/php-scripts/conn.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Black Dashboard by Creative Tim</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />

    <!-- Custom CSS for black text in the table -->
    <style>
        #myTable {
            color: white;
            text-shadow: 2px 2px 2px black;
            /* Set text color to black */
        }

        td {
            background-color: #27293deb;
            text-shadow: 2px 2px 2px black;

        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php
        $activePage = "view-appointment";
        include("assets/partials/admin-sidebar.php");
        ?>

        <div class="main-panel">
            <?php include("assets/partials/admin-navbar.php"); ?>

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">View Results</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class=" dataTable display" id="myTable">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>ID</th>
                                                <th>Appoitment Date</th>
                                                <th>Vaccine name</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>

                                        <?php
                                        $sql = "Select * from `vaccine_appointments`";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id=$row['appointment_id'];
                                                $date = $row['appointment_date'];
                                                $vaccine = $row['vaccine_name'];
                                                echo ' <tr>
                                            <th scope="row">' . $id. '</th>
                                              <td>' . $date . '</td>
                                              <td>' . $vaccine. '</td>
                                            </tr>';
                                            }
                                        }


                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <div class="copyright">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>2018 made with <i class="tim-icons icon-heart-2"></i> by <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <script src="assets/js/plugins/chartjs.min.js"></script>
        <script src="assets/js/plugins/bootstrap-notify.js"></script>
        <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
        <script src="assets/demo/demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>