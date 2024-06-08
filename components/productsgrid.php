<div class="row">

    <?php
    //  random number from 1-12
    $rand = rand(1, 11);

    for ($i = 0; $i < $rand; $i++) :
    ?>



        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-0 ">

                <div class="mask position-absolute d-flex " style="height: 50px">
                    <div class="d-flex justify-content-start align-items-start h-100 m-2">
                        <h6><span class="badge bg-success pt-2">Offer</span></h6>
                    </div>
                    <a href="#!" class="      px-2 pt-2  "><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
                </div>
                <img src="/electrox_ui/images/<?= rand(1, 11) ?>.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />

                <div class="card-body p-0 pt-3 px-3">
                    <h5 class=" mb-0 card-title">GoPro action camera 4K GoPro action camera 4K</h6>

                        <p class="price  ">$29.95</p>
                        <p class="text-muted  card-text">Model: X-200</p>
                </div>
            </div>
        </div>
















    <?php
    endfor;
    ?>





</div>