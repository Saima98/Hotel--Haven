<?php
	include('shared/header.php');
?>

		<div class="banner fix">
						<script>
					var i = 0; // Start point
					var images = [];
					var time = 2000;

					// Image List
					images[0] = 'img/about1.jpg';
					images[1] = 'img/about2.jpg';
					images[2] = 'img/about3.jpg';
					images[3] = 'img/about4.jpg';
					images[4] = 'img/about5.jpg';
					images[5] = 'img/about6.jpg';
					// Change Image
					function changeImg(){
						document.slide.src = images[i];

						if(i < images.length - 1){
							i++;
						} else {
							i = 0;
						}

						setTimeout("changeImg()", time);
					}

					window.onload = changeImg;

				</script>
				<img name="slide">
			<!--<<img src="img/logo.png" alt="Logo-->
		</div>
		<div class="abouts">
			<div class="about_extra fix">
				<div class="about_single wow fix animated fadeInUp" data-wow-delay="3sec">
					<h1>A 5-Star superior hotel</h1>
					<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
					<br/><br/>
					Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo.</p>
					<img src="img/starlogo.jpg"/>
				</div>
				<div class="about_single fix wow animated fadeInUp" data-wow-delay="3sec">
					<h1>Luxury at its best</h1>
					<p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
					<br/><br/>
					Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
				</div>
				<div class="about_imges">
					<img src="img/about1.jpg"/>
					<img src="img/about2.jpg"/>
					<img src="img/about3.jpg"/>
					<img src="img/about4.jpg"/>
					<img src="img/about5.jpg"/>
					<img src="img/about6.jpg"/>
				</div>
			</div>
		</div>
		<div class="about_room fix">
			<div class="about_room_left fix">
				<h1>A warm welcome!</h1>
				<img src="img/owner.jpg"/>
				<p>We hope you find an offer that suits your needs and chose to stay with us.
				<br/><br/>
				If you got any questions please do not hesitate to contact us.</p>
				<img src="img/signature.png"/>
			</div>
			<div class="about_room_right fix">
				<h1>Available Rooms</h1>
				<div class="about_room_right_single fix wow animated zoomIn" data-wow-delay="3sec">
					<img src="img/room1.jpg"/>
					<p>One Bedroom Suite</p>
					<h3>$ 100.00</h3>
				</div>
				<div class="about_room_right_single fix wow animated zoomIn" data-wow-delay="3sec">
					<img src="img/room2.jpg"/>
					<p>Two Bedroom Deluxe Suite</p>
					<h3>$ 200.00</h3>
				</div>
				<div class="about_room_right_single fix wow animated zoomIn" data-wow-delay="3sec">
					<img src="img/room3.jpg"/>
					<p>Royal Two Bed-Room Suite</p>
					<h3>$ 500.00</h3>
				</div>
				<div class="about_room_right_single fix wow animated zoomIn" data-wow-delay="3sec">
					<img src="img/room4.jpg"/>
					<p>Royal Apertment with 4 Bedrooms</p>
					<h3>$ 1200.00</h3>
				</div>
			</div>
		</div>
		<div class="service fix">
			<p>But we got more</p>
			<h1>Further amenities  <span style="color: #f8d848;">& </span> options to spend your time</h1>
			<div class="single_service fix">
				<div class="single_service_left fix">
				<p>Great Food</p>
				<h2>6 Restaurants to chose from</h2>
				<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
				</div>
				<div class="single_service_right fix">
					<img src="img/restrurant2.jpg"/>
				</div>
			</div>
			<div class="single_service fix">
				<div class="single_service_left fix">
				<p>Relax your Body</p>
				<h2>Spa <span style="color: #f8d848;">& </span>  Wellness Center</h2>
				<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
				<br/><br/>
				Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo.</p>
				</div>
				<div class="single_service_right fix">
					<img src="img/facial.jpg"/>
				</div>
			</div>
			<div class="single_service fix">
				<div class="single_service_left fix">
				<p>A dream come true</p>
				<h2>Wedding at Sayma Hotel</h2>
				<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
				<br/><br/>
				Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo.</p>
				</div>
				<div class="single_service_right fix">
					<img src="img/Wedding.jpg"/>
				</div>
			</div>
		</div>
		
<?php
    include('shared/footer.php');
?>