<nav class="navbar navbar-inverse">
    <div style="font-size:1.7rem; font-weight: bold;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#" style="font-size: 3rem; font-weight:bold;">PFP</a>
            <i style="color:orange;">Piano Food Point</i>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="admin_dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="ordersprocessed.php"><i class="fa fa-tasks"></i> Processed orders</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-database"></i> My Library <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin_menu.php"><i class="fa fa-cutlery"></i> View Menu</a></li>
                            <li><a href="ordertable.php"><i class="fa fa-shopping-bag"></i> View Orders</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-group"></i> Users <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="users.php"><i class="fa fa-user"></i> Customers</a></li>
                            <li><a href="cooker.php"><i class="fa fa-user-secret"></i> Admin</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user"></span><?php echo ' ' .$_SESSION['fullname']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin_dashboard.php"><i class="fa fa-dashboard"></i> My Dashboard</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> Notifications </a></li>
                           <!-- <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Account</a></li>-->
                            <li><a href="server.php?logout=<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-sign-out"></i> Logout</a></a></li>
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>