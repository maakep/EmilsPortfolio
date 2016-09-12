<? 
$art = "GAMES";

$folders = array_diff(scandir('../game-art/' . $art . '/'), array('..', '.'));
foreach($folders as $folder) {

	$desc = file_get_contents('../game-art/' . $art . '/' . $folder . '/desc.txt');
	?>
	<div class="item">
	<h1><? echo split('_', $folder)[1]; ?></h1>

		<?
		$files = glob('../game-art/' . $art . '/' . $folder . '/*.{jpg,png,gif,jpeg}', GLOB_BRACE);
		sort($files);
		foreach($files as $file) {
		?>	

			<div class="image-holder">
				<img src="game-art/<? echo $file ?>">
			</div>

		<?
		}
		?> 

		<div class="description">
			<p>
				<? echo $desc ?>
			</p>
		</div>
	</div>

<?
}
?>