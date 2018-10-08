<?php  include "../includes/datab.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<?php include "includes/head.php" ?>
</head>
<body>
	<div id="wrapper">

       <?php  include "../admin/includes/navigation.php"     ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users
                            <small></small>
                        </h1>
                        
                        <table class="table table-bordered table-hover">
                        	<thead>
                        		<th>User Id</th>
                        		<th>Username</th>
                        		<th>First</th>
                        		<th>Last</th>
                        		<th>Email</th>
                        		<th>Designation</th>
                        	</thead>
                        	<tbody>

                        		<?php
                        		$user_query= "select * from users";
                        		$selected_user = mysqli_query($conn,$user_query);

                        		while ( $row = mysqli_fetch_assoc($selected_user)) {

                        			echo "<tr>";
                        			echo "<td>".$row['user_id']."</td>";
                        			echo "<td>".$row['username']."</td>";
                        			echo "<td>".$row['user_firstname']."</td>";
                        			echo "<td>".$row['user_lastname']."</td>";
                        			echo "<td>".$row['user_email']."</td>";
                        			echo "<td>".$row['user_role']."</td>";
                        			echo "</tr>";
                        		}

                        		?>
                        	</tbody>


                        </table>



                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>
</html>




