<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
           <?php include "components/dash-sidebar.php" ?>
            <main class="col-lg-9 col-xl-9">
                <div class="card p-4 mb-0 shadow-0 border">
                    <div class="content-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <img src="/electrox_ui/images/1.webp" class="rounded-circle" style="height: 60px; width: 60px;" />
                            </div>
                            <div class="pt-2">
                                <h6 class="pt-2">Mr. Jackson Mike</h6>
                                <p>
                                    Email: myusername@gmail.com, Phone: +1234567890988
                                    <a href="#" class="px-2"><i class="fa fa-pen"></i></a>
                                </p>
                            </div>
                        </div>

                        <hr />

                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <div class="border p-3 rounded-3 bg-light">
                                    <b class="mx-2 text-muted"><i class="fa fa-map-marker-alt"></i></b>
                                    United States, 3601 Old Capitol Trail, Unit A-7, Suite
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="border p-3 rounded-3 bg-light">
                                    <b class="mx-2 text-muted"><i class="fa fa-map-marker-alt"></i></b>
                                    Moscow city, Street name, Building lenin, House 77
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-light border"> <i class="me-2 fa fa-plus"></i> Add new address </a>

                        <hr class="my-4" />

                        <h5 class="mb-3">Your orders</h5>

                         <?php include "components/dash-orderbox.php" ?>
                        <?php include "components/dash-orderbox.php" ?> 

                    </div>
                </div>
            </main>
        </div>

    </div>
</section>