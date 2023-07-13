<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Income Details</title>
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
            <a href="customer.php"><span class="las la-users"></span>
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
            <a href="income.php"  class="active"><span class="las la-receipt"></span>
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

            Income Details
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
                    <h1>10,00,000</h1>
                    <span>Total Income</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>89,000</h1>
                    <span>Today's Income</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>5,10,00</h1>
                    <span>Referral Income</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>10,000</h1>
                    <span>Vendor Income</span>
                </div>
                <div>
                    <span class="las la-receipt"></span>
                </div>
            </div>

        </div>

    
        <div class="recent-grid">
            <div class="project">
                <div class="card">
                    <div class="card-header">
                        <h2>Income By Customers</h2>
                        <button>See all <span class="las la-arrow-right"></span></button>

                    </div>
                    <div class="card-body">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Services</td>
                                    <td>Vendor Name</td>
                                    <td>Amount</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Milk Man</td>
                                    <td>Ravi Sahu</td>
                                    <td>
                                        <span class="pending"></span>
                                          56 Rs/lit
                                    </td>

                                <tr>
                                    <td>Painter</td>
                                    <td>Mukesh Das</td>
                                    <td>
                                        <span class="status"></span>
                                        500 Rs/day
                                    </td>
                                </tr> 
                                <tr>
                                     <td>Carpainter</td>
                                     <td>Mohan Das</td>
                                     <td>
                                       <span class="status"></span>
                                       700/day
                                      </td>
                                </tr>
                                <tr>
                                    <td>XYZ design</td>
                                    <td>Ravi Sahu</td>
                                    <td>
                                        <span class="pending"></span>
                                          review
                                    </td>

                                <tr>
                                    <td>XYZ product</td>
                                    <td>Mukesh Das</td>
                                    <td>
                                        <span class="status"></span>
                                        in progress
                                    </td>
                                </tr> 
                                <tr>
                                     <td>XYZ Product</td>
                                     <td>Mohan Das</td>
                                     <td>
                                       <span class="status"></span>
                                       pending
                                      </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
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
