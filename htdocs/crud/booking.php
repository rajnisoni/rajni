<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Booking Details</title>
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
            <a href="booking.php"   class="active"><span class="las la-list"></span>
                <span>Booking</span></a>
        </li>
        <li>
            <a href="sales.php"><span class="las la-clipboard-list"></span>
                <span>Sales</span></a>
        </li>
        <li>
            <a href="income.php"><span class="las la-receipt"></span>
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

            Booking Details
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
            <a href="services.php">
                <div>
                    <h1>64</h1>
                    <p>Total Booking</p>
                </div>
        </a>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>890</h1>
                    <span>Today's Booking</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>510</h1>
                    <span>Cancelled Orders</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>1,00,000</h1>
                    <span>Income of Today's Booking</span>
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
                        <h2>Today's Booking</h2>
                        <button>See all <span class="las la-arrow-right"></span></button>

                    </div>
                    <div class="card-body">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Product Title</td>
                                    <td>Vendor Name</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
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
            <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h2>Booking Feedback</h2>
                            <button>See all <span class="las la-arrow-right"></span></button>
    
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <img src="img.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Ravi Sahu</h4>
                                    <small>Shop No 4 bhopal</small>
                                </div>
                            </div>
                            <div>
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>

                            <div class="customer">
                                <img src="img.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Ravi Sahu</h4>
                                    <small>Shop No 4 bhopal</small>
                                </div>
                            </div>
                            <div>
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>

                            <div class="customer">
                                <img src="img.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Ravi Sahu</h4>
                                    <small>Shop No 4 bhopal</small>
                                </div>
                            </div>
                            <div>
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>

                            <div class="customer">
                                <img src="img.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Ravi Sahu</h4>
                                    <small>Shop No 4 bhopal</small>
                                </div>
                            </div>
                            <div>
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
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
