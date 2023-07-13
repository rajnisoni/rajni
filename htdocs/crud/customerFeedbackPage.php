<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Customer Feedback</title>
    <script type="text/javascript" src="dashboard.js"></script>
	<link rel="stylesheet" type="text/css" href="dashboradstyle.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>

    <input type="checkbox" id="nav-toggle">

<div class="sidebar">
<div class="sidebar-brand">
    <h2><span class="lab la-accusoft"></span> <span>Isevak</span></h2>

</div>
<div class="sidebar-menu">
    <ul>
        <li>
            <a href="dashboard.php"><span class="las la-igloo"></span>
                <span>DashBoard</span></a>
        </li>
        <li>
            <a href="customer.php" class="active"><span class="las la-users"></span>
                <span>Customer</span></a>
        </li>
        <li>
            <a href="vendor.php"><span class="las la-igloo"></span>
                <span>Vendor</span></a>
        </li>
        <li>
            <a href="booking.php"><span class="las la-list"></span>
                <span>Booking</span></a>
        </li>
        <li>
            <a href="sales.php"><span class="las la-clipboard-list"></span>
                <span>Sales</span></a>
        </li>
        <li>
            <a href="income.php"  ><span class="las la-receipt"></span>
                <span>Income</span></a>
        </li>
    </ul>
</div>
</div>
<div class="main-content">
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>

            Customer Feedback
        </h2>
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here"/>
        </div>
        <div class="user-wrapper">
            <img src="" width="40px" height="40px" alt="">
            <div>
                <h4>John Doe</h4>
                <small>Super admin</small>
            </div>
        </div>
    </header>

    <main>

        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>118</h1>
                    <span>Total Customers</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>40</h1>
                    <span>New Customers</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>5100</h1>
                    <span>Daily Visitor</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>109</h1>
                    <span>Feedback</span>
                </div>
                <div>
                    <span class="las la-receipt"></span>
                </div>
            </div>

        </div>

       
        
        </div>
    </main>

</div>

   
	
	<footer>
		<p>Copyright &copy; 2023</p>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
	<script src="app.js"></script>
</body>
</html>
