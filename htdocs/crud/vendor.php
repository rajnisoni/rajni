<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Vendor Details</title>
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
            <a href="dashboard.php" ><span class="las la-igloo"></span>
                <span>DashBoard</span></a>
        </li>
        <li>
            <a href="customer.php"><span class="las la-users"></span>
                <span>Customer</span></a>
        </li>
        <li>
            <a href="vendor.php" class="active"><span class="las la-igloo"></span>
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

            Vendor Details
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
    <!-- <a href='display.php'> -->
    <main>
        <div class="cards">
            <div class="card-single">
            <a href='display.php'>
                <div>
                        <h1>64</h1>
                        <span>Total Vendor</span>
                    </a> 
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>890</h1>
                    <span>Total Services</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>510</h1>
                    <span>Active Vendors</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>1,00,000</h1>
                    <span>Total Income of Vendor</span>
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
                        <!-- <h2>Services</h2>
                        <button>See all <span class="las la-arrow-right"></span></button> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendor.css">
    <title>Document</title>
  <style>
    /* CSS styling for the form */
    .form-container {
      width: 400px;
      margin: 0 auto;
    }

    .form-container input[type="text"],
    .form-container select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="add">
    <div class="div1"><h2>Services Form</h2></div>
    <div class="div2">
        <form action="submit.php" method="post">
      <div><label for="price_list">Price List:</label></div>
      <div><input type="text" name="price_list" id="price_list" required></div>

      <label for="area">Area:</label>
      <input type="text" name="area" id="area" required>

      <label for="time">Time:</label>
      <input type="text" name="time" id="time" required>

      <label for="milk">Milk (Cow/Buffalo):</label>
      <select name="milk" id="milk" required>
        <option value="cow">Cow</option>
        <option value="buffalo">Buffalo</option>
      </select>

      <label for="amount">Amount (Fixed/Monthly):</label>
      <select name="amount" id="amount" required>
        <option value="fixed">Fixed</option>
        <option value="monthly">Monthly</option>
      </select>
        
      <input type="submit" value="Submit">
      </div>
    </form>
    </div>
  </div>
</body>
</html>
                    </div>
                    <div class="card-body">
                        <table width="100%">
                        </table>
                    </div>
                </div>

            </div>
            <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h2>New Registration</h2>
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
