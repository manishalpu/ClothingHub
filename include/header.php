<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><b>HHC</b></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" style="margin-left: 30%;">
            <li class="active"><a href="../index.php"><b>Home</b></a></li>
            <li><a href="../homecare.php"><b>Homecare</b></a></li>
            <li><a href="../healthcare.php"><b>Healthcare</b></a></li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
            if(empty($_SESSION['id']))
            {
                echo '<li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            }
            else
            {
                echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>';
            }
            ?>
            
        </ul>
        </div>
    </div>
</nav>