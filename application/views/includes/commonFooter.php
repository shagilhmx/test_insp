<!--Main Footer-->
<footer class="main-footer" id="FooterForm">
  <div class="auto-container">
    <!--Widgets Section-->
    <div class="widgets-section">
      <div class="row clearfix">
        <!--big column-->
        <div class="big-column col-sm-12">
          <div class="row clearfix">
            <!--Footer Column-->
            <div class="footer-column col-lg-12 col-md-12 col-sm-12">
              <div class="footer-widget form-widget">
                <div class="request-form">
                  <div class="sec-title">
                    <!-- <span class="title">villa plan</span> -->
                    <h2 class="text-white">Enquiry Now</h2>
                  </div>
                  <form name="bookSiteVisitForm" class="bookSiteVisitForm" action="javascript:void(0);" method="POST">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="txt_Name" id="txt_Name" placeholder="Your name" required />
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                          <input type="email" name="txt_EmailID" id="txt_EmailID" placeholder="Email address" required />
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="txt_Phone" id="txt_Phone" placeholder="Phone number" required />
                        </div>
                      </div>
                      <div class="col-12 mb-3 text-right">
                        <div class="form-group">
                          <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Submit</span></button>
                        </div>
                      </div>
                      <div class="col-12 text-center">
                        <span class="bookingStatus"></span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="auto-container">
      <div class="inner-container">
        <div class="clearfix">
          <!-- Social Links -->
          <ul class="social-links">
            <li><a href="https://www.facebook.com/inspirabuilder" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
            <li><a href="https://www.instagram.com/inspirabuilders" target="_blank"><span class="fab fa-instagram"></span></a></li>
            <li><a href="https://twitter.com/inspirabuilders" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a href="https://www.linkedin.com/company/33317539/admin" target="_blank"><span class="fab fa-linkedin"></span></a></li>
            <li><a href="https://www.youtube.com/channel/UCno5GM3tacE4r_9wFfncf3A" target="_blank"><span class="fab fa-youtube"></span></a></li>
            <li><a href="https://in.pinterest.com/inspirabuilders0676/_created/" target="_blank"><span class="fab fa-pinterest"></span></a></li>
          </ul>

          <div class="copyright">
            &copy; 2022 Inspirabuilders All rights reserved.<br />
            Developed by <b><a href="https://digitalscorcher.com/" target="_blank">Digital Scorcher</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!--Scroll to top-->

<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>js/mixitup.js"></script>
<script src="<?php echo base_url(); ?>js/appear.js"></script>
<script src="<?php echo base_url(); ?>js/owl.js"></script>
<script src="<?php echo base_url(); ?>js/wow.js"></script>
<script src="<?php echo base_url(); ?>js/scrollbar.js"></script>
<script src="<?php echo base_url(); ?>js/script.js"></script>
<script src="<?php echo base_url(); ?>js/form-script.min.js"></script>

<script>
$('a.page-scroll').bind('click', function(event) {
  var $anchor = $(this);
  $('html, body').stop().animate({
    scrollTop: $($anchor.attr('href')).offset().top - 85,
  }, 500, 'linear');
  event.preventDefault();
});

function resetDBFP() {
  $("#downloadBFP").removeClass('d-none');
  $("#downloadBFPSuccess").addClass('d-none');
};
</script>

<!-- Chat widget -->
<script>
(function(w, d, s, u) {
  w.gbwawc = {
    url: u,
    options: {
      waId: "+91 9148021044",
      siteName: " Inspira Builders",
      siteTag: " Builders",
      siteLogo: "https://www.inspirabuilders.com/wp-content/uploads/2019/10/Inspira-Logo-white-s.png",
      widgetPosition: "LEFT",
      triggerMessage: "",
      welcomeMessage: "To build the best, cost-effective and top notch luxury apartments, real estate, and commercial properties that resonate with the needs of customers.",
      brandColor: "#25D366",
      messageText: "Hi! I'm interested in your projects",
      replyOptions: ["Residential", ],
    },
  };
  var h = d.getElementsByTagName(s)[0],
    j = d.createElement(s);
  j.async = true;
  j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
  h.parentNode.insertBefore(j, h);
})(window, document, "script", "https://waw.gallabox.com");
</script>
<!-- /Chat widget -->
</body>

</html>