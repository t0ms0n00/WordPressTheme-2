<?php
    get_header();
?>

<div class="content">
    <div class="top-cards">
        <div class="card">
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        <h3> 1 </h3>
        </div>
        <div class="card"></div>
        <div class="card">
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        <h3> 3 </h3>
        </div>
        <div class="card"></div>
        <div class="card">
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        <h3> 5 </h3>
        </div>
    </div>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/image 1.png" alt="bars">
    <div class="bottom-cards">
        <div class="card">
        <h3> 1 </h3>
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        </div>
        <div class="card">
        <h3> 2 </h3>
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        </div>
        <div class="card">
        <h3> 3 </h3>
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        </div>
        <div class="card">
        <h3> 4 </h3>
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        </div>
        <div class="card">
        <h3> 5 </h3>
        <p>Lorem, <span> ipsum </span> dolor sit amet consectetur adipisicing elit. Nam architecto temporibus iure minima non. Blanditiis enim quod tenetur dolorum doloribus illo illum voluptates dolor et! </p>
        </div>
    </div>
    <div class="list">
    <?php 
        while ( have_rows('employeelist') ) : the_row();
            $name = get_sub_field('firstname');
            $image = get_sub_field('photo') ?: get_bloginfo('stylesheet_directory') . "/img/avatar-alt.png";
            ?>
            <div class="employee">
                <img src='<?php echo $image ?>' alt="photo" >
                <p><?php echo $name ?></p>
            </div>
            <?php
        endwhile;
    ?>
    </div>
</div>

<?php
    get_footer();
?>    