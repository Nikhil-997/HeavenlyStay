

<form id="gym">

<a href="admin-dashboard.php">Back To Dashboard</a><br><br>
<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<!--<div id="get_cat"></div>-->
				<div class="category-toggle-wrap">
				<div class="category-toggle">
				<b><h4>Health & Spa Facilities</h4></b>
										<!--<<li class="active"><a href="#"><h4>Health & Spa Facilities</h4></a></li>-->
					<div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                    </div></div>
					<nav class="category-menu hm-1">
					<ul>
					<li><a id="view-gym-booking.php" class="adash">View Gym Bookings</a></li>
					<li><a id="view-swim-booking.php" class="adash">View Swimming Pool Booking</a></li>
					<!--<li><a id="View-spa-booking.php" class="adash">View Spa Bookings</a></li>-->
					</ul>
					</nav>
					<!--<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>-->
				</div>
				<!--<div id="get_brand"></div>-->
				
			</div>
			<div class="col-md-9">
				<div id="loadMenu">
				</div>
			</div>
			<script>
				$('.adash').click(function(event)
				{
					event.preventDefault();
					$('#loadMenu').load($(this).attr('id')); 
					//alert();
				});
			</script>
		</div>