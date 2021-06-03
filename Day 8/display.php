<?php
include("connection.php");
session_start();
?>
<html>
<head>
            <title>display</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
            <style>
                #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 80%;
                }
                #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                }
                #customers tr:nth-child(even){background-color: #f2f2f2;}
                #customers tr:hover {background-color: #ddd;}
                #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #4CAF50;
                    color: white;
                }
                .btn {
                    background-color: #4CAF50;
                    border: none;
                    color: white;
                    padding: 12px 16px;
                    font-size: 16px;
                    cursor: pointer;
                }
                .btn {
                    background-color: #4CAF50;
                    border: none;
                    color: white;
                    padding: 8px 10px;
                    font-size: 16px;
                    cursor: pointer;
                }
                /* Darker background on mouse-over */
                .btn:hover {
                    background-color: #32CD32;
                }
            </style>
            </head>
    <body>
    <h1>EMPLOYEES DETAILS</h1>

            <a href="registration.php"><button class="btn"><i class="fa faplus"></i> ADD NEW USER</button></a>
            <div>
            <h1></h1>
            <table id="customers" >
            <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DEPARTMENT</th>
            <th>DESIGNATION</th>
            <th>ACTION</th>
            
            <?php
            $i=1;
            $query = mysqli_query($connection,"select * from employees group by id");
            while($result=mysqli_fetch_array($query))
            {
            ?>
            <tr>
            <td> <?php echo $i; ?> </td>
            <?php
            $id=$result['id'];
            $query1= mysqli_query($connection,"select * from employees where id='$id'");
            ?>
            <td> <?php echo $result['name']; ?> </td>
            <td><?php echo $result['department']; ?></td>
            <td><?php echo $result['designation']; ?></td>
            <td><a href="register_update_process.php?deleteid=<?php echo$result['id']?>"onclick="return confirm ('Surely delete this item???');">
            <button class="btn"><i class="fa fa-trash"></i> DELETE</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
           
            <a href="process_update.php?editid=<?php echo
            $result['id']?>"><button class="btn"><i class="fa fa-pencil-square"></i>EDIT </button></a></td>
            
            </tr>
            <?php $i++;
            
            } ?>
            </table>
            </div>
            <!-- Essential javascripts for application to work-->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script>
            <!-- The javascript plugin to display page loading on top-->
            <script src="js/plugins/pace.min.js"></script>
            <!-- Page specific javascripts-->
            <!-- Data table plugin-->
            <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript">$('#sampleTable').DataTable();</script>
            <!-- Google analytics script-->
    </body>
</html>