
<div class="main-section">
    <div class="container">
        <?php foreach($database as $data) {?>
            <div class="dischi">
                <img src="<?php echo $data['poster']; ?>" alt="<?php echo $data['title']; ?>">
                <h3 class="title">
                    <?php echo $data['title']; ?>
                    <small class="author"><?php echo $data['author']; ?></small>
                </h3>
                <span class="year"><?php echo $data['year']; ?></span>
                <span class="genre"><?php echo $data['genre']; ?></span>
            </div>
        <?php } ?>
    </div>
</div>