<nav class="navbar navbar-inverse" style="position: fixed; width: 100%; z-index: 1;">
    <div style="font-size:1.7rem; font-weight: bold;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#" style="font-size: 3rem; font-weight:bold;">PFP</a>
            <i style="color:orange;">Piano</i>
            <i style="color: orange;">Food</i>
            <i style="color: orange;">Point</i>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="user_dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="index.php"><i class="fa fa-tasks"></i> Menu</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-shopping-bag"></i> My Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="customertable.php"><i class="fa fa-shopping-bag"></i> My Orders</a></li>
                        </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user"></span><?php echo ' ' .$_SESSION['fullname']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="user_dashboard.php"><i class="fa fa-dashboard"></i> My Dashboard</a></li>
                            <li><a href="customertable.php"><i class="fa fa-bell"></i> Notifications </a></li>
                            <li><a href="details.php"><i class="fa fa-user"></i> My Profile</a></li>
                            <li><a href="server.php?logout=<?php echo $_SESSION['user_id']; ?>"><i class="fa fa-sign-out"></i> Logout</a></a></li>
                        </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>