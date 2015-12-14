<?php
$data = array(
	'logo' => array(
		'ceec_right.jpg',
		'ceec_left.jpg'
	),
	'book_pages' => array(
		'big/01.jpg',
		'big/02.jpg',
		'big/03.jpg',
		'big/04.jpg',
		'big/05.jpg'
	),
	'book_front' => array(
		'big/f1.jpg',
		'big/f2.jpg',
		'big/f3.jpg',
		'big/f4.jpg'
	),
	'book_addenda' => array(
		'big/a1.jpg',
		'big/a2.jpg',
		'big/a3.jpg',
		'big/a4.jpg'
	)
);

foreach($data as $collection_key => $collection) {
	$hide = ($collection_key == 'logo') ? '' : 'style="display: none;"';
	//$ride = ($collection_key == 'logo') ? 'data-ride="carousel"' : '';
	$ride = 'data-interval="false"';
	echo '<div id="slider-' . $collection_key . '" class="slider" ' . $hide . '>';
		echo '<div class="carousel slide" id="carousel-' . $collection_key . '" ' . $ride . '>';
			echo '<ol class="carousel-indicators">';
				foreach($collection as $key => $v) {
					$active = ($key == 0) ? 'class="active"' : '';
					echo '<li data-target="carousel-' . $collection_key . '" data-slide-to="' . $key . '" ' . $active . '></li>';
				}
			echo '</ol>';
			echo '<div class="carousel-inner" role="listbox">';
				foreach($collection as $key => $v) {
					$active = ($key == 0) ? ' active' : '';
					echo '<div class="item' . $active . '">';
						echo '<img src="img/' . $v . '" alt="">';
						echo '<div class="carousel-caption">';
							echo '<a class="view_details btn btn-info" role="button" href="searchpage.php">Details</a>';
						echo '</div>';
					echo '</div>';
				}
			echo '</div>';
			
			echo '<a class="left carousel-control" href="#carousel-' . $collection_key . '" role="button" data-slide="prev">';
				?>
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<?php
			echo '<a class="right carousel-control" href="#carousel-' . $collection_key . '" role="button" data-slide="next">';
				?>
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			<?php
		echo '</div>';
	echo '</div>';
}
?>

