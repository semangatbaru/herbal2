<!DOCTYPE html>
<html>

<head>
  <?php $this->load->view('_partials/head') ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <?php $this->load->view('_partials/header'); ?>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php $this->load->view('_partials/sidebar'); ?>
      <!-- /.sidebar -->
    </aside>

  
      </nav>
    </div>
    <div class="w3l_banner_nav_right">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="w3l_banner_nav_right_banner">
                <h3>Make your <span>food</span> with Spicy.</h3>
                <div class="more">
                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                </div>
              </div>
            </li>
            <li>
              <div class="w3l_banner_nav_right_banner1">
                <h3>Make your <span>food</span> with Spicy.</h3>
                <div class="more">
                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                </div>
              </div>
            </li>
            <li>
              <div class="w3l_banner_nav_right_banner2">
                <h3>upto <i>50%</i> off.</h3>
                <div class="more">
                  <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- flexSlider -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        });
        </script>
      <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
  </div>
<!-- banner -->

    <div class="container">
      <h3>Hot Offers</h3>
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="tag"><img src="<?php echo base_url(); ?>assets/images/tag.png" alt=" " class="img-responsive" /></div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block" >
                    <div class="snipcart-thumb">
                      <a href="single.html"><img title=" " alt=" " src="<?php echo base_url(); ?>assets/images/1.png" /></a>    
                      <p>fortune sunflower oil</p>
                      <h4>Rp.7.99 <span>Rp.10.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="checkout.html" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                          <input type="hidden" name="amount" value="7.99" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                          
                      </form>
                  
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block" >
                    <div class="snipcart-thumb">
                      <a href="single.html"><img title=" " alt=" " src="<?php echo base_url(); ?>assets/images/3.png" /></a>    
                      <p>basmati rise (5 Kg)</p>
                      <h4>Rp.11.99 <span>Rp.15.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="basmati rise" />
                          <input type="hidden" name="amount" value="11.99" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="<?php echo base_url(); ?>assets/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="single.html"><img src="<?php echo base_url(); ?>assets/images/2.png" alt=" " class="img-responsive" /></a>
                      <p>Pepsi soft drink (2 Ltr)</p>
                      <h4>Rp.8.00 <span>Rp.10.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="Pepsi soft drink" />
                          <input type="hidden" name="amount" value="8.00" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="<?php echo base_url(); ?>assets/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="single.html"><img src="<?php echo base_url(); ?>assets/images/4.png" alt=" " class="img-responsive" /></a>
                      <p>dogs food (4 Kg)</p>
                      <h4>Rp.9.00 <span>Rp.11.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="dogs food" />
                          <input type="hidden" name="amount" value="9.00" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //top-brands -->

<!-- banner -->

    <div class="container">
    
      <div class="agile_top_brands_grids">
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="tag"><img src="<?php echo base_url(); ?>assets/images/tag.png" alt=" " class="img-responsive" /></div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block" >
                    <div class="snipcart-thumb">
                      <a href="single.html"><img title=" " alt=" " src="<?php echo base_url(); ?>assets/images/1.png" /></a>    
                      <p>fortune sunflower oil</p>
                      <h4>Rp.7.99 <span>Rp.10.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="checkout.html" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
                          <input type="hidden" name="amount" value="7.99" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                          
                      </form>
                  
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block" >
                    <div class="snipcart-thumb">
                      <a href="single.html"><img title=" " alt=" " src="<?php echo base_url(); ?>assets/images/3.png" /></a>    
                      <p>basmati rise (5 Kg)</p>
                      <h4>Rp.11.99 <span>Rp.15.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="basmati rise" />
                          <input type="hidden" name="amount" value="11.99" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="<?php echo base_url(); ?>assets/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="single.html"><img src="<?php echo base_url(); ?>assets/images/2.png" alt=" " class="img-responsive" /></a>
                      <p>Pepsi soft drink (2 Ltr)</p>
                      <h4>Rp.8.00 <span>Rp.10.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="Pepsi soft drink" />
                          <input type="hidden" name="amount" value="8.00" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="<?php echo base_url(); ?>assets/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="single.html"><img src="<?php echo base_url(); ?>assets/images/4.png" alt=" " class="img-responsive" /></a>
                      <p>dogs food (4 Kg)</p>
                      <h4>Rp.9.00 <span>Rp.11.00</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      <form action="#" method="post">
                        <fieldset>
                          <input type="hidden" name="cmd" value="_cart" />
                          <input type="hidden" name="add" value="1" />
                          <input type="hidden" name="business" value=" " />
                          <input type="hidden" name="item_name" value="dogs food" />
                          <input type="hidden" name="amount" value="9.00" />
                          <input type="hidden" name="discount_amount" value="1.00" />
                          <input type="hidden" name="currency_code" value="IDR" />
                          <input type="hidden" name="return" value=" " />
                          <input type="hidden" name="cancel_return" value=" " />
                          <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                      </form>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
  <div class="fresh-vegetables">
    <div class="container">
    
    </div>
  </div>
<!-- //fresh-vegetables -->


    <!-- /.content-wrapper -->
    <?php $this->load->view('_partials/footer'); ?>

    <!-- Control Sidebar -->
    <?php
    ?>
  </div>
  <!-- ./wrapper -->
  <?php $this->load->view('_partials/script'); ?>
</body>

</html>