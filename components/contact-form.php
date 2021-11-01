<script type="text/javascript">
    $(document).ready(function(e) {
        $("#contactForm").on('submit', (function(e) {
            e.preventDefault();
            $("#mail-status").hide();
            $('#send-message').hide();
            $('#loader-icon').show();
            $.ajax({
                url: "components/contact.php",
                type: "POST",
                dataType: 'json',
                data: {
                    "name": $('input[name="name"]').val(),
                    "email": $('input[name="email"]').val(),
                    "phone": $('input[name="phone"]').val(),
                    "message": $('textarea[name="message"]').val(),
                    "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                },
                success: function(response) {
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if (response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class", "error");
                    } else if (response.type == "message") {
                        $('#send-message').hide();
                        $("#mail-status").attr("class", "success");
                    }
                    $("#mail-status").html(response.text);
                },
                error: function() {}
            });
        }));
    });
</script>
<?php include('constant.php'); ?>
<div class="contact-form-holder">
    <div class="contact-overlay">
        <button id="show-contact-form">Želite da nam pošaljete poruku?</button>
    </div>
    <form action="" id="contactForm" class="row py-5 contact-inactive" method="POST" novalidate="novalidate">
        <!-- Name -->
        <div class="col-12 mb-3 col-md-6">
            <input class="w-100 form-control required" id="user-name" name="name" type="text" placeholder="Vaše ime *" class="" aria-required="true" required>
        </div>
        <!-- Phone -->
        <div class="col-12 mb-3 col-md-6">
            <input class="w-100 form-control required phone" id="user-phone" name="phone" type="text" placeholder="Vaš broj telefona *" aria-required="true" required>
        </div>
        <!-- e-Mail -->
        <div class="col-12 mb-3">
            <input class="w-100 form-control mail" id="user-mail" type="email" name="email" placeholder="Vaša E-mail adresa">
        </div>
        <!-- Msg -->
        <div class="col-12 mb-3">
            <textarea class="w-100 form-control required " id="user-msg" name="message" id="message" placeholder="Vaša poruka *" aria-required="true" required></textarea>
        </div>
        <!-- Status -->
        <div class="col-12 mb-2">
            <div class="w-100" id="mail-status"></div>
        </div>
        <!-- Captcha API -->
        <div class="col-12 d-flex justify-content-between button-and-recaptcha">
            <div class="recaptcha-holder">
                <div class="g-recaptcha d-none" data-sitekey="<?php echo SITE_KEY; ?>"></div>
            </div>
            <!-- Button / Loader -->
            <div class="button-or-loader d-flex justify-content-center">
                <button id="send-message" type="submit" name="submit" class="btn btn-primary">Pošaljite</button>
                <div id="loader-icon">
                    <img loading="lazy" data-src="assets/img/loading.gif" alt="Tepih servis i dubinsko S&J | Loading" />
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    let showContact = document.getElementById('show-contact-form');
    showContact.addEventListener('click', function() {
        var recaptchaAPIScript = document.createElement('script');
        recaptchaAPIScript.type = 'text/javascript';
        recaptchaAPIScript.src = 'https://www.google.com/recaptcha/api.js';
        recaptchaAPIScript.defer = true;
        document.head.appendChild(recaptchaAPIScript);

        let recaptchaHolder = document.querySelector('.recaptcha-holder > .g-recaptcha');
        recaptchaHolder.classList.remove('d-none');
        setTimeout(() => {
            document.getElementsByClassName('contact-overlay')[0].remove();
            document.getElementById('contactForm').classList.remove('contact-inactive');
        }, 1000);
    });
</script>