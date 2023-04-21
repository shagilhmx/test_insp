jQuery(
    (function($) {
        "use strict";

        $(".bookSiteVisitForm").on("submit", function() {
            // alert('dsgfhdg');
            $(".bookingStatus").html(
                '<div class="alert alert-warning"><strong>We are Submitting your Details...</strong></div>'
            );
            var form = $(this);

            function fail_func(response) {
                $(".bookingStatus").html(
                    '<div class="alert alert-success"><strong>Thank you for Submitting your Details. Our team will get in touch with you shortly.</strong></div>'
                );
                setTimeout(function() {
                    $(".bookSiteVisitForm").trigger("reset");
                }, 3000);
                setTimeout(function() {
                    $(".bookingStatus").fadeOut();
                    location.reload();
                }, 4000);
            }

            function done_func(data) {
                $(".bookingStatus").html(
                    '<div class="alert alert-danger"><strong>Error while Submitting your Details!</strong></div>'
                );
                setTimeout(function() {
                    $(".bookSiteVisitForm").trigger("reset");
                }, 3000);
                setTimeout(function() {
                    $(".bookingStatus").fadeOut();
                    location.reload();
                }, 4000);
            }
            $.ajax({
                    url: "https://form.sakwebsitedesign.com/inspira/bookSiteVisit.php",
                    method: form.attr("method"),
                    data: form.serialize(),
                })
                .done(done_func)
                .fail(fail_func);
            return false;
        });

        $(".downloadBFPForm").on("submit", function() {
            $(".downloadBFPStatus").fadeIn();
            $(".downloadBFPStatus").html(
                '<div class="alert alert-warning"><strong>We are Submitting your Details...</strong></div>'
            );
            var form = $(this);

            function fail_func(response) {
                // $(".downloadBFPStatus").fadeIn();
                $(".downloadBFPStatus").html(
                    '<div class="alert alert-success"><strong>Thank you for Submitting your Details. Your Brochure & Floor Plan are ready to Download</strong></div>'
                );
                setTimeout(function() {
                    $(".downloadBFPForm").trigger("reset");
                }, 4000);
                setTimeout(function() {
                    $(".downloadBFPStatus").fadeOut();
                    // location.reload();
                    $("#downloadBFP").addClass('d-none');
                    $("#downloadBFPSuccess").removeClass('d-none');
                    $("#DownloadFormModalTitle").html('files are ready to download');
                }, 5000);
            }

            function done_func(data) {
                $(".downloadBFPStatus").html(
                    '<div class="alert alert-danger"><strong>Error while Submitting your Details!</strong></div>'
                );
                setTimeout(function() {
                    $(".downloadBFPForm").trigger("reset");
                }, 3000);
                setTimeout(function() {
                    $(".downloadBFPStatus").fadeOut();
                    location.reload();
                }, 4000);
            }
            $.ajax({
                    url: "https://form.sakwebsitedesign.com/inspira/bookSiteVisit.php",
                    method: form.attr("method"),
                    data: form.serialize(),
                })
                .done(done_func)
                .fail(fail_func);
            return false;
        });

    })(jQuery)
);