<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider"></li>
                  <li class="active"><a href="emp-dashboard.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                    <?php
                      $aid=$_SESSION['admin_id'];//assaign session a varible [PASSENGER ID]
                      $ret="select * from rhmh_admin where admin_id=?";
                      $stmt= $mysqli->prepare($ret) ;
                      $stmt->bind_param('i',$aid);
                      $stmt->execute() ;//ok
                      $res=$stmt->get_result();
                      //$cnt=1;
                      while($row=$res->fetch_object())
                      {
                    ?>
                
                    <?php }?>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-train"></i><span>Trains</span></a>
                  
                    <ul class="sub-menu">
                       <li><a href="emp-add-train.php">Add Train</a>
                       <li><a href="emp-manage-train.php">Manage Trains</a>
                    </li>
                      
                    </ul>
                
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi  mdi-account-switch"></i><span>Passegers</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-add-passenger.php">Add Passenger</a>
                      </li>
                      <li><a href="emp-manage-passengers.php">Manage Passengers</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi  mdi-account-check"></i><span>Employees</span></a>
                    <ul class="sub-menu">
                      <li><a href="admin-add-employee.php">Add Employee</a>
                      </li>
                      <li><a href="admin-manage-employee.php">Manage Employee</a>
                      </li>
                      
                    </ul>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-ticket-confirmation"></i><span>Tickets</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-approved-tickets.php"><span class="badge badge-primary float-right">Approved</span>View</a>
                      <li><a href="emp-pending-tickets.php"><span class="badge badge-primary float-right">Pending</span>View</a>
                      <li><a href="emp-tickets.php"><span class="badge badge-primary float-right">New</span>Manage</a>
                      </li>
                    </ul>
                  </li>
                 

                  <li class="parent"><a href="#"><i class="icon mdi  mdi-ticket-account"></i><span>Accounting</span></a>
                    <ul class="sub-menu">
                      <li><a href="emp-view-accounting.php"><span class="badge badge-primary float-right">Ticket Payments</span>View</a>
                      </li>
                    </ul>
                  </li>   

                  
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>