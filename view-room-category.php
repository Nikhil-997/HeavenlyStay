


<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<!--<div id="get_cat"></div>-->
				<div class="category-toggle-wrap">
				<div class="category-toggle">
				<b><h3>View Rooms</h3></b>
										<!--<<li class="active"><a href="#"><h4>View Rooms</h4></a></li>-->
					<div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                    </div></div>
					<nav class="category-menu hm-1">
					<ul>
					<li><a href="book-room-form.php?typeid=1">Single Room-A/C</a></li>
					<li><a href="book-room-form.php?typeid=2">Single Room-Non A/C</a></li>
					<li><a href="book-room-form.php?typeid=3">Double Room-A/C</a></li>
					<li><a href="book-room-form.php?typeid=4">Double Room-Non A/C</a></li>
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
		