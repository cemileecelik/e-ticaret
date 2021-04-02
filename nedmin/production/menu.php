<?php include 'header.php';


$menusor = $db->prepare("Select * from menu");
$menusor->execute();

?>



<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">



        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Menüler<small>

                                <?php checkDurum(); ?>
                            </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!--    -->

                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th>S. No</th>
                                    <th>Menü Ad</th>
                                    <th>Menü Url</th>
                                    <th>Menü Sıra</th>
                                    <th>Menü Durum</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <!-- trler satır thler sütun thead kısmı başlıktan oluşur  -->
                            <tbody>

                                <?php

$say=0;
                                while ($menucek = $menusor->fetch(PDO::FETCH_ASSOC)) { $say++?>


                                    <tr>
                                    <td><?php echo $say ?></td>
                                        <td><?php echo $menucek['menu_ad'] ?></td>
                                        <td><?php echo $menucek['menu_url'] ?></td>
                                        <td><?php echo $menucek['menu_sira'] ?></td>


                                        <td>


                                            <?php
                                            if ($menucek['menu_durum'] == 1) { ?>

                                                <button class="btn btn-success btn-xs">Aktif</button>
                                            <?php  }  else {?>

                                                <button class="btn btn-danger btn-xs">Pasif</button>

                                                <?php } ?>

                                                <!--  
                                                    success - yeşil
                                                    warning -> turuncu
                                                    danger -> kırmızı
                                                    default -> beyaz
                                                    primary ->mavi buton
                                                 -->
                                            
                                        </td>



                                        <td>
                                            <center><a href="menu-duzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center>
                                        </td>
                                        <td>
                                            <center><a href="../netting/islem.php?menu_id=<?php echo $menucek['menu_id']; ?>&menusil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center>
                                        </td>
                                    </tr>




                                <?php  }

                                ?>


                            </tbody>
                        </table>




                        <!--   -->


                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<?php include 'footer.php'; ?>