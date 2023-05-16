<main>
        <div class="container">
            <div class="row">
            <?php foreach($movie_list as $movie){ ?>
                <div class="col-lg-4 col-md-6 col-12 py-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $movie->image?>" class="card-img-top" alt="<?php echo $movie->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $up_title = $movie->capitalizeTitle() ?></h5>
                            <div class="card-text">
                                <div>
                                    Original title: <span class="fw-semibold"><?php echo $movie->original_title ?></span>
                                    <div class="icon-flag">
                                        <img src="./partials/img/<?php echo $movie->nationality ?>.png" alt="Country: <?php echo $movie->nationality ?>">
                                    </div>
                                </div>
                                <div>
                                    Genre:<?php   foreach($movie->genre->genre as $value){
                                    echo " $value "; } ?>
                                </div>
                                <div>
                                    Vote: <?php echo $movie->vote;?>
                                    <div>
                                        <?php echo str_repeat('<i class="fa-solid fa-star"></i>', $movie->roundVote());?>
                                        <?php echo str_repeat('<i class="fa-regular fa-star"></i>', (5 - $movie->roundVote()));?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </main>