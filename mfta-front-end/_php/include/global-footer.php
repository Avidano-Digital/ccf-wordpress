    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <?php if($page == 'company-donor-application' ) : ?>

    <script>

      $(document).ready(function(){
        console.log('hello');

      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict';
        window.addEventListener('load', function () {
          
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();

                $('.alert').removeClass('d-none');
                
                $('html, body').animate({
                  scrollTop: $("#page-start").offset().top
                }, 600);

              }

              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      });

    </script>
    
    <?php endif; ?>

    <?php if($page == 'recipient-application' ) : ?>

    <script>

        $('#organization-type').change(function () {
            if ($(this).val() == 'Arts Group') {
                $('#sponsorship').removeClass('d-none');
            } else {
                $('#sponsorship').addClass('d-none');
            }
        });
    
        $('input[name="sponsored"]').change(function () {
            if($('#sponsored-yes').is(':checked')) { 
                $('#sponsorship-type').removeClass('d-none');
            } else {
                $('#sponsorship-type').addClass('d-none');
            }
        });
    
    
        $('#sponsoring-organizations').change(function () {
            if ($(this).val() == 'Other') {
                $('#wrap-organization-sponsor').removeClass('d-none');
            } else {
                $('#wrap-organization-sponsor').addClass('d-none');
            }
        });
        
    </script>
    
    <?php endif; ?>

    <?php if($page == 'direct-donations' || $page == 'direct-donation-requests' ) : ?>

    <script>

      $('.dd-results button.request').click(function () {

        if (!$(this).hasClass('disabled')) {
          $(this).addClass('disabled');
          $(this).parent().find('.alert').toggleClass('d-block');
        }
        return false;
      });
  
    </script>

    <?php endif; ?>

    <?php if($page == 'authorized-contacts' ) : ?>

    <script>

      $('.modal-confirm').fadeOut();

      $('.modal-dialog button[type="submit"]').click(function (e) {

        e.preventDefault();

        $('.modal-confirm').fadeIn('fast');

        $('#new-authorized-contact').on('hidden.bs.modal', function (e) {

          $('.modal-confirm').fadeOut();
        });

      });
        
    </script>

    <?php endif; ?>

    <?php if($page == 'recipient-application.php' ) : ?>

    <script>

      $('.input-file').each(function () {
        var input = $(this);
        var label = input.next('label');
        var labelVal = label.find('span.file-name').html();

        input.on('change', function (e) {
          var fileName = '';
          console.log('hello');
          fileName = e.target.value.split('\\').pop();
          if (fileName) {
            label.find('span.file-name').html(fileName);
          } else {
            label.find('span.file-name').html(labelVal);
          }
        });
      });

    </script>

    <?php endif; ?>


    <script src="/js/main.js"></script>

    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  </body>

</html>