<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

require 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
    <title>LSTV</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">LSTV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">ACTION</a>
                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">ADD</a></li>
                        <li><a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">UPDATE</a></li>
                        <li><a class="dropdown-item" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@getbootstrap">DELETE</a></li>
                    </ul>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">EMPLOYEE INFORMATION</h3>
                <hr Style="height: 2px;">
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">

                    <div class="btn-group">
</div>  

        <!-- ADD -->
                    <div class="btn-group">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD RECORD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="AddData.php" method="POST">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="1" placeholder="Name" name="name" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Address</label>
                <input type="text" class="form-control" id="2" placeholder="Address" name="address">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birth Date</label><br>
                    <input type="date" id="birthdaytime" name="birthdate">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="text" class="form-control" id="4" placeholder="Age" name="age">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Female"> Other
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Civil Status</label>
                <select name="civilstat" id="civilstat">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Widowed">Widowed</option>
                </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                    <input type="number" class="form-control" id="7" placeholder="Contact Number" name="contactnum">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Salary</label>
                    <input type="number" class="form-control" id="8" placeholder="Salary" name="salary">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label><br>
                    <input type="checkbox" id="1" name="active" value="Active">
                    <label for="ACtive">Active</label><br>
                    <input type="checkbox" id="2" name="active" value="Inactive">
                    <label for="Inactive">Inactive</label><br>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">ADD</button>
            </div>
            </div>
        </div>
        </div>
        </form>

        <!-- UPDATE -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPDATE RECORD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="">Student ID</label>
                                <input type="text" name="stud_id" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Address</label>
                <input type="text" class="form-control" id="2" placeholder="Address" name="address">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Birth Date</label><br>
                <input type="date" id="birthdaytime" name="birthdate">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" class="form-control" id="4" placeholder="Age" name="age">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Female"> Other
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Civil Status</label>
                <select name="civilstat" id="civilstat">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Separated">Separated</option>
                <option value="Widowed">Widowed</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                <input type="number" class="form-control" id="7" placeholder="Contact Number" name="contactnum">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Salary</label>
                <input type="number" class="form-control" id="8" placeholder="Salary" name="salary">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status</label><br>
                <input type="checkbox" id="1" name="active" value="Active">
                <label for="Active">Active</label><br>
                <input type="checkbox" id="2" name="active" value="Inactive">
                <label for="Inactive">Inactive</label><br>
                </div>
                            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="update_stud_data">UPDATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- CLOSE UPDATE -->

        <!-- DELETE -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DELETE RECORD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="Delete.php" method="POST">
                <div class="form-group mb-3">
                 <label for="">Employee No.</label>
                 <input type="text" name="delete_stud_id" class="form-control" >
                </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="stud_delete_btn">DELETE</button>
            </div>
            </div>
        </div>
        </div>
        <!-- CLOSE DELETE -->

        <!-- tbl1 -->
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Employee Name</th>
                            <th>Address</th>
                            <th>Birth Date</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Civil Status</th>
                            <th>Contact Number</th>
                            <th>Salary</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM employeefile";
                        $result = $connect->query($sql);

                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["recid"] . "</td>
                                <td>" . $row["fullname"] . "</td>
                                <td>" . $row["address"] . "</td>
                                <td>" . $row["birthdate"] . "</td>
                                <td>" . $row["age"] . "</td>
                                <td>" . $row["gender"] . "</td>
                                <td>" . $row["civilstat"] . "</td>
                                <td>" . $row["contactnum"] . "</td>
                                <td>" . $row["salary"] . "</td>
                                <td>" . $row["isactive"] . "</td>
                                
                            </tr>"
                            ;
                        }
                        
                        ?>

                    </tbody>
                    
                </table>
                <br>
                <hr Style="height: 2px;">
                <br>

                <!-- tbl2 -->
                <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">PROBLEM 1</h3>
            </div>
                <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Birth Date</th> 
                            <th>ID</th>
                            <th>Employee Name</th>
                            <th>Salary</th>
                       

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_salary = 0;
                        $sql = "SELECT * FROM employeefile order by fullname asc";
                        $result = $connect->query($sql);
                        $name1 = "";
                        $name2 = "";

                        while($row = $result->fetch_assoc()) {
                            $sub = $row["salary"];
                            $total_salary += $sub;
                            echo "<tr>
                            <td>" . $row["birthdate"] . "</td>
                                <td>" . $row["recid"] . "</td>
                                <td id='fname'>" . $row["fullname"] . "</td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                            echo "<tr>
                            <td>SUB TOTAL </td>
                                <td></td>
                                <td></td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                        }


                        ?>
                    </tbody>
                    <tfoot>
                            <tr>
                                <th colspan="1">GRAND TOTAL</th>
                                <th colspan="1"></th>
                                <th colspan="1"></th>
                                <th id="total_order"><?= $total_salary?></th>
                            </tr>
                        </tfoot>
                </table>
                <a href="export.php" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Print</a>
            </div>
        </div>
        </table>
                <br>
                <hr Style="height: 2px;">
                <br>
                <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">PROBLEM 2</h3>
            </div>
                <!-- tbl3 -->
                <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Address</th> 
                            <th>Employee Name</th>
                            <th>Salary</th>
                       

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total_salary = 0;
                        $sql = "SELECT * FROM employeefile order by fullname asc";
                        $result = $connect->query($sql);
                        $name1 = "";
                        $name2 = "";

                        while($row = $result->fetch_assoc()) {
                            $sub = $row["salary"];
                            $total_salary += $sub;
                            echo "<tr>
                            <td>" . $row["address"] . "</td>
                                <td id='fname'>" . $row["fullname"] . "</td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                            echo "<tr>
                            <td>SUB TOTAL </td>
                                <td></td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                        }


                        ?>
                    </tbody>
                    <tfoot>
                            <tr>
                                <th colspan="1">GRAND TOTAL</th>
                                <th colspan="1"></th>
                                <th id="total_order"><?= $total_salary?></th>
                            </tr>
                        </tfoot>
                </table>
                <a href="export2.php" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Print</a>
            </div>
        </div>
        <!-- tbl4 -->
                <br>
                <hr Style="height: 2px;">
                <br>
                <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">PROBLEM 3</h3>
            </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Address</th>
                            <th>Employee Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM employeefile";
                        $result = $connect->query($sql);

                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["address"] . "</td>
                                <td>" . $row["fullname"] . "</td>                       
                            </tr>"
                            ;
                        }
                        ?>

                    </tbody>
                </table>
                <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Age</th>
                            <th>Birth Date</th>
                            <th>Age</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM employeefile";
                        $result = $connect->query($sql);
                        

                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["recid"] . "</td>
                                <td>" . $row["age"] . "</td>
                                <td>" . $row["birthdate"] . "</td>
                                <td>" . $row["fullname"] . "</td>
                                <td>" . $row["address"] . "</td> 
                            </tr>"
                            ;
                        }
                        
                        ?>

                    </tbody>
                    
                </table>
                <!-- TBL6 -->

                <br>
                <hr Style="height: 2px;">
                <br>
                <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">PROBLEM 4</h3>
            </div> 
            </div>
            </div>
        </div>
        </div>
        </form>
                <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>                            
                            <th>ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Month</th>
                            <th>Type</th>
                        </tr>
                        
                    </thead>
                    
                    <tbody>

                        <?php
                        $sql5 = "SELECT * FROM employeefile";
                        $result5 = $connect->query($sql5);

                        while($row = $result5->fetch_assoc()) {
                            echo "<tr>
                            
                                </td>
                                <td>" . $row["recid"] . "</td>
                                <td>" . $row["fullname"] . "</td>
                                <td>" . $row["birthdate"] . "</td>
                                <td>" . $row["recid"] . "</td>
                                <td>" . $row["isactive"] . "</td> 
                            </tr>"
                            ;
                        }
                        
                        ?>
               

                    </tbody>
                    
                </table>

                 <!-- TBL7 -->

                 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">PROBLEM 5</h3>
            </div>
                </div>
            </div>

            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-body">
                        <form action="dmr.php" method="POST">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">Delete</button><br><br>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Employee Name</th>
                                        <th>Address</th>
                                        <th>Civil Status</th>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <?php
                                        $con = mysqli_connect("localhost","root","","employeedb");

                                        $query = "SELECT * FROM employeefile";
                                        $query_run  = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <tr>
                                                    <td style="width:10px; text-align: center;">
                                                        <input type="checkbox" name="stud_delete_id[]" value="<?= $row['recid']; ?>">
                                                    </td>
                                                    <td><?= $row['recid']; ?></td>
                                                    <td><?= $row['fullname']; ?></td>
                                                    <td><?= $row['address']; ?></td>
                                                    <td><?= $row['civilstat']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="5">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
                    
                    
        </div>
    </div>
</div>
    
                        
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>

</html>