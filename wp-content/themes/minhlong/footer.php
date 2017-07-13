</div>
</div>
<!-- content -->

<!-- footer -->
<div class="border-footer"></div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-7 footer-left">
        <!--<a href="<?php /*echo get_bloginfo('url'); */ ?>"><img class="logo-footer"  src="<?php /*echo get_option('logoFile'); */ ?>"></a>-->
        <h2 class="caption-title footer-text"> Công Ty TNHH Hoàng Phi ViNa</h2>
        <p class="left-footer"><i class="fa fa-map-marker" aria-hidden="true"></i>
          Địa chỉ: A802, Tổ 18B, Khu Phố 1, Phường Long Bình, Tp, Biên Hòa, Đồng Nai</p>
          <p class="left-footer"><i class="fa fa-phone" aria-hidden="true"></i>Mr Phi:
            0942 634 923 </p>
            <p class="left-footer"><i class="fa fa-envelope" aria-hidden="true"></i>
              Email: hoangphivina79@gmail.com</p>
              <p class="left-footer"><i class="fa fa-globe" aria-hidden="true"></i>
                http://hoangphivina.com.vn</p>
              </div>
              <div class="col-xs-12 col-sm-5 col-md-5 footer-right">
                <?php
                if (is_active_sidebar('footer-sidebar')) {
                  dynamic_sidebar('footer-sidebar');
                }
                ?>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3" style="display: none">
                <h4 class="h4-title">Danh Mục</h4>
                <?php minhlong_menu('footer-menu'); ?>
              </div>

            </div>
          </div>
        </footer>
        <div class="footer-buttom">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="col-xs-12 col-sm-6 col-md-6 footer-copyright">
                  <div class="row">
                    <p class="copyright"> ©copyright <?php echo date('Y'); ?> <a
                      href="<?php echo get_bloginfo('url'); ?>"><b> <?php bloginfo('sitename'); ?></b></a>
                    </p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="row">
                    <div class="footer-icon-network">
                      <a class="icon-footer" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a class="icon-footer" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                      <a class="icon-footer" target="_blank"
                      href="http://trangvangvietnam.com/image_listings/1187756820/cong_ty_tnhh_hoang_phi_vi_na.html">
                      <img
                      src="http://localhost/hoangphi/wp-content/uploads/2017/05/new_logo_trangvangvietnam.png"
                      alt="new_logo_trangvangvietnam"
                      class="alignnone size-full wp-image-178" style="height: 35px;width: auto;"/></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <a href="#" class="scrollup">Scroll</a>
      <?php wp_footer(); ?>

<!--<div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  </script>
  <style>#cfacebook{position:fixed;bottom:0px;right:85px;z-index:999999999999999;width:250px;height:auto;border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}#cfacebook .fchat .fb-page{margin-top:-130px;float:left;}#cfacebook a.chat_fb{float:left;padding:0 25px;width:250px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}
  </style>
  <script>
      jQuery(document).ready(function () {
          jQuery(".chat_fb").click(function() {
            jQuery('.fchat').toggle('slow');
          });
      });
  </script>
  <div id="cfacebook">
      <a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Liên hệ khách hàng</a>
      <div class="fchat">
      <div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/baohanhminhlong" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
      </div>
    </div>-->
    <script>
      jQuery(document).ready(function ($) {
        var widthscreen= $( window ).width();
        if (widthscreen >= 768) {
          var stickyNavTop = $('.header-bottom').offset().top;

          var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
              $('.header-bottom').addClass('sticky');
            } else {
              $('.header-bottom').removeClass('sticky');
            }
          };

          stickyNav();

          jQuery(window).scroll(function () {
            stickyNav();
          });
        }
      });
    </script>

  </body>
  </html>
