   
	
	 <div id="loginForm">
	
<form id="spa">


<div class="panel-body">



<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<div class="table-responsive">
						<table class="table table-striped">
						<thead>
						<tr>
							<th class="text-center">Sl.no</th>
							<th class="text-center">Service</th>
							<th class="text-center">Description</th>
							<th class="text-center">Cost</th>
							
						</tr>
						</thead>
					<tbody>
						
								 <tr>
								 <td align="center"> 1.
								 <td> Specialty Massages 
								 <td>The two most popular massages are Swedish massage and deep tissue massage. Swedish massage typically covers the whole body with firm strokes but without much deep, focused work. Deep tissue massage will use firmer pressure and also include focused work on areas that are especially tight.
								 <td> 2500
								
								 </tr>
								 
								<tr>
								 <td align="center"> 2.
								 <td> Facials 
								 <td>Facials are the second most popular spa treatment. Sometimes there are so many choices that it's hard to decide: Do you book the anti-aging facial, a European facial, or the deep-cleansing facial?
								 <td> 1000
								
								 </tr>
								 
								 <tr>
								 <td align="center"> 3.
								 <td> Body Treatments 
								 <td>Body treatments are an under-rated spa service because people tend to think they can do it themselves at home. Of course, you can, but it won't be as thorough, effective, or relaxing. The basic body scrub exfoliates your outermost, dead skin cells with a salt scrub (rougher), a sugar scrub (gentler), or some other exfoliant, like coffee grounds or fruit enzymes that gently loosen the inter-cellular bonds. It is usually followed by a shower and an application of lotion.
								 <td> 3500
								
								 </tr>
								 <tr>
								 <td align="center"> 4.
								 <td> Fish pedicure 
								 <td>One of the fish spa benefits is it improves blood circulation in the body. This effects the skin and improves complexion.Garra Rufa fish spa is considered as a medical treatment which treats feet problems such as psoriasis, warts and calluses.
								 <td> 1800
								
								 </tr>
								
							
						
						</tbody>
						</table>
						</div>
					
<!--<b><h2>Book Spa Appointment</h2></b>
        <form action="add-spa-time-q.php" method="post">

	<div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value=" Book Appointment">
		 </form>
         <!-- <span>LOGIN</span>-->
           </div>
		   </div>
		    </div>
		  
		   </div>
		
		   </div>
		   
		
		   
		   
		   
		   
		   <script src="assets/jquery.validate.min.js">
			</script>
		
			<script>
				$("#spa").on('submit',(function(e)
				{
					e.preventDefault();
					//alert("hi");
				/* 	$("#product").validate({
						rules:{
							product_name:
							{
								required:true,
								minlength:2
							},
							image:
							{
								required:true
							}
						}
					});
					if($("#product").valid())
					{ */
						$(".proccessing").show();
						$.ajax({
							url:'add-spa-time-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Booked Spa timings Successfully");
								$('#spa')[0].reset();
							}
						});
				//	} 
				}));
				</script>		
		   