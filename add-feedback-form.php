<form id="feedback">
<a href="cust-dashboard.php">Back To Dashboard</a><br><br>
<form action="add-feedback-q.php" method="post" >
		   <b><h3>Feedback: <textarea rows="5" cols="30" name="feedback" size="80" maxlength="80
		   "required></textarea></h3></b><br>
		 
      <div class="submit-container clearfix" style="margin-top: 2rem;">          
        <input type="Submit" role="button" name="Submit" class="btn btn-irenic float-left" tabindex="0" value="Submit Feedback">
         <!-- <span>LOGIN</span>-->
        </div>
		<p> Please limit your feedback to less than 80 Characters </p>
		   </form>
		   <script src="assets/jquery.validate.min.js">
			</script>
		
			<script>
				$("#feedback").on('submit',(function(e)
				{
					e.preventDefault();
				
						$(".proccessing").show();
						$.ajax({
							url:'add-feedback-q.php',
							type:'post',
							data:new FormData(this),
							 contentType: false,
                             processData: false,
							success:function(data)
							{
								alert("Feedback submitted Successfully");
								$('#feedback')[0].reset();
							}
						});
				//	} 
				}));
				
				</script>
				
				
				<script>
function check(o) {
    v=o.value.replace(/^\s+|\s+$/,''); // remove any whitespace
    if(o=='') {
        return;
    }
    v=v.substr(v.length-1);
    if(v.match(/\d/g)==null) {
        o.value=o.value.substr(0,o.value.length-1).replace(/^\s+|\s+$/,'');
    }
}
</script>
				</script>
						
				
		   