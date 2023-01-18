
<?php
      include "ust.php";
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ayarlar</h2>
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
                  <?php 
                 if(isset($_GET['durum']))
                        {
                           if($_GET['durum']) 
                          {
                            ?>
                         <div class="alert alert-success alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <strong>Güncelleme Yapıldı</strong>
                           </div>
                            <?php
                          }
                            else
                             
                            {
                              ?>
                           <div class="alert alert-danger  alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <strong>Güncelleme Yapılamadı!!!</strong>
                             </div>
                              <?php
                            }

                        }
                      ?>

                    <form action="ayar_güncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>

                      <p>Web sayfanızın ayarlarını düzenleyebileceğiniz sayfadır.</p>
                      <span class="section">Genel Ayarlar</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_baslik">Sitenin Başlığı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_baslik" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_baslik"
                        value="<?php echo $ayar['ayar_baslik']?> "  placeholder="buraya sitenizin başlığını giriniz." required="required" type="text">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_desciription">Sitenin Açıklanması <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_desciription" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_desciription"
                          value="<?php echo $ayar['ayar_desciription']?> "placeholder="buraya sitenizin açıklanmasını giriniz." required="required" type="text">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_keywords">Anahtar Kelimeler <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_keywords" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_keywords"
                          value="<?php echo $ayar['ayar_keywords']?> " placeholder="buraya sitenizin anahtar kelimelerini giriniz." required="required" type="text">
                        </div>
                      </div>

                            <span class="section">Sosyal Medya Hesapları</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_instagram">İnstagram</label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_instagram" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_instagram"
                          value="<?php echo $ayar['ayar_instagram']?> "placeholder="varsa İnstagram adresinizi giriniz" type="text">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_github">GitHub
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_github" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_github"
                          value="<?php echo $ayar['ayar_github']?> " placeholder=" varsa GitHub adresinizi giriniz." type="text">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_linkedln">linkedln 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_linkedln" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_linkedln"
                          value="<?php echo $ayar['ayar_linkedln']?> "placeholder="varsa linkedln adresinizi giriniz." type="text">
                        </div>
                      </div>
                        <span class="section">Mail Ayarlar</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msunucu">Mail Sunucu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msunucu" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_msunucu"
                          value="<?php echo $ayar['ayar_msunucu']?> " placeholder="buraya Mail Sunucu Adresini giriniz." required="required" type="text">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mport">Port Numarası <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mport" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_mport"
                          value="<?php echo $ayar['ayar_mport']?> " placeholder="buraya Portu giriniz." required="required" type="text">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_mkadi">Mail Adresi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_mkadi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_mkadi"
                          value="<?php echo $ayar['ayar_mkadi']?> "placeholder="buraya Mail Adresinizi giriniz." required="required" type="text">
                        </div>
                      </div>

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayar_msifre">Mail Şifresi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ayar_msifre" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="ayar_msifre"
                          value="<?php echo $ayar['ayar_msifre']?> "placeholder="buraya şifrenizi giriniz." required="required" type="padssword">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button id="send" name="ayar_baslik" type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
include "alt.php";
?>