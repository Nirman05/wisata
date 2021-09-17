<div id="wisata_kuliner">
                            <?php

                            require_once('admin/administrator/config/koneksi.php');




                            ?>
    <style>
        @import url(./fonts/font-awesome/css/font-awesome.css);


        .rating {
            border: none;
            float: left;
        }

        .rating>input {
            display: none;
        }

        .rating>label::before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating>label {
            color: #ddd;
            float: right;
        }

        .rating>input:checked~label,
        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #f7d106;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        .rating>input:checked~label:hover~label {
            color: #fce873;
        }

        h4 {
            font-weight: normal;
            margin-top: 40px;
            margin-bottom: 0px;
        }

        #hasil {
            font-size: 50px;
        }

        #star {
            float: left;
            padding-right: 20px;
        }

        #star span {
            padding: 3px;
            font-size: 20px;
        }

        .on {
            color: #f7d106
        }

        .off {
            color: #ddd;
        }
    </style>

    <div class="container">




        <?php
        //ambil data
        $get = $config->query("SELECT c.id_kuliner AS id_kuliner, nm_kuliner, info_kuliner, AVG(rating) AS rating, gambar FROM df_kuliner c LEFT JOIN k_rating r ON(c.id_kuliner = r.id_kuliner) GROUP BY c.id_kuliner ORDER BY rating DESC");

        //cek jumlah data
        if ($get->num_rows > 0) {

            //looping untuk membaca data
            while ($d = $get->fetch_assoc()) {
                //buat looping untuk rating
                $star = '';

                for ($i = 1; $i <= 5; $i++) {
                    if ($i <= ceil($d['rating'])) {
                        //masukkan rating ke variabel $star
                        $star .= '<span class="on"><i class="fa fa-star"></i></span>';
                    } else {
                        //masukkan rating ke variabel $star
                        $star .= '<span class="off"><i class="fa fa-star"></i></span>';
                    }
                } ?>
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row no-gutters">
                        <div class="col-sm-4 ">
                            <img src="admin/administrator/assets/img/foto_wisata/<?php echo $d['gambar']; ?>" class="card-img mt-2 mb-2 ml-1 " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2><?php echo $d['nm_kuliner']; ?></h2>
                                <!-- awal ratind -->
                                <div class="star">
                                    <?php echo $star; ?> <small>Rating (<?php echo ($d['rating'] != '') ? (int)$d['rating'] : 0; ?>/5)</small>

                                </div>
                                <!-- Akhir rating -->
                                <p class="card-text"><?php echo substr($d['info_kuliner'], 0, 500)   ?>...</p>
                                <a href="?page=detail_k&id=<?= $d['id_kuliner'] ?> " class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>

                </div>
                        <?php
                            }
                        }
                        ?>

     </div>   
 </div>