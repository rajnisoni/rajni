
<!DOCTYPE php>
<php>
<head>
	<title>Isevak(Vendor Dashboard)</title>
	<link rel="stylesheet" type="text/css" href="vendordashboradstyle.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body>

<div class="sidebar">
<div class="sidebar-brand">
    <h2><span class="lab la-accusoft"></span> Isevak</h2>

</div>
<div class="sidebar-menu">
    <ul>
        <li>
            <a href="" class="active"><span class="las la-igloo"></span>
                <span>DashBoard</span></a>
        </li>
        <li>
            <a href="Our Product.php"><span class="las la-store"></span>
                <span>Our product</span></a>
        </li>
        <li>
            <a href="Discount.php"><span class="las la-percent"></span>
                <span>Discount</span></a>
        </li>
        <li>
            <a href="booking.php"><span class="las la-list"></span>
                <span>Booking</span></a>
        </li>
        <li>
            <a href="Our Services.php"><span class="las la-clipboard-list"></span>
                <span>Our services</span></a>
        </li>
        <li>
            <a href="logout.php"><span class="las la-sign-out-alt"></span>
                
                <span>logout</span></a>
        </li>
    </ul>
</div>
</div>
<div class="main-content">
    <header>
        <h2>
            <label for="">
                <span class="las la-bars"></span>
            </label>

            DashBoard
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
                    <h1>64</h1>
                    <span>Total Sales</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>890</h1>
                    <span>Total Income</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>510</h1>
                    <span>Total services</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
            <div class="card-single">
                <div>
                    <h1>1,00,000</h1>
                    <span>Total Booking</span>
                </div>
                <div>
                    <span class="las la-receipt"></span>
                </div>
            </div>

        </div>

       
    </main>


  
	
	<footer>
		<p>Copyright &copy; 2023</p>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
	<script src="app.js"></script>
</body>
</php>
