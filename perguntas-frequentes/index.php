<!DOCTYPE html>
<html>
<head>
	<?php include '../inc/head.php'; ?>
</head>
<body id="page-faq">
	<?php include '../inc/header.php'; ?>

	<main>
		<div class="container">
			
			<div class="page-title">
				<h1 class="title">Perguntas frequentes</h1>
			</div>

			<ul id="list-faq">
				<?php for($i=0;$i<=9;$i++) { ?>
					<li>
						<div data-toggle="collapse" class="collapsed" data-target="#answer-<?php echo $i; ?>" data-parent="#list-faq">
							<h2>Lorem ipsum dolor sit amet consectetur adipiscing?</h2>
							<span class="fa fa-plus icon-collapsed"></span>
							<span class="fa fa-minus icon-show"></span>
						</div>
						<div id="answer-<?php echo $i; ?>" class="collapse">
							<p>Etiam dignissim aliquam lacus at volutpat. Sed pretium non nibh et auctor. Vivamus vel dolor iaculis, viverra metus varius, facilisis libero.</p>
							<p>Praesent elementum malesuada quam, ut viverra orci facilisis quis. Nunc viverra nisl ac ante aliquam gravida. Aenean elementum massa ac aliquam aliquet. Fusce tincidunt, justo sit amet dapibus faucibus, odio lectus fermentum justo, ac aliquam purus erat ut neque. Vestibulum eu malesuada dolor. Mauris eu luctus turpis. </p>
						</div>
					</li>
				<?php } ?>
			</ul>
			
		</div>
	</main>
	
	<?php include '../inc/footer.php'; ?>
</body>
</html>