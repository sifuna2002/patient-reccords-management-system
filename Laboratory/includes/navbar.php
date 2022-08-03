
  <?php
            $aid=$_SESSION['em_id'];
            $ret="select * from hospital_employees where em_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
      	 //$cnt=1;
      	   while($row=$res->fetch_object())
  {?>
                    <nav class="navbar navbar-expand fixed-top be-top-header">
                            <div class="container-fluid">
                            <img width="100" height="100" src="assets/img/1bcb7e8893204665b86670bad53fd246-removebg-preview.png" alt="Avatar"><span class="user"></span>
                              <div class="page-title"><span>Laboratory Department Dashboard</span></div>
                              <div class="be-right-navbar">
                                <ul class="nav navbar-nav float-right be-user-nav">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                      <img src="assets/img/avatar.png" alt="Avatar"><span class="user-name"><?php echo $row->em_fname;?> <?php echo $row->em_lname;?></span>
                                    </a>
                                    <div class="dropdown-menu" role="menu">
                                      <div class="user-info">
                                        <div class="user-name"><?php echo $row->em_email;?></div>
                                        <div class="user-position online">online</div>
                                      </div>
                                        <a class="dropdown-item" href="ohcms_employee_change_password.php"><span class="icon mdi mdi-settings"></span>Change Password</a>
                                        <a class="dropdown-item" href="assets/configs/logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                    </nav>
  <?php }?>
