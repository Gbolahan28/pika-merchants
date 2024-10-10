<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Confirmation</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/iofrm-theme5.css') }}">

</head>

<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="http://pikahq.co/">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="iofrm-layout">
            <div class="img-box">
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Confirm Your Email and join the Waitlist</h3>
                        <p>Type your email below</p>
                        <form action="{{ route('send-email-confirmation') }}" method="POST"
                            id="email-confirmation-form">
                            @csrf
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button type="submit" id="submit" class="ibtn btn-forget">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Email confirmation Link Sent</h3>
                        <p>Please check your inbox</p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="index">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
   <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



    <script>
        $(document).ready(function () {
            $('#email-confirmation-form').on('submit', function (e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        $('.form-sent').show();
                        $('#email-confirmation-form').hide();
                    },
                    error: function (xhr) {
                        alert('Error sending verification email. Please try again.');
                    }
                });
            });

            $('#reenter-email').click(function (e) {
                e.preventDefault();
                $('.form-sent').hide();
                $('#email-confirmation-form').show();
            });
        });
    </script>

</body>

</html>