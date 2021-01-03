<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="modal fade" id="aboutModal" role="dialog">
    <div class="modal-dialog col-auto">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h1>About us</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Start About Page  -->
            <div class="container">
                <div class="row my-4">
                    <div class="col-12">
                        <h2 class="noo-sh-title text-center">Description Job</h2>
                    </div>


                    <div class="col-sm-6 col-lg-6">
                        <div class="hover-team">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= base_url('assets/img/kita') ?>/taufik.jpeg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Taufik</h3> <span class="post">Web Developer</span>
                                </div>

                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="hover-team">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= base_url('assets/img/kita') ?>/maul.jpeg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Maul</h3> <span class="post">Web Maintenance</span>
                                </div>

                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="hover-team">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= base_url('assets/img/kita') ?>/risma.jpeg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Risma</h3> <span class="post">Web Design</span>
                                </div>

                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="hover-team">
                            <div class="our-team">
                                <img class="img-fluid" src="<?= base_url('assets/img/kita') ?>/sahrial.jpeg" alt="" />
                                <div class="team-content">
                                    <h3 class="title">Sahrial</h3> <span class="post">Asset Design</span>
                                </div>

                                <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                            </div>
                            <div class="team-description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection(); ?>