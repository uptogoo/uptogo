<?php include('inc/head.php'); ?>

<?php include('inc/header.php'); ?>
<?php include('inc/nav.php'); ?>


				<!-- booking html-->
				<div class="image" >
					<img src="images/145.png" alt="img" class="img_book"  >
				</div>

				<table class="tabel_booking_room">
					<tr>
						<th><span> Room  </span></th>
					</tr>


					<tr>
						<th> <input type="number" class="number_room" min="1" max="50" placeholder="value" >  </th>
					</tr>

				</table>


				<table class="tabel_booking_number">

					<tr>
						<th >Adult <input type="number" class="number_" min="1" max="50" placeholder="many" >  </th>
						<th class="Child">child  <input type="number" min="1" max="50" placeholder="many" > </th>
					  </tr>

				</table>
				<table class="tabel_booking_date">

					  <tr>
						<th class="check_out"> check in </th>
						<th class="check_out"> check  out </th>

					</tr>
	

					<tr>
						<th class="tabel_Date"><input type="date" id="start" name="trip-start" value="2022-07-22" 
						min="2022-03-10" max="2030-12-31"> </th>
						<th class="tabel_Date"><input type="date" id="start" name="trip-start" value="2022-08-22" 
							min="2022-03-10" max="2030-12-31"> </th>
					</tr>
					
				</table>

				<div class="send">
					
						<a href="checkout.php"><button class="btt"> CHECK </button></a>

					</div>




		</div>
	</div>
	
	<?php include('inc/script_footer.php'); ?>
