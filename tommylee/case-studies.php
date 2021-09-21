	<section class="case-studies" id="projects">
		<inner-column>
			
			<h2 class="intro-voice">Projects Case Studies</h2>

			<p class="calm-voice">
				From personal business card style websites to Shopify ecommerce stores, read and explore about the projects I had the privilege to work on. You'll also find personal projects to the end.
			</p>

			<?php include('projects-data.php'); ?>

			<?php
				function buildCaseStudy($key,$title,$intro,$par1,$par2,$logo,$img1,$img2) {
			?>

			<section class="case-wrapper" id="<?=$key?>">

				<h3 class="small-intro-voice case-title" data-aos="fade-right">Project: <?=$title?></h3>

				<flex-wrapper class="case-head">
					<picture data-aos="fade-left" data-aos-duration="500">
						<img src="<?=$logo?>" alt="">
					</picture>
					<div class="case-intro" data-aos="fade-left" data-aos-duration="1000">
						<p class="calm-voice">
							<?=$intro?>
						</p>
					</div>

				</flex-wrapper>

			<?php if ( $par1 ) { ?>

				<flex-wrapper class="case-main1">
					<picture data-aos="fade-right" data-aos-duration="500">
						<img src="<?=$img1?>" alt="">
					</picture>
					<div data-aos="fade-right" data-aos-duration="1000">
						<p class="calm-voice"><?=$par1?></p>
					</div>
				</flex-wrapper>

			<?php } ?>

			<?php if ( $par2 ) { ?>

				<flex-wrapper class="case-main2">
					<picture data-aos="fade-left"  data-aos-duration="500">
						<img src="<?=$img2?>" alt="">
					</picture>					
					<div data-aos="fade-left" data-aos-duration="1000">
						<p class="calm-voice"><?=$par2?></p>
					</div>
				</flex-wrapper>		
				
			<?php } ?>
			</section>		

			<?php	} ?>

			<?php foreach ($projectsData as $project) {

				buildCaseStudy(
					$project["key"],
					$project["title"],
					$project["intro"],
					$project["par1"],
					$project["par2"],
					$project["logo"],
					$project["img1"],
					$project["img2"]
				);

			}

			?>

		</inner-column>
	</section>