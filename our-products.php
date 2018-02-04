<?php require_once 'layouts/header.php'; ?>



<div class="container-fluid">
	<div class="row">
		<div class="col col-lg-12 ml-auto mr-auto">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			  
			  <li class="nav-item">
			    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-milk" role="tab" aria-controls="pills-home" aria-selected="true">Молочная продукция</a>
			  </li><br>
			  
			  <li class="nav-item">
			    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-cookery" role="tab" aria-controls="pills-profile" aria-selected="false">Кулинария</a>
			  </li>

			  <li class="nav-item">
			    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-meat" role="tab" aria-controls="pills-contact" aria-selected="false">Мясная гастрономия</a>
			  </li>
			  
			  <li class="nav-item">
			    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-bakery" role="tab" aria-controls="pills-contact" aria-selected="false">Выпечка</a>
			  </li>
			  
			  <li class="nav-item">
			    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Яйцо домашнее</a>
			  </li>
			</ul>

			<div class="tab-content" id="pills-tabContent">				
				
				<?php require_once 'layouts/milk.php'; ?>

				<?php require_once 'layouts/cookery.php'; ?>
				
				<?php require_once 'layouts/meat.php'; ?>

				<?php require_once 'layouts/bakery.php'; ?>
				
				<?php require_once 'layouts/eggs.php'; ?>
			
			</div>
		</div>
	</div>
</div>

  

<?php require_once 'layouts/footer.php'; ?>












