<?php
	$title = "Review";
?>

<?php require 'req/head.php'?>


<div class="fs-container">

	<div class="full-small fs-1">
		<div class="review-others">
			<h1>Testimonials</h1>
			<img src="/img/rosa.jpg">
			<h3>Amazing Food</h3>
			<p>Cooking is about passion, so it may look slightly temperamental in a way that it's too assertive to the naked eye.</p>
			<h4>- Ramsay Bolton</h4>
			<br/>
			<h3>Best Company</h3>
			<p>We have just declared this company as the best company in the world.</p>
			<h4>- UNESCO</h4>
			<br/>
			<h3>More Testimonials</h3>
			<p>Your review can feature here. Just send it and Make Me Happy!</p>
			<h4>- Ishpreet (CEO)</h4>
			<br/>
		</div>
	</div>

	<div class="full-small fs-2">
		
		<div class="review">

			<h1>Review Us</h1>
			
			<form name="review">
				<fieldset>
					<legend>About You</legend>
					<div class="about-you"><i class="material-icons about-you-name">person</i><input type="text" name="name" placeholder="Name"></div>
					<div class="about-you"><i class="material-icons about-you-email">mail</i><input type="email" name="email" placeholder="E-Mail"></div>
				</fieldset>
				<fieldset>
					<legend>Rating</legend>
					<span>
						1
						<input type="radio" value="1" name="rating">
					</span>
					<span>
						2
						<input type="radio" value="2" name="rating">
					</span>
					<span>
						3
						<input type="radio" value="3" name="rating">
					</span>
					<span>
						4
						<input type="radio" value="4" name="rating">
					</span>
					<span>
						5
						<input type="radio" value="5" name="rating" checked>
					</span>
				</fieldset>
				<fieldset>
					<legend>Details (Optional)</legend>
					<textarea placeholder="Describe your experience" name="description"></textarea>
				</fieldset>
				<fieldset>
					<p class="review-output"></p>
					<input type="submit" name="submit">
				</fieldset>
			</form>

		</div>
	
		<div class="review-done">

			<h1 class="review-done-head">Please Wait
				<div class="loader">
					<svg class="circular" viewBox="25 25 50 50">
						<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
					</svg>
				</div>
			</h1>
			<p class="review-done-body">Submitting the review...</p>
		</div>


	</div>


<?php require 'req/foot.php'?>