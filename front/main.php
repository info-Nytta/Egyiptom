<main>
	<h2><?php echo $menu[$menu_number]->h2 ?></h2>
        <div class="leiras">
            <p>
            <img src="front/img/<?php echo $menu[$menu_number]->img ?>">
            <?php include("pages/".$menu[$menu_number]->fileName); ?>
            </p>
        </div>
</main>