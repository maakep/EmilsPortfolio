<?php 
$twitter = 'UrbanHelsing';
$linkedin = array("url" => "https://www.linkedin.com/in/emil-hallin-8b74a3a8", "name" => "Emil Hallin");
$email = "emil.hallin93@gmail.com";
//html supported
$aboutText = '
Graduated from Malmö Högskola 2016 with a degree in Game Development.
			Regular participant in Ludum Dare and other game jams.
			Enjoy playing games.
			Enjoy making games.
';

?>

<div class="padding-100">
		<p>
			<? echo $aboutText; ?>
		</p>
	</div>
<div class="contact-content flex justify-around icon-imgs padding-100 text-center">
	<div class="contact-item">
		<a href="mailto:<? echo $email; ?>">
			<img src="./img/Gmaillogo2014.png">
			<br>
		</a>
		<input onclick="this.select();" value="<? echo $email; ?>" class="contact-input" readonly>
	</div>
	<div class="contact-item">
		<a target="_blank" href="<? echo $linkedin["url"]; ?>">
			<img src="./img/linkedin.png">
			<br>
			<i><? echo $linkedin["name"]; ?></i>
		</a>
	</div>
	<div class="contact-item">
		<a target="_blank" href="https://twitter.com/<? echo $twitter; ?>">
			<img src="./img/twitterbird.png">
			<br>
			<i>@<? echo $twitter; ?></i>
		</a>
	</div>
</div>