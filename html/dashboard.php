<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>
<body>
    <div class="dash-container">
        <!-- side bar section -->
        <div class="side-bar">
              <div class="bar-menu">
                <img src="../img/Logo.png" alt="" class="side-img">
                <p class="current" id="dashboardNav"><img src="../img/Dashboard.png" alt=""> Dashboard</p>
                <p id="profileNav"><img src="../img/User.png" alt=""> Profile</p>
                <p id="downloadNav"> <img src="../img/import.png" alt="">Downloaded Cards</p>
                <p><img src="../img/folder.png" alt="" id="savedNav"> Saved Cards</p>
              </div>
        </div>
        <!-- dashboard section -->
        <div class="dashboard">
            <div class="dashboard-container">
                <div class="dash-head">
                    <h1>Dashboard</h1>
    
                    <div class="dashhead-user">
                    <i class="fa fa-user-circle"></i>
		    <p><?php echo $_SESSION['firstname']; ?></p>
                    <div class="user-prop">
                        <i class="fa fa-chevron-circle-down" id="user-icon"></i>
                    <div class="user-links">
                        <a href="../index.php">Home</a>
                        <a href="card-library.php">Card Library</a>
                        <a href="documentations.php">Documentations</a>
                        <a href="about.php">About</a>
                        <a href="../php/logout.php">Sign Out</a>
                    </div>
                    </div>
                    </div>
                </div>
    
                 <!-- users info section -->
                <div class="users-info">
                    <div class="info">
                        <i class="fa fa-user-circle"></i>
                        <div>
				<h2>Hello <?php echo $_SESSION['firstname'].' '.$_SESSION['surname']; ?></h2>
                            <p>Welcome Back</p>
                        </div>
                    </div>
                    <div class="lastlog">
                        <p>Your last login was on</p>
                        <h3>Thursday 15th June 2023</h3>
                    </div>
                </div>
    
                <!-- Actions section -->
                <div class="actions">
                    <div class="download sec">
                        <img src="../img/download-icon.png" alt="">
                        <div class="load-count">
                            <h2>0</h2>
                            <p>Downloaded Cards</p>
                        </div>
                    </div>
                    <div class="saved sec">
                        <img src="../img/save-icon.png" alt="">
                        <div class="load-count">
                            <h2>0</h2>
                            <p>Saved Cards</p>
                        </div>
                    </div>
            </div>
    
            <!-- downloaded cards sec -->
            <div class="downloads-details">
                <h1>Downloaded Cards</h1>
   		<table class="table table-bordered">
                        <thead>
                                <th>S/N</th>
                                <th>Card Type</th>
                                <th>Card Number</th>
                                <th>CVV</th>
                                <th>Expiry Date</th>
                        </thead>
                    <tbody>
                        <?php
                                if(is_array($fetchData)){
                                        $sn=1;
                                        foreach($fetchData as $data){
                        ?>
			 <tr>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $data['fullName']??''; ?></td>
                                <td><?php echo $data['gender']??''; ?></td>
                                <td><?php echo $data['email']??''; ?></td>
                                <td><?php echo $data['mobile']??''; ?></td>
                        </tr>
                        <?php
                                $sn++;  }} else { ?>
                        <tr>
                                <td colspan="8">
                                <?php echo $fetchData; ?>
                                </td>
                        <tr>
                        <?php
                        }?>
                   </tbody>
                   </table>

                <!--end of table inserted -->

        </div>

        <!-- Profile Section -->
        <div class="profile-container">
            <div class="dash-head">
                <h1>Profile</h1>

                <div class="dashhead-user">
                <i class="fa fa-user-circle"></i>
                <p>User</p>
                <div class="user-prop">
                    <i class="fa fa-chevron-circle-down" id="user-icon"></i>
                <div class="user-links">
                    <a href="">Home</a>
                    <a href="">Card Library</a>
                    <a href="">Documentations</a>
                    <a href="">About</a>
                    <a href="">Sign Out</a>
                </div>
                </div>
                </div>
            </div>

            <div class="profile-box">
                <div class="profile-photo">
                    <i class="fa fa-user-circle"></i>
                    <h1>Users FullName</h1>
                    <p>useremail@gmail.com</p>
                </div>
                <div class="profile-details">
                    <h1>Users Details</h1>
                    <form action="" id="usersDetails">
                        <div class="form-container">
                            <div class="left">
                                <label for="">First Name</label><br>
                            <input type="text" value="Users First Name" class="fName" readonly><br>
    
                            <label for="">Last Name</label><br>
                            <input type="text" value="Users Last Name" class="lName" readonly><br>
                            </div>
                            
                            <div class="right">
                                <label for="">UserName</label><br>
                            <input type="text" value="UserName" class="userN" readonly><br>
    
                            <label for="">Email Address</label><br>
                            <input type="email" value="usermail@gmail.com" class="userMail" readonly>
                            </div>
                        </div>

                        <input type="submit" value="Edit" class="edit btn"> <input type="submit" value="Save" class="save btn" disabled>
                    </form>
                </div>
            </div>

        </div>
    </div>
    
    </div>

    <footer>
        <p>Copyright © 2022. CC_Gen. All rights reserved.</p>

        <div class="socials">
            <a href="#">
                <i class="fa fa-facebook-square" ></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter-square" ></i>
            </a>
            <a href="#">
                <i class="fa fa-instagram" ></i>
            </a>
        </div>

        <div class="foot-links">
            <a href="../index.php">Home</a>
            <a href="html/card-library.php">Card Library</a>
            <a href="html/documentations.php">Documentations</a>
            <a href="about.php">About</a>
        </div>
        
    </footer>

    <script src="../script/dashboard.js"></script>
</body>
</html>