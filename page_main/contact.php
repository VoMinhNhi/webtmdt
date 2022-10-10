<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details</title>
  <link rel="stylesheet" href="./product.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <?php include_once(__DIR__ . '/../frontend/layouts/styles.php'); ?>

</head>

<body>
  <div>
    <?php include_once(__DIR__ . '/../frontend/layouts/partials/header.php'); ?>

    <body>

      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col-lg-8 col-lg-offset-2">

            <h1>Trang Liên Hệ <a href="#">An Nhí Smart & Services</a></h1>

            <p class="lead">Để giúp chúng tôi hoàn thiện hơn trong tương lai <a href="#">An Nhí Smart &
                Services</a>. </p>

            <p>Hãy gửi cho chúng tôi những ý kiến hoặc phản hồi cần thiết từ bạn.</p>

            <form id="contact-form" method="post" action="contact.php" role="form">

              <div class="messages"></div>

              <div class="controls">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_name">Họ *</label>
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="nhập họ của bạn *"
                        required="required" data-error="Firstname is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_lastname">Tên *</label>
                      <input id="form_lastname" type="text" name="surname" class="form-control"
                        placeholder="nhập tên của bạn *" required="required" data-error="Lastname is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_email">Email *</label>
                      <input id="form_email" type="email" name="email" class="form-control"
                        placeholder="nhập email của bạn *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="form_phone">Số điện thoại</label>
                      <input id="form_phone" type="tel" name="phone" class="form-control"
                        placeholder="nhập điện thoại của bạn">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="form_message">Tin nhắn *</label>
                      <textarea id="form_message" name="message" class="form-control"
                        placeholder="để lại lời nhắn cho chúng tôi *" rows="4" required="required"
                        data-error="Please,leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Gửi cho chúng tôi">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-muted mt-3"><strong>*</strong> Cam kết với điều khoản của chúng tôi. <a
                        href="https://bootstrapious.com" target="_blank">An & Nhí Smart Services</a>.</p>
                  </div>
                </div>
              </div>

            </form>

          </div>

        </div>

      </div>
    </body>
    <!-- end products -->

    <?php include_once(__DIR__ . '/../frontend/layouts/partials/footer.php'); ?>

    <script>
    <?php include_once(__DIR__ . '../assets/frontend/js/app.js'); ?>
    </script>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/jquery/jscript_one.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
    $(function() {
      // init the validator
      // validator files are included in the download package
      // otherwise download from http://1000hz.github.io/bootstrap-validator

      $("#contact-form").validator();

      // when the form is submitted
      $("#contact-form").on("submit", function(e) {
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
          var url = "contact.php";

          // FOR CODEPEN DEMO I WILL PROVIDE THE DEMO OUTPUT HERE, download the PHP files from
          // https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form

          var messageAlert = "alert-success";
          var messageText =
            "Your message was sent, thank you. I will get back to you soon.";

          // let's compose Bootstrap alert box HTML
          var alertBox =
            '<div class="alert ' +
            messageAlert +
            ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
            messageText +
            "</div>";

          // If we have messageAlert and messageText
          if (messageAlert && messageText) {
            // inject the alert to .messages div in our form
            $("#contact-form").find(".messages").html(alertBox);
            // empty the form
            $("#contact-form")[0].reset();
          }

          return false;
        }
      });
    });
    </script>


</body>

</html>