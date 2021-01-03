    <?php
    $url = file_get_contents('https://api.kawalcorona.com/indonesia');
    $data = json_decode($url, true);
    ?>
    <?= $this->extend('layout/template'); ?>
    <?= $this->section('content'); ?>

    <!-- <div class="background">
      <div class="jumbotron">
        <p>There is more treasure in books than in all the pirate’s loot on treasure Island</p>

        <p><a href="pages/library" class="btn btn-primary tombol">Come on</a></p>
      </div>
    </div> -->

    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">sssssss</li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/img/1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Membaca buku-buku yang baik berarti memberi makanan rohani yang baik.</h5>
            <p>Buya Hamka</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Jika budaya kamu tidak menyukai orang-orang kutu buku, kamu berada pada masalah yang serius.</h5>
            <p>Bill Gates</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/img/7.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Hal-hal yang ingin kutahu ada di dalam buku, sahabat terbaik adalah orang yang akan memberikanku sebuah buku yang belum aku ketahui.</h5>
            <p>Abraham lincoln</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- main blog -->

    <section class="blog-posts py-4">
      <div class="container">
        <div class="row">

          <div class="col-md-8">

            <article class="blog-post mb-3">
              <div class="row">
                <div class="col-sm-3">
                  <img class="img-fluid" src="/img/bodo_amat.jpeg" alt="">
                </div>
                <div class="col-sm-9">
                  <h3>Sebuah seni untuk bersikap bodo amat</h3>
                  <p>Penulis : Mark Manson</p>
                  <p> Penerbit : PT. Gramedia Widiasarana Indonesia</p>
                  <p>Sinopsis : (Klik Detail untuk melihat sinopsis)</p>
                  <div class="badge text-wrap">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail">
                      Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
                      <div class="modal-dialog  ">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailLabel">Sinopsis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-justify">
                            <p>Novel yang berjudul Sebuah Seni Untuk Bersikap Bodo Amat bercerita tentang seseorang yang bernama Charles Bukowski yang mempunyai masa lalu yang kelam, suka mabuk-mabukan, berjudi, mempermainkan wanita, kasar, tukang utang dan seorang penyair. Dia bercita-cita menjadi seorang penulis terkenal namun karya-karyanya selalu ditolak oleh hampir disetiap majalah, jurnal-jurnal, surat kabar dan penerbit lainnya. Semua penerbit tersebut tidak mau menerbitkan karyanya dengan alasan tulisannya yang kasar, menjijikkan dan tidak bermoral.</p>
                            <p>Berpuluh tahun Bukowski hidup sebagai penyair dan kehidupan yang buruk, sampai pada akhirnya ada seorang editor yang tertarik akan karya Bukowski sehingga editor tersebut mau membantu untuk menerbitkan karya Bukowski. Mulai dari situlah Bukowski menulis karya-karya dan menjadi sukses. Novel ini merupakan cerita dibalik kesuksesan Bukowski yang sesungguhnya. Dia merasa “nyaman” dengan dirinya yang dianggap sebagai sebuah kegagalan.</p>
                            <p>Novel ini merupakan kisah nyata Bukowski yang intinya bagaimana ia menyikapi kegagalan dan kesulitan yang dihadapi dalam kehidupannya dengan cara bersikap “bodo amat” sehingga dia bertahan, merasa baik dan menerima disaat keadaan buruknya sehingga dia bisa menghadapi kesulitan-kesulitan tersebut. Dengan bersikap bodo amat akan hal-hal atau masalah yang dihadapi maka kita sudah berhasil memutus rantai lingkaran setan.</p>
                            <p>Dalam novel sebuah seni bersikap bodo amat ini terdapat 3 seni dimana tiga seni ini menggambarkan bagaimana seseorang tersebut memang harus bersikap bodo amat akan sesuatu hal, agar dirinya bisa menjadi lebih baik dari sebelumnya. Pertama Bodo amat bukan berarti acuh tak acuh, bodo amat berati nyaman saat menjadi berbeda. Kedua Untuk bisa mengatakan “bodo amat” pada kesulitan, pertama tama kita harus peduli terhadap sesuatu yang jauh lebih penting dari pada kesulitan</p>
                            <p>Ketiga Didalam novel ini terdapat banyak kisah dan pengalam hidup mulai darikisah tentang orang yang terobsesi akan hidup yang “benar” sehingga mereka tidak benar-benar menjalani hidup itu sendiri, kisah tentang tentang seorang pangeran yang pada akhirnya memilih hidup dijalanan daripada di istana, kisah tentang seorang motivator terkenal yang bernama Jimmy yang dikenal dengan kayanya yang selalu memberikan motivasi ke banyak orang, tetapi dirinya tidak menemukan kebahagian didalam hidupnya, kisah tentang Hiroo Onoda yang setia terhadap kekaisaran yang telah hilang, dengan cara hidup berpuluh tahun didalam hutan rimba serta kisah tentang Joshsahabat Bukowski yang ditemukan meninggal di sebuah danau yang membuat diri Bukowskimenjadi kacau dan dari kematian Josh tersebut berdampak positif terhadap hidup Bukowski yaitu menjalani kehidupan yang lebih baik dan bermanfaat sebulum kematian itu menjemput dirinya.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </article>

            <article class="blog-post mb-3">
              <div class="row">
                <div class="col-sm-3">
                  <img class="img-fluid" src="/img/love_life.jpeg" alt="">
                </div>
                <div class="col-sm-9">
                  <h3>#88 Love Life</h3>
                  <p>
                    Penulis : Diana Rikasari
                  </p>
                  <p>
                    Penerbit : Gramedia Pustaka Utama
                  </p>
                  <p>
                    Sinopsis : (Klik Detail untuk melihat sinopsis)
                  </p>
                  <div class="badge text-wrap">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail1">
                      Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="detail1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailLabel1" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailLabel1">Sinopsis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-justify">
                            <p>Dan dan Carmen memiliki segalanya. Paling tidak seperti itulah kelihatannya: muda, kaya, tampan, dan cantik, puas dengan pekerjaan juga kehidupan percintaan dan telah dikaruniai seorang buah hati cantik berusia setahun. Ketika Carmen dinyatakan menderita kanker payudara, Dan tak sanggup menghadapi kenyataan berikut berbagai perubahan yang terjadi pada kehidupan rumah tangga mereka yang bahagia dan sempurna. Sementara Carmen menjalani kemoterapi dan akhirnya masektomi, Dan yang hedonis berusaha menghibur diri dengan teman-temannya serta tenggelam dalam pelukan sejumlah perempuan. Namun ia berhenti melarikan diri dan berhasil memberi dukungan kepada sang istri yang memutuskan mengakhiri hidupnya dengan bermartabat</p>
                            <p>Inilah kisah tentang suatu penyakit tak tersembuhkan yang sama sekali tak dilebih-lebihkan atau mengandung sentimen palsu. Love Life tak menyiratkan penyesalan, benar-benar kontroversial, sekaligus amat menyentuh dan mencerminkan kehidupan.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <article class="blog-post mb-3">
              <div class="row">
                <div class="col-sm-3">
                  <img class="img-fluid" src="/img/merdeka_sejak.jpeg" alt="">
                </div>
                <div class="col-sm-9">
                  <h3>Merdeka sejak hati</h3>
                  <p>
                    Penulis :Ahmad Fuadi
                  </p>
                  <p>
                    Penerbit : KPG
                  </p>
                  <p>
                    Sinopsis : (Klik Detail untuk melihat sinopsis)
                  </p>
                  <div class="badge text-wrap">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detail2">
                      Detail
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="detail2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="detailLabel2" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="detailLabel2">Sinopsis</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-justify">
                            <p>Buku yang menceritakan pasang surut perjuangan Lafran Pane dalam berjuang melakukan aktifitasnya baik dalam melawan penjajah ataupun pasang surut dalam membangun dan mengembangkan organasasi mahasiswa. Organisasi Mahasiswa tersebut adalah Himpunan Mahasiswa Islam atau di kenal dengan HMI oleh kalangan mahasiswa dan masyarakat.</p>
                            <p>Di ceritakan pada buku tersebut bahwa Lafran Pane adalah anak dari Sutan Pangarubaan Pane dan Gonto siregar, pasangan yang serasi dan mempunyai posisi yang terhormat di lingkungan masyarakat. Sebelum Lafran Pane lahir saudara kandungnya yaitu anak bungsu yang bernama Siti Zahara Pane, gadis manis cilik harus pergi meninggalkan dunia selama-lamanya.</p>
                            <p>Dampak dari meninggalnya Zahara membuat gonto sakit sakitan akibat dari kesedihan yang berlarut larut. Sehingga membuat badan gonto kering dan kurus, sampai akhirnya gonto pun mengandung Lafran Pane. Dalam kandungan gonto yang tak berdaya dan kurus kerontang akhirnya Lafran Pane pun lahir dalam keadaan selamat dan tak kurang suatu apapun. Tak selang beberapa bulan Gonto meninggal Dunia.</p>
                            <p>
                              Lafran Pane sejak kecil dia sudah piatu, dia dirawat oleh neneknya yang sayang kepada Gonto dan cucunya. Akan tetapi Lafran kecil tidak ingin diatur kehidupannya oleh nenek. Dia berusaha mencari kebebasan dengan teman-temannya, terkadang juga lafran sering melanggar nasehat neneknya. Di balik lafran yang bukan penurut itu terkandung sesosok anak kecil dengan pemikiran yang cerdas.
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </article>

          </div>
          <aside class="col-md-4">
            <h4>Indonesia Corona Virus </h4>
            <article class="row author mb-3">
              <div class="col-sm-3">
                <img class="img-fluid rounded-circle" src="/img/positif.png" alt="">
              </div>
              <div class="col-sm-9">
                <h5>Positive</h5>
                <p><?= $data[0]['positif']; ?> orang.</p>
              </div>

            </article>
            <article class="row author mb-3">
              <div class="col-sm-3">
                <img class="img-fluid rounded-circle" src="/img/dirawat.png" alt="">
              </div>
              <div class="col-sm-9">
                <h5>Dirawat</h5>
                <p><?= $data[0]['dirawat']; ?> orang.</p>
              </div>

            </article>
            <article class="row author mb-3">
              <div class="col-sm-3">
                <img class="img-fluid rounded-circle" src="/img/sembuh.png" alt="">
              </div>
              <div class="col-sm-9">
                <h5>Sembuh</h5>
                <p><?= $data[0]['sembuh']; ?> orang.</p>
              </div>

            </article>
            <article class="row author mb-3">
              <div class="col-sm-3">
                <img class="img-fluid rounded-circle" src="/img/meninggal.png" alt="">
              </div>
              <div class="col-sm-9">
                <h5>Meninggal</h5>
                <p><?= $data[0]['meninggal']; ?> orang.</p>
              </div>

            </article>
        </div>

        </aside>
      </div>
      </div>
    </section>
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->

    <!-- <div class="container dik ">
        <div class="row justify-content-center">
            <div class="col-lg-8 info-panel">
                <h5 class="text-center mt-3">Update Corona di Indonesia</h5>
                <div class="row  text-center">
                    <div class="col-lg ">
                        <p>Positif</p>
                        <p><?= $data[0]['positif']; ?></p>
                    </div>
                    <div class="col-lg">
                        <p>Dirawat</p>
                        <p><?= $data[0]['dirawat']; ?></p>
                    </div>
                    <div class="col-lg">
                        <p>Sembuh</p>
                        <p><?= $data[0]['sembuh']; ?></p>
                    </div>
                    <div class="col-lg">
                        <p>Meninggal</p>
                        <p><?= $data[0]['meninggal']; ?></p>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <?= $this->endSection(); ?>