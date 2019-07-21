<?php 

require 'checkLogin.php';

 ?>

 <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="Styles/image/facon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Pending Enrollements</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- fontawesome icons -->
    <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
 

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <!-- <link href="assets/css/animate.min.css" rel="stylesheet"/> -->

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../dashboard/Styles/css/image.css">
    <link rel="stylesheet" type="text/css" href="../dashboard/Styles/css/table.css">

</head>
<body>

    <!-- pop up Modal for edit-->
<!-- ######################################################################################################### -->
<div class="modal fade"   id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Pending Enrollements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- start enrol form -->
    <form action="" method="post" style="margin: auto; width:70%; " 
    class="main-form needs-validation" novalidate="false">
    <input type="hidden" name="up_date" id="up_date">
         <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" id="id" disabled="true" name="id" class="form-control" required="true">
                    
        </div>
      <div class="form-group">
                    <label for="name">Full Names</label>
                    <input type="text" name="name" id="name" class="form-control" required="true">
                   
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>

          <div class="form-group">
            <label for="drugAbused">Drug Abused</label>
            <input type="text" name="drugAbused" id="drugAbused" class="form-control">
        </div>

        <div class="form-group">
            <label for="location">Location (County)</label>
            <input type="text" id="location" name="location" class="form-control">
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    <!-- end report form -->
    </div>
    </div>
  </div>
</div>
<!-- ########################################################################################### -->


<div class="wrapper">

    <!-- start of side navigation -->
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-2.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                   Sober Kenya
                </a>
            </div>
            <!-- end of logo -->

                <!-- start of navigation links -->
              <ul class="nav">
                <li class="nav-item">
                    <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

            

                  <li class="nav-item active">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="pe-7s-note2"></i>
                            <p>
                                Enrollements
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="pendingEnrolments.php">
                                        <!-- <span class="sidebar-mini">P</span> -->
                                         
                                        <span class="sidebar-normal">Pending Enrollements</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="ApprovedEnrolment.php">
                                        <span class="sidebar-normal">Approved Enrollements</span>
                                    </a>
                                </li>
                               
        
                            </ul>
                        </div>
                    </li>

                  <li class="nav-item">
                        <a href="abuseReport.php">
                            <i class="pe-7s-news-paper"></i>
                            <p>
                               Abuse Reports
                            </p>
                        </a>
                       
                    </li>

            </ul>
            <!-- end of navigation links -->

        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- toggle button for small devices -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- end of toggle button -->

                    <a class="navbar-brand" href="#">Pending Enrollements</a>
                </div>
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                       
                <!-- Nav Item - User Information -->

          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        usersName
                                         <img class="img-profile rounded-circle" src="Styles/image/bmw.jpg"  
                style="border-radius:50%; width:30px;height:30px; ">
                                        
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="user.php">User Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="logout.php">Logout</a></li>
                              </ul>
                        </li>

            <li class="separator hidden-lg"></li>
             </ul>
                </div>
            </div>
        </nav>





        <div class="content">
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Pending Enrollements</h4>
                            </div>            
                            </div>

<!-- demo -->

<!-- demo -->

                            <!-- start of table  container-->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead class="thead thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Drug Abused</th>
                                         <th>Location</th>
                                         <th>Gender</th>
                                         <th>Actions</th>
                                    </tr>
                                </thead>
                                    <?php
                                        // getting connection
                                        require 'connection.php';

                                        //sql query
                                        $sql="SELECT id,name,phone,drug,location,gender FROM pending_enrol";
                                       
                                        // quering database
                                        $result=$connect->query($sql);

                                        // check results if its empty
                                        if ($result-> num_rows >0) {
                                            
                                            // looping through the results
                                            while ($row = $result-> fetch_assoc()) {

                                                //adding values to the table 
                                                echo "<tr><td class='row'>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["drug"]."</td><td>"
                                                .$row["location"]."</td><td>".$row["gender"]."</td>
                                                    
                                                <td> 
                 <button type='button' id='editbtn' data-toggle='modal'class='btn btn-primary editbtn' data-target='#exampleModalLong'> EDIT</button>
                                                <button type='button' class='btn btn-danger'> DELETE</button>
                                                <button type='button' class='btn btn-success'> APPROVED </button>
                                                </td>
                                                </tr>";
                                            }
                                           
                                      
                                        }else{

                                             //results is empty 
                                            echo "0 result";
                                        }

                                        //closing connection
                                        $connect->close();
                                    ?>
       
                                </table>    
                            </div>
                            <!-- end of table container-->

                        </div>
                    </div>
                </div>

             
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="index.php">
                                Home
                            </a>
                        </li>

                          <li>
                            <a href="enrol.php">
                               Enrol
                            </a>
                        </li>
                        <li>
                            <a href="report.php">
                               Report Abuse
                            </a>
                        </li>
                        <li>
                            <a href="about.php">
                               About
                            </a>
                        </li>
                        <li>
                            <a href="moreondrugs.php">
                               More on Drugs
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>  <a href="mailto:soberkenya@gmail.com">Sober Kenya</a>
                </p>
            </div>
        </footer>

    </div>
</div>



    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></scri

 <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Scirpt source files -->
    <script src="Styles/bootStrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Styles/bootStrap/js/popper.min.js"></script>
    <script src="Styles/bootStrap/js/bootstrap.min.js"></script>

<!-- end of script source files -->

<!-- for modal popup -->

  <script  type="text/javascript">

    
    $(document).ready( function () {
        $('#editbtn').on('click', function(){
           


            $(document).on('click','.editbtn',function(){

                var detail= $(this).attr("id");
                $.ajax({
                    url:"fecth.php",
                    method:"POST",
                    data:{detail,detail},
                    dataType:"json",
                    success:function(data){
                        $('#id').val(data.id);
                         $('#name').val(data.name);
                        $('#phoneNumber').val(data.phoneNumber);
                        $('#drugAbused').val(data.drugAbused);
                        $('#location').val(data.location);
                        $('#gender').val(data.gender);
                          $('#editbtn').val("Update");

                           $('#exampleModalLong').modal('show');
                    }

                })
            });




            // $tr = $(this).closest("tr");

            // var data=$tr.children("td").map(function(){
            //      return $(this).text();
            // }).get();

            // console.log(data);
    
            //  $('#id').val(data.id);
            //  $('#name').val(data.name);
            // $('#phoneNumber').val(data[2]);
            // $('#drugAbused').val(data[3]);
            // $('#location').val(data[4]);
            // $('#gender').val(data[5]);

        });
    });

</script>


</body>

<!--  -->

    


</html>
